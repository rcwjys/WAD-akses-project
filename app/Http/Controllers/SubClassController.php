<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\SubClassMedicine;
use Illuminate\Support\Facades\DB;

class SubClassController extends Controller
{
    protected $subMedicineClasses;

    public function __construct()
    {
        return $this->subMedicineClasses = DB::table('subtherapyclasses')->select()->get();
    }

    public function subclassPage()
    {
        return view('admin.sub-class-medicine')->with('subMedicineClasses', $this->subMedicineClasses);
    }

    public function getFormForSubClass()
    {
        $medicineClasses = DB::table('therapyclasses')->select()->get();
        return view('admin.add-sub-class')->with('medicineClasses', $medicineClasses);
    }

    public function submitFormForSubClass(Request $request)
    {
        $validateForSubClass = $request->validate([
            'subTherapyClassName' => ['required', 'min:3', 'unique:subtherapyclasses'],
            'therapyClassId' => ['required']
        ]);

        SubClassMedicine::create($validateForSubClass);

        session()->flash('subClassMessageSuccess', 'Proses Pembuatan Sub Class Obat Berhasil');

        return redirect(route('admin.create-form'));
    }

    public function getDetailSubClass(Request $request)
    {
        $classData = DB::table('therapyclasses')->join('subtherapyclasses', 'therapyclasses.therapyClassId', '=', 'subtherapyclasses.therapyClassId')->select()->first();

        $subMedicineClass = DB::table('subtherapyclasses')->where('subTherapyClassId', $request->subTherapyClassId)->first();

        return view('admin.detail-sub-class')->with(compact('classData', 'subMedicineClass'));
    }

    public function deleteSubClass(Request $request)
    {
        DB::table('subtherapyclasses')->where('subTherapyClassId', $request->subTherapyClassId)->delete();

        session()->flash('deleteSubClassMessage', 'Proses Penghapusan Data Berhasil');

        return redirect(route('admin.medicine-sub-class'));
    }

    public function getEditorm(Request $request)
    {
        $subMedicineClass = DB::table('subtherapyclasses')->where('subTherapyClassId', $request->subTherapyClassId)->first();

        $medicineClasses = DB::table('therapyclasses')->select()->get();


        return view('admin.edit-form-sub-class')->with(compact('subMedicineClass', 'medicineClasses'));
    }

    public function submitEdiFormSubClass(Request $request)
    {
        $data = SubClassMedicine::find($request->subTherapyClassId);
        $data->subTherapyClassName = $request->subTherapyClassName;
        $data->therapyClassId = $request->therapyClassId;
        $data->save();

        session()->flash('EditSubClassMessage', 'Proses Perubahan Data Berhasil');
        return redirect(route('admin.medicine-sub-class'));
    }
}
