<?php

namespace App\Http\Controllers;

use App\Models\Logdata;
use Illuminate\Http\Request;


class LogdataController extends Controller
{
    public function logdata()
    {
        $logdata = Logdata::orderBy('created_at', 'asc')->get();
        return view('layout.logdata', compact('logdata'));
    }

    // Menyimpan data ke database
    public function store(Request $request)
    {
    }
}