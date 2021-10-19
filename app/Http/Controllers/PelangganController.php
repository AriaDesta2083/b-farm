<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PelangganController extends Controller
{

    private $params;

    public function index()
    {
        return view('pelanggan.index');
    }
}
