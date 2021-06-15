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
use Illuminate\Support\Facades\DB;
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

    public function add()
    {
        return view('admin.pages.add');
    }

    public function tambah(Request $request){

        $request->validate([
            'image' => 'required|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
        ]);
        $namaFile = time().'.'.$request->image->extension();
        $request->image->move(public_path('uploads'), $namaFile);

        Barang::insert([
            'nama_barang' => $request->nama_barang,
            'gambar' => $namaFile,
            'harga' => $request->harga,
            'stok' => $request->stok,
            'keterangan' => $request->keterangan,
        ]);


    //  //    SweetAlert::success('Success Message', 'Optional Title');
        FacadesAlert::success('Success', 'Data berhasil ditambahkan');
        return redirect('dashboard');
     }

     public function dibayar(){
        $pesanans = Pesanan::where('status', '2')->get();
        // dd($barangs);
        return view('admin.pages.dibayar', compact('pesanans'));
    }


    public function info($id){
        $details = PesananDetail::where('pesanan_id', $id)->get();
        // dd($barangs);
        return view('admin.pages.info', compact('details'));
    }
<<<<<<< HEAD

    public function user()
    {
        $users = User::paginate(100);
        return view('admin.pages.user', compact('users'));
    }

    public function deleteUser($id)
    {
        $user = User::where('id', $id)->first();
        // dd($barang);
        $user->delete();

        FacadesAlert::info('Info','User Berhasil Dihapus');
        return redirect('user');

    }



=======
>>>>>>> 422b5ceb149c48a8b1d60e047721b5cd6bcfbefc
}
