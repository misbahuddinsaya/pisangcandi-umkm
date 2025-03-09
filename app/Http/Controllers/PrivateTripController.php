<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PrivateTripController extends Controller
{
    //
    public function index()
    {
        return view('privatetrippackage.index');
    }

    public function detailPrivate()
    {
        return view('privatetrippackage.detail');
    }
}
