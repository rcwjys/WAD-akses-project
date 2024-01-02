<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Medicine;
use App\Models\MedicineRecipe;
use App\Models\MedicineUnit;
use App\Models\TherapyClass;
use App\Models\SubTherapyClass;
use App\Models\Recipes;
use Illuminate\Support\Facades\DB;

class StockController extends Controller
{
    protected $Medicine;
    
    //      ADMIN
    public function index()
    {

        $medicines = DB::table('medicines')->get();

        return view('admin.medicine-stock', ['medicines' => $medicines]);
    }

    public function stockCreate() {
        return view('admin.medicines-create');
    }


    public function submitFormForStock(Request $request)
    {
        $validateForStock = $request->validate([
            'medicineName' => ['required', 'min:3', 'unique:medicines'],
            'medicineStock' => ['required'],
            'medicineInformation' => ['required', 'min:3'],
            'expiredDate' => ['required'],
            'medicinePeriod' => ['required'],
            'recipe' => ['required'],
            'recipe' => ['required'],
            'therapyClassName' => ['required'],
            'subTherapyClassName' => ['required']
        ]);

        Medicine::create($validateForStock);
        $recipe = DB::table('recipe')->where('recipeId', $request->recipeId)->first();
        $medicineunits = DB::table('recipe')->where('medicineUnitId', $request->medicineUnitId)->first();
        $therapyclass = DB::table('therapyClassName')->where('therapyClassId', $request->therapyClassId)->first();
        $subtherapyclass = DB::table('subTherapyClassName')->where('subTherapyClassId', $request->subTherapyClassId)->first();

        return view('admin.medicines-detail')->with(compact('medicine', 'medicineunits'));

        session()->flash('StockMessageSuccess', 'Menambahkan Stok Obat Berhasil');

        return redirect(route('admin.medicines-stock'));
    }
    
    public function addMedicine(Request $request) {

        $medicine = $request->validate([
            'medicineName' => ['required'], 
            'medicineStock' => ['required'], 
            'medicineInformation' => ['required'], 
            'expiredDate' => ['required'], 
            'medicinePeriod' => ['required'], 
            'recipeId' => ['required'], 
            // 'medicineRecipe' => ['required'],
            'medicineUnitId' => ['required'], 
            'therapyClassId' => ['required'], 
            'subTherapyClassId' => ['required']
        ]);

        Medicine::create($medicine);

        return redirect(route('admin.medicine-stock'));

    }

    public function editStock(Request $request)
    {
        $stock = DB::table('medicines')->where('medicineId', $request->medicineId)->first();
        $medicineunits = DB::table('medicineunits')->where('medicineUnitId', $stock->medicineUnitId)->first();
        $therapyclass = DB::table('therapyclasses')->where('therapyClassId', $stock->therapyClassId)->first();
        $subtherapyclass = DB::table('subtherapyclasses')->where('subTherapyClassId', $stock->subTherapyClassId)->first();
        $medicinerecipe = DB::table('medicinerecipes')->where('recipeId', $stock->recipeId)->first();
        $medicineRecipes = DB::table('medicinerecipes')->select()->get();
        $therapyclasses = DB::table('therapyclasses')->select()->get();
        $subtherapyclasses = DB::table('subtherapyclasses')->select()->get();
        $medicineUnits = DB::table('medicineunits')->select()->get();
        return view('admin.medicines-edit')->with(compact('stock','medicineRecipes','therapyclasses','subtherapyclasses','medicineUnits','medicineunits','therapyclass','subtherapyclass','medicinerecipe'));
    }

    public function submitEditStock(Request $request, string $medicineId)
    {
        $data = Medicine::find($medicineId);
        $data-> medicineName = $request->medicineName;
        $data-> medicineStock = $request->medicineStock;
        $data-> medicineInformation = $request->medicineInformation;
        $data-> expiredDate = $request->expiredDate; 
        $data-> medicinePeriod = $request -> medicinePeriod; 
        $data-> recipeId = $request -> recipeId;
        $data-> medicineUnitId = $request-> medicineUnitId;
        $data-> therapyClassId =  $request -> therapyClassId;
        $data-> subTherapyClassId =  $request -> subTherapyClassId;
        $data-> save();

        session()->flash('EditClassMessage', 'Proses Perubahan Data Berhasil');
        return redirect(route('admin.medicine-stock'));
    }

    public function detailStock(Request $request)
     {
        
        $medicine = DB::table('medicines')->where('medicineId', $request->medicineId)->first();
        // $recipe = DB::table('recipe')->where('recipeId', $medicine->recipeId)->first();
        $medicineunits = DB::table('medicineunits')->where('medicineUnitId', $medicine->medicineUnitId)->first();
        $therapyclass = DB::table('therapyclasses')->where('therapyClassId', $medicine->therapyClassId)->first();
        $subtherapyclass = DB::table('subtherapyclasses')->where('subTherapyClassId', $medicine->subTherapyClassId)->first();
        $medicinerecipe = DB::table('medicinerecipes')->where('recipeId', $medicine->recipeId)->first();

        return view('admin.medicines-detail')->with(compact('medicine', 'medicineunits','therapyclass','subtherapyclass','medicinerecipe'));

    }

    public function deleteStock(Request $request)
    {
        //DB::table('medicines')->where('medicineId', $request->medicineId)->delete();

        $medicine = Medicine::find($request->medicineId);
        $medicine ->delete();

        session()->flash('deleteStock', 'Proses Penghapusan Obat Berhasil');

        return redirect(route('admin.medicine-stock'));
    }
}
