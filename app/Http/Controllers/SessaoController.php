<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class SessaoController extends Controller
{
    public function index()
    {
        return view('session.login');
    }

    public function logado(Request $r)
    {
        dd($r->session());
    }
}
