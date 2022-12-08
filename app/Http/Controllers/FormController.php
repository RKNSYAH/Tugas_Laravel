<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class FormController extends Controller
{
    public function data()
    {
        $data = DB::table('dataform')->get();
        return view('pages.data',['data' => $data]);
    }
    public function PostData(Request $request)
    {
    $selectid = DB::table('dataform')->where('id', $request->pid)->first();
    return view('pages.cvshow',['selectid' => $selectid]);
    
    }
    public function DeleteData(Request $request)
    {
        DB::table('dataform')->where('id', $request->pid)->delete();
        return redirect()->route('DataPage');
    }
    public function SubmitData(Request $request)
    {
        $namalengkap = $request->nama;
        $kelamin = $request->kelamin;
        $agama = $request->agama;
        $ttl = $request->TTL;
        $kawin = $request->kawin;
        $alamat = $request->alamat;
        $telp = $request->telp;
        $email = $request->email;

        $insert = array('namalengkap' => $namalengkap, 'jeniskelamin' => $kelamin, 'agama' => $agama, 'ttl' => $ttl, 'perkawinan' => $kawin, 'alamat' => $alamat, 'telp' => $telp, 'email' => $email);
        DB::table('dataform')->insert($insert);
        return redirect()->route('DataPage');
    }


}
