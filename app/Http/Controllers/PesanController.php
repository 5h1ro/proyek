<?php

namespace App\Http\Controllers;
use App\Models\Barang;
use App\Models\Pesanan;
use UxWeb\SweetAlert\SweetAlert;
use Alert;
use UxWeb\SweetAlert\SweetAlertNotifier;
use UxWeb\SweetAlert\ConvertMessagesIntoSweetAlert;
use UxWeb\SweetAlert\SweetAlertServiceProvider;
use App\Models\PesananDetail;
use App\Models\User;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Carbon;
use Illuminate\Http\Request;
use RealRashid\SweetAlert\Facades\Alert as FacadesAlert;

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
            $pesanan->bukti = 'kosong';
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


    //    SweetAlert::success('Success Message', 'Optional Title');
       FacadesAlert::success('Success', 'Berhasil Dimasukkan Keranjang');
       return redirect('dashboard');
    }

    public function checkout()
    {
        $pesanan = Pesanan::where('user_id', Auth::user()->id)->where('status', 0)->first();
        if(!empty($pesanan))
        {
            $pesanan_details =  PesananDetail::where('pesanan_id', $pesanan->id)->get();
            return view('admin.pesan.checkout', compact('pesanan', 'pesanan_details'));
        }

        return view('admin.pesan.checkout', compact('pesanan'));

    }

    public function delete($id)
    {
        $pesanan_detail = PesananDetail::where('id', $id)->first();
        $pesanan = Pesanan::where('id', $pesanan_detail->pesanan_id)->first();
        $pesanan->jumlah_harga = $pesanan->jumlah_harga-$pesanan_detail->jumlah_harga;
        $pesanan->update();

        $pesanan_detail->delete();

        FacadesAlert::info('Info','Pesanan Berhasil Dihapus');
        return redirect('checkout');

    }

    public function konfirmasi()
    {

        $user = User::where('id', Auth::user()->id)->first();

        if(empty($user->alamat))
        {
            FacadesAlert::error('Error','Lengkapi Alamat Anda');
            return redirect('profil');
        }

        if(empty($user->noHp))
        {
            FacadesAlert::error('Error','Lengkapi No Hp Anda');
            return redirect('profil');
        }

        $pesanan = Pesanan::where('user_id', Auth::user()->id)->where('status', 0)->first();
        $pesanan->status = 1;
        $pesanan->update();


        FacadesAlert::success('Success', 'Berhasil Di Checkout');
        return redirect('pembayaran');
    }

    public function pembayaran(){

        $pesanan = Pesanan::where('user_id', Auth::user()->id)->where('status', 1)->first();
        if(empty($pesanan))
        {
            FacadesAlert::error('Error','Tidak Yang Bisa Di bayar');
            return redirect('dashboard');
        }
        return view('admin.pesan.pembayaran', compact('pesanan'));
    }

    public function upload(Request $request){

        dd($request->file('bukti'));

    }

    public function bayar(Request $request)
    {
        $request->validate([
            'image' => 'required|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
        ]);
        $namaFile = time().'.'.$request->image->extension();
        $request->image->move(public_path('bukti'), $namaFile);

        $pesanan = Pesanan::where('user_id', Auth::user()->id)->where('status', 1)->first();
        $pesanan->bukti = $namaFile;
        $pesanan->status = 2;
        $pesanan->update();


        // dd($namaFile);
        // $pesanan = Pesanan::where('user_id', Auth::user()->id)->where('status', 1)->first();
        // $pesanan->update();

        FacadesAlert::success('Success', 'Berhasil Di Bayar');
        return redirect('dashboard');
    }
}
