<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PenggunaController extends Controller
{
    public function index()
    {
        return view ('index');
    }
    public function sejarah()
    {
        return view ('sejarah');
    }
    public function visimisi()
    {
        return view ('visimisi');
    }
    public function strukturorganisasi()
    {
        return view ('strukturorganisasi');
    }
    public function jadwal()
    {
        return view ('jadwallayanan');
    }
    public function igd()
    {
        return view ('igd');
    }
    public function rawatjalan()
    {
        return view ('rawatjalan');
    }
    public function rawatinap()
    {
        return view ('rawatinap');
    }
    public function fasilitasumum()
    {
        return view ('fasilitasumum');
    }
    public function chatbot()
    {
        return view ('chatbot');
    }
    public function kontak()
    {
        return view ('kontak');
    }
}
