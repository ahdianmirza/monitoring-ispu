<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Logdata;

class DashboardController extends Controller
{
    public function index()
    {
        $logdata = Logdata::orderBy('created_at', 'asc')->get();
        return view('layout.dashboard', [
            'title' => 'Dashboard'
        ], compact('logdata'));
    }
}