<?php

namespace App\Http\Controllers;

use App\Models\Barang;
use App\Models\Material;
use App\Models\Product;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class DashboardController extends Controller
{
    public function index()
    {
        $barangs = Barang::paginate(20);
        // dd($barangs);
        return view('admin.pages.dashboard',  compact('barangs'));
    }

    public function admin()
    {
        $barangs = Barang::paginate(100);
        return view('admin.pages.admin', compact('barangs'));
    }
}
