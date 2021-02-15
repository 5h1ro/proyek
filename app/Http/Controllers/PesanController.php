<?php

namespace App\Http\Controllers;
use App\Models\Barang;
use App\Models\Pesanan;
use App\Models\PesananDetail;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Carbon;
use Illuminate\Http\Request;

class PesanController extends Controller
{
    public function index($id){
        $barangs = Barang::where('id', $id)->first();
        // dd($barangs);
        return view('admin.pesan.index',  compact('barangs'));
    }

    public function pesan(Request $request, $id){
       $barang = Barang::where('id', $id)->first();
       $tanggal = Carbon::now();

       if($request->jumlah_pesan > $barang->stok){
           return redirect('pesan/'.$id);
       }


       $cek_pesanan = Pesanan::where('user_id', Auth::user()->id)->where('status', 0)->first();

       if(empty($cek_pesanan)){
            $pesanan = new Pesanan;
            $pesanan->user_id = Auth::user()->id;
            $pesanan->tanggal = $tanggal;
            $pesanan->status = 0;
            $pesanan->jumlah_harga = 0;
            $pesanan->save();
       }


       $pesanan_baru = Pesanan::where('user_id', Auth::user()->id)->where('status', 0)->first();

       $cek_pesanan_detail = PesananDetail::where('barang_id', $barang->id)->where('pesanan_id', $pesanan_baru->id)->first();
       if(empty($cek_pesanan_detail)){
           $pesanan_detail = new PesananDetail();
       $pesanan_detail->barang_id = $barang->id;
       $pesanan_detail->pesanan_id = $pesanan_baru->id;
       $pesanan_detail->jumlah = $request->jumlah_pesan;
       $pesanan_detail->jumlah_harga = $barang->harga*$request->jumlah_pesan;
       $pesanan_detail->save();
       } else {
           $pesanan_detail = PesananDetail::where('barang_id', $barang->id)->where('pesanan_id', $pesanan_baru->id)->first();
           $pesanan_detail->jumlah = $pesanan_detail->jumlah+$request->jumlah_pesan;

           $harga_pesanan_detail_baru = $barang->harga*$request->jumlah_pesan;
           $pesanan_detail->jumlah_harga = $pesanan_detail->jumlah_harga+$harga_pesanan_detail_baru;
           $pesanan_detail->update();
       }

       $pesanan = Pesanan::where('user_id', Auth::user()->id)->where('status', 0)->first();
       $pesanan->jumlah_harga = $pesanan->jumlah_harga+$barang->harga*$request->jumlah_pesan;
       $pesanan->update();

       return redirect('dashboard');
    }
}