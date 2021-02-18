<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use RealRashid\SweetAlert\Facades\Alert as FacadesAlert;

class ProfilController extends Controller
{
    public function index(){
        // $barangs = Barang::where('id', $id)->first();
        // dd($barangs);
        $user = User::where('id', Auth::user()->id)->first();
        return view('admin.profil.index',  compact('user'));
    }

    public function update(Request $request){

        // dd($request);
        $this->validate($request, [
            'password'  => 'confirmed',
        ]);

        $user = User::where('id', Auth::user()->id)->first();
        $user->username = $request->username;
        $user->email = $request->email;
        $user->noHp = $request->noHp;
        $user->alamat = $request->alamat;
        if(!empty($request->password))
    	{
    		$user->password = Hash::make($request->password);
    	}

    	$user->update();

        FacadesAlert::success('Success', 'Data diri berhasil dirubah');
    	return redirect('profil');
    }
}
