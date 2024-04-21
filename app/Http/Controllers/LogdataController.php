<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;


class LogdataController extends Controller
{
    public function logdata()
    {
        $logdata = \App\Models\LogData::all();
        return view('layout.logdata', compact('logdata'));
    }

    // Menyimpan data ke database
    public function store(Request $request)
    {
    }
}