<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;

class IndexController extends Controller
{
    public static function index()
    {
        return view('customer.index');
    }

    public function accessMedicinePage()
    {
        $medicines = DB::table('medicines')->get();
        return view('customer.persediaan-obat', ['medicines' => $medicines]);
    }

    public function detailStockCustomer(Request $request)
     {
        
        $medicine = DB::table('medicines')->where('medicineId', $request->medicineId)->first();
        $medicineunits = DB::table('medicineunits')->where('medicineUnitId', $medicine->medicineUnitId)->first();
        $therapyclass = DB::table('therapyclasses')->where('therapyClassId', $medicine->therapyClassId)->first();
        $subtherapyclass = DB::table('subtherapyclasses')->where('subTherapyClassId', $medicine->subTherapyClassId)->first();
        $medicinerecipe = DB::table('medicinerecipes')->where('recipeId', $medicine->recipeId)->first();

        return view('customer.detail-obat')->with(compact('medicine', 'medicineunits','therapyclass','subtherapyclass','medicinerecipe'));

    }
}
