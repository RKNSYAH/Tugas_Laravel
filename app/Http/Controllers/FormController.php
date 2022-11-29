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
}
