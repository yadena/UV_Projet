<?php

namespace App\Http\Controllers;
use App\Models\Uds;

use Illuminate\Http\Request;

class UdsController extends Controller
{
    //
    public function index()
    {
        $uds = Uds::all();
        return view('uds.index', compact('uds'));
    }

}
