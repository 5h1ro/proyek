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

class AdminController extends Controller
{
    public function index($id){
        $barangs = Barang::where('id', $id)->first();
        // dd($barangs);
        return view('admin.pages.edit',  compact('barangs'));
    }

    public function edit(Request $request){

        $barang = Barang::where('id', $request->id)->first();
        $barang->nama_barang = $request->nama_barang;
        $barang->harga = $request->harga;
        $barang->stok = $request->stok;
    	$barang->update();

        FacadesAlert::success('Success', 'Data diri berhasil dirubah');
    	return redirect('admin');
    }

    public function delete($id)
    {
        $barang = Barang::where('id', $id)->first();
        // dd($barang);
        $barang->delete();

        FacadesAlert::info('Info','Produk Berhasil Dihapus');
        return redirect('admin');

    }
}
