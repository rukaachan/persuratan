<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class JenisSuratController extends Controller
{
    function index()
    {
        return view('jenis.index');
    }
}
