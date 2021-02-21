<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ExampleController extends Controller
{
    public function index()
    {
        return view('example/index');
    }

    public function agenda()
    {
        return view('agenda/index');
    }

    public function pemasukan()
    {
        return view('pemasukan/index');
    }

    public function pemasukan()
    {
        return view('pemasukan/index');
    }

    public function pengeluaran()
    {
        return view('pengeluaran/index');
    }

    public function schedule()
    {
        return view('example/schedule');
    }
}
