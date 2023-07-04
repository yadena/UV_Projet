<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class UdsController extends Controller
{
    //
    public function index()
    {
        $ud = Uds::all();
        return view('layouts.uds.index', compact('ud'));
    }

}
