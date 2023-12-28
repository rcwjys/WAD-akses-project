<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\ClassMedicine;
use Illuminate\Support\Facades\DB;

class  MedicineController extends Controller
{
    protected $MedicineClasses;

    public function __construct()
    {
        return $this->MedicineClasses = DB::table('therapyclasses')->select()->get();
    }

    public function classPage()
    {
        $MedicineClasses = ClassMedicine::all();
        return view('admin.medicine-class')->with(compact('MedicineClasses'));
    }

    public function getFormForClass()
    {
        $medicineClasses = DB::table('therapyclasses')->select()->get();
        return view('admin.add-class')->with(compact('medicineClasses'));
    }

    public function submitFormForClass(Request $request)
    {
        $validateForClass = $request->validate([
            'therapyClassName' => ['required', 'min:3', 'unique:therapyclasses'],
            'therapyClassID' => ['required']
        ]);

        ClassMedicine::create($validateForClass);

        session()->flash('ClassMessageSuccess', 'Proses Pembuatan  Class Obat Berhasil');

        return redirect(route('admin.medicine-class'));
    }

    public function getDetailClass($therapyClassId)
    {
        // $classData = DB::table('therapyclasses')->join('therapyclasses', 'therapyclasses.therapyClassId', '=', 'therapyclasses.therapyClassId')->select()->first();

        $MedicineClass = ClassMedicine::find($therapyClassId);
        return view('admin.detail-class')->with(compact('MedicineClass'));
    }

    public function deleteClass(Request $request)
    {
        DB::table('therapyclasses')->where('TherapyClassId', $request->TherapyClassId)->delete();

        session()->flash('deleteClassMessage', 'Proses Penghapusan Data Berhasil');

        return redirect(route('admin.medicine-class'));
    }

    public function getEditformClass(Request $request)
    {
        $MedicineClass = DB::table('therapyclasses')->where('TherapyClassId', $request->TherapyClassId)->first();

        $medicineClasses = DB::table('therapyclasses')->select()->get();


        return view('admin.edit-form-class')->with(compact('MedicineClass', 'medicineClasses'));
    }

    public function submitEditFormClass(Request $request)
    {
        $data = ClassMedicine::find($request->therapyClassId);
        $data->therapyClassName = $request->therapyClassName;
        $data->save();

        session()->flash('EditClassMessage', 'Proses Perubahan Data Berhasil');
        return redirect(route('admin.medicine-class'));
    }
}

