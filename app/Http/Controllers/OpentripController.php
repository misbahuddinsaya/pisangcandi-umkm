<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class OpentripController extends Controller
{
    //
    public function index()
    {
        return view('opentrip.index');
    }

    public function detailOpentrip()
    {
        return view('opentrip.detail');
    }
}
