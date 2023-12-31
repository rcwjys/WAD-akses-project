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

    public function index()
    {

        $medicines = DB::table('medicines')->get();

        return view('admin.medicine-stock', ['medicines' => $medicines]);
    }

    public function stockCreate() {
        return view('admin.medicines-create');
    }

    public function getFormForStock()
    {
        $medicine = DB::table('medicines')->select()->get();
        return view('admin.medicines-create')->with('medicines', $medicines);
    }

    public function submitFormForStock(Request $request)
    {
        $validateForStock = $request->validate([
            'medicineName' => ['required', 'min:3', 'unique:medicines'],
            'medicineStock' => ['required'],
            'medicineInformation' => ['required', 'min:3'],
            'expiredDate' => ['required'],
            'medicinePeriod' => ['required'],
            'recipeId' => ['required'],
            'medicineUnitId' => ['required'],
            'therapyClassId' => ['required'],
            'subTherapyClassId' => ['required']
        ]);

        Medicine::create($validateForStock);

        session()->flash('StockMessageSuccess', 'Menambahkan Stok Obat Berhasil');

        return redirect(route('admin.medicines-stock'));
    }
    
    public function addMedicine() {
        Medicine::create([
            $data = 'medicineName' => ['medicineName'],
            $data = 'medicineStock' => ['medicineStock'],
            $data = 'medicineInformation' => ['medicineInformation'],
            $data = 'expiredDate' => ['expiredDate'],
            $data = 'medicinePeriod' => ['medicinePeriod'],
            $data = 'recipeId' => ['recipeId'],
            $data = 'medicineUnitId' => ['medicineUnitId'],
            $data = 'therapyClassId' => ['therapyClassId'],
            $data = 'subTherapyClassId' => ['subTherapyClassId']
        ]);

        return redirect(route('admin.medicine-stock'));

    }

    public function showFormTherapyClass(){
        $therapyclasses = TherapyClass::all();
        return view('admin.medicine-create', ['therapyclasses' => $therapyclasses]);
    }

    public function editStock(Request $request)
    {
        $stock = DB::table('medicines')->where('medicineId', $request->medicineId)->first();
        $stock = DB::table('medicines')->select()->get();
        return view('admin.editStock')->with(compact('stock','stocks'));
    }

    public function showFormRecipe() {
        $recipes = MedicineRecipe::all();
        return view('admin.medicines-create', ['recipe' => $recipes]);
    }

    public function submitEditStock(Request $request)
    {
        $data = Stock::find($request->medicineId);
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
        return redirect(route('admin.stock'));
    }
}
