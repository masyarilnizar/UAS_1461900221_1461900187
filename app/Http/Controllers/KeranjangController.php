<?php

namespace App\Http\Controllers;

use App\Models\keranjang;
use Illuminate\Http\Request;
use Illuminate\support\Facades\DB;
use Illuminate\support\Facades\Auth;


class KeranjangController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $user = Auth::user()->id;
		$keranjang = DB::table('keranjang')->where('id_user',$user)->where('status','Belum Bayar')
                // ->select(DB::raw('baju.id as id_baju,keranjang.id as id_keranjang,baju.kode_baju,baju.nama_baju,keranjang.harga,keranjang.jumlah'))
				->join('baju','keranjang.kode_baju','=','baju.kode_baju')   
						
				// ->where('buku_judul','LIKE',"%Slider%")
				->get();
                $isi = DB::table('keranjang')->where('id_user',$user)->count('id');
                // dd($keranjang);;
		return view('keranjang', ['keranjang' => $keranjang],['isi' => $isi]);
	}

    public function ubah(Request $request)
    {
        // dd($request->all());
        $user = Auth::user()->id;
        $duit = DB::table('baju')->select('harga')->where('kode_baju',$request->kode_baju)
        ->first();
        $uang = $request->jumlah*$duit->harga;
		DB::table('keranjang')->where('kode_baju',$request->kode_baju)
        ->where('id_user',$user)
        ->update([
            "jumlah"=>$request->jumlah,
            "hargatotal"=>$uang,
        ]);
        
		return redirect('/keranjang');
	}

    public function batal($id)
    {
        // dd($request->all());
        $user = Auth::user()->id;
		DB::table('keranjang')->where('kode_baju',$id)
        ->where('id_user',$user)->delete();
        
        
		return redirect('/keranjang');
	}
    

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\keranjang  $keranjang
     * @return \Illuminate\Http\Response
     */
    public function show(keranjang $keranjang)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\keranjang  $keranjang
     * @return \Illuminate\Http\Response
     */
    public function edit(keranjang $keranjang)
    {
        
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\keranjang  $keranjang
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, keranjang $keranjang)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\keranjang  $keranjang
     * @return \Illuminate\Http\Response
     */
    public function destroy(keranjang $keranjang)
    {
        //
    }
}
