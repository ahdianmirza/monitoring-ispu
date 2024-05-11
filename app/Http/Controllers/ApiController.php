<?php

namespace App\Http\Controllers;

use App\Models\DataDashboard;
use App\Models\Logdata;
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

    public function postLogData(Request $request) {
        $dataUdara = $request->all();
        $createData = Logdata::create([
            'co' => $dataUdara['co'],
            'no2' => $dataUdara['no2'],
            'created_at' => new \DateTime("now", new \DateTimeZone("GMT+7"))

        ]);
        return response()->json($createData);
    }
}