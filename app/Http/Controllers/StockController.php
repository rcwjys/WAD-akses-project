<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class StockController extends Controller
{
    public function create() {
        return view('customer.index');
    }

    public function store(Request $request) {
        $data = $request->all();

        Message::create([
            'medicineName' => $data[''],
            'medicineStock' => $data[''],
            'medicineInformation' => $data[''],
            'expiredDate' => $data[''],
            'medicinePeriod' => $data[''],
            'recipeId' => $data[''],
            'medicineUnitId' => $data[''],
            'therapyClassId' => $data[''],
            'subTherapyClassId' => $data['']
        ]);

        return redirect(route("customer.index"));
    }
}
