<?php

namespace App\Http\Controllers;

use App\Models\Barang;
use App\Models\Pesanan;
use Illuminate\Http\Request;
use UxWeb\SweetAlert\SweetAlert;
use Alert;
use UxWeb\SweetAlert\SweetAlertNotifier;
use UxWeb\SweetAlert\ConvertMessagesIntoSweetAlert;
use UxWeb\SweetAlert\SweetAlertServiceProvider;
use App\Models\PesananDetail;
use App\Models\User;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Carbon;
use Illuminate\Support\Facades\DB;
use RealRashid\SweetAlert\Facades\Alert as FacadesAlert;
use PDF;

class DynamicPDFController extends Controller
{
    // public function cetak_pdf()
    // {
    //     $pesanans = Pesanan::where('status', '2')->get();
    //     set_time_limit(6000);
    //     $pdf = PDF::loadview('admin.pages.laporan',compact('pesanans'));
    //     return $pdf->download('laporan-pegawai-pdf');
    //     // return view('admin.pages.laporan', compact('pesanans'));
    // }

    public function index(){
        $customer_data = $this->get_customer_data();
        return view('dynamic_pdf')->with('customer_data', $customer_data);
    }
    public function get_customer_data(){
        $customer_data = Pesanan::where('status', '2')
        ->limit(10)
        ->get();
        return$customer_data;
    }
    public function pdf(){
        $pdf = \App::make('dompdf.wrapper');
        $pdf->loadHTML($this->convert_customer_data_to_html());
        return $pdf->stream();
    }
    public function convert_customer_data_to_html(){
        $customer_data = $this->get_customer_data();
        // $output =
        // '<h3 align=”center”>Daftar Pegawai</h3>
        // <table width=”100%” style=”border-collapse: collapse; border: 0px;”>
        // <tr>
        // <th style=”border: 1px solid; padding:12px;” width=”15%”>Nama</th>
        // <th style=”border: 1px solid; padding:12px;” width=”15%”>Alamat</th>
        // <th style=”border: 1px solid; padding:12px;” width=”15%”>Telepon</th>
        // </tr>';
        // foreach($customer_data as $customer){
        // $output.='<tr>
        // <td style=”border: 1px solid; padding:12px;”>'.$customer->tanggal.'</td>
        // <td style=”border: 1px solid; padding:12px;”>'.$customer->status.'</td>
        // <td style=”border: 1px solid; padding:12px;”>'.$customer->bukti  .'</td>
        // </tr>';}
        // $output.='</table>';
        // return $output;


        $output =
        '<!DOCTYPE html>
        <html><head>
          <title>Laporan</title>
          <!-- <link rel="stylesheet" type="text/css" href="">
          <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-eOJMYsd53ii+scO/bJGFsiCZc+5NDVN2yr8+0RDqr0Ql0h+rP48ckxlpbzKgwra6" crossorigin="anonymous"> -->
          <!-- <style>
            .line-title{
              border: 20;
              border-style: inset;
              border-top: 1px solid #000;
            }
          </style> -->
        </head><body>
          <img src="uploads/logo_toko.jpg" style="position: absolute; width: 120px; height:auto">
            <table style="width: 100%">
              <tr>
                <td align="center">
                  <span style="line-height: 1.6; font-weight: bold;">
                    CV OKE CELL
                    <br>MADIUN JAWA TIMUR
                  </span>
                </td>
              </tr>
            </table>

            <hr class="line-tittle">
            <p align="center">
              LAPORAN PENJUALAN
              <br align="center">
                Bulan .... Tahun ....
              </br>
            </p>

            <table class="table table-bordered" style="width: 100%">
              <tr>
                <th colspan="2">NO</th>
                <th colspan="2">NAMA</th>
                <th colspan="2">ALAMAT</th>
                <th colspan="2">HARGA</th>
                <th colspan="2">TANGGAL</th>
              </tr>';

        foreach ($customer_data as $pesanan){
        $output.='
                <tr>
                    <td colspan="2" align="center" >'.$pesanan->id.'</td>
                    <td colspan="2" align="center" >'.$pesanan->users->username.'</td>
                    <td colspan="2" align="center" >'.$pesanan->users->alamat.'</td>
                    <td colspan="2" align="center" >Rp.'. number_format($pesanan->jumlah_harga).'</td>
                    <td colspan="2" align="center" >'.$pesanan->tanggal.'</td>
                </tr>
        ';}
        $output.='</table>
        </body></html>';
      return $output;
    }
}

