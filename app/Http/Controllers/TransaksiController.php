<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class TransaksiController extends Controller
{
    public function gettransaksi()
    {

            $transaksi = DB::table('transaksis')->get();

          
            
            return response()->json([
                'status' => 200,
                'data' => $transaksi 
            ]);
    }

    public function addtransaksi()
    {   
        $transaksi = DB::table('transaksis')->get();

        return view('addtransaksi',['transaksi'=>$transaksi]);
    }

    public function posttransaksi(Request $request) 
    {
        
        DB::table('transaksis')->insert([
            'absen_siswa' => $request->absen,
            'jumlah_transaksi' => $request->jumlah,
            'minggu' => $request->minggu,
            'bulan' => $request->bulan,
            'keterangan' => $request->keterangan,
            'catatan' => $request->catatan
        ]);
        
        return redirect('/transaksi/gettransaksi');

    }

    public function gettotal()
    {
        $transaksiin = DB::table('transaksis')->where('keterangan','masuk')->sum('jumlah_transaksi');
        $transaksiout = DB::table('transaksis')->where('keterangan','keluar')->sum('jumlah_transaksi');

        $totalkas = 
        [   'total_kas' => $transaksiin - $transaksiout,
            'pemasukan' => $transaksiin - 0,
            'pengeluaran' => $transaksiout - 0,
        ];
        
           return response()->json([
                'status' => 200,
                'data' => $totalkas 
            ]);
    }

    public function random($val)
    {
        $numbers = range(1, $val);
        shuffle($numbers);
        foreach ($numbers as $number) {
        echo "$number ";
}
    }
}
