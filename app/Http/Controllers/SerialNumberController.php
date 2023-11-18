<?php

namespace App\Http\Controllers;

use App\Models\SerialNumber;
use Illuminate\Http\Request;

class SerialNumberController extends Controller
{
    public function show(Request $request)
    {
        $number = $request->serial_number;
        $serialNumber = SerialNumber::where('serial_number', $number)->first();

        if ($serialNumber == null)
            return view('Pages.Public.qualityCheckInvalid');
        else
            return view('Pages.Public.qualityCheckValid', ['serialNumber' => $serialNumber]);
    }
}
