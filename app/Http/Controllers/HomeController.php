<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('home');
    }

    public function guru()
    {
        return view('guru.index');
    }

    public function guruTambah()
    {
        return view('guru.add');
    }

    public function siswa()
    {
        return view('siswa.index');
    }

    public function mata_pelajaran()
    {
        return view('mata_pelajaran.index');
    }

    public function rapot()
    {
        return view('rapot.index');
    }
}
