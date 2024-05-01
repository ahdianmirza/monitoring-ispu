<?php

namespace App\Http\Controllers;

use App\Models\DataDashboard;
use Illuminate\Http\Request;

class ApiController extends Controller
{
    public function dataDashboard(Request $request) {
        $dataDashboard = DataDashboard::first()->update([
            'co' => $request->co,
            'no2' => $request->no2,
            'pm25' => $request->pm25,
        ]);

        if ($dataDashboard) {
            $respose = [
                "status" => http_response_code(200),
                "message" => "Request successfully!",
                "data" => $dataDashboard
            ];
        } else {
            $respose = [
                "status" => http_response_code(500),
                "message" => "Something wrong!",
                "data" => $dataDashboard
            ];
        }

        return response()->json($respose);
    }

    public function getDataDashboard() {
        return response()->json(DataDashboard::first());
    }
}