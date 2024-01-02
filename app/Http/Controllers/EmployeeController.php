<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Employee;
use Illuminate\Support\Facades\DB;

class EmployeeController extends Controller
{
    public function employee() 
    {
        $dataEmployee = Employee::all()
        ->where('isAdmin', 0);

        return view('admin.employee')->with('employeeData', $dataEmployee);;
    }

    public function Addemployee() 
    {
        return view('admin.add-employee');
    }

    public function SubmitAddemployee(Request $request) 
    {
        $request->validate([
            'employeeName' => 'required',
            'employeeEmail' => 'required | unique:employees',
            'employeePhone' => 'required | min:12 | unique:employees',
            'employeeAddress' => 'required',
            'isAdmin',
            'employeePassword' => 'required|min:5',
            'employeeConfirmPassword' => 'required | same:employeePassword',
        ]);

        Employee::create([
            'employeeName' => $request->employeeName,
            'employeeEmail' => $request->employeeEmail,
            'employeePhone' => $request->employeePhone,
            'employeeAddress' => $request->employeeAddress,
            'isAdmin' => 0,
            'employeePassword' => bcrypt($request->employeePassword),
        ]);

        session()->flash('MessageAddEmployee', 'Proses Penambahan Data Berhasil');
        return redirect('employee');
    }

    public function Editemployee($employeeId) 
    {
        $employeeEdit = DB::table('employees')
        ->where('employeeId',$employeeId)
        ->first();

        return view('admin.detail-employee')->with(compact('employeeEdit'));
    }

    public function SubmitEditemployee(Request $request, $employeeId) 
    {
        
        $updateEmployee = DB::table('employees')
        ->where('employeeId',$employeeId);

        $request->validate([
            'employeeName' => 'required',
            'employeeEmail' => 'required | unique:employees',
            'employeePhone' => 'required | min:12 | unique:employees',
            'employeeAddress' => 'required',
        ]);

        $updateEmployee->update([
            'employeeName' => $request -> employeeName,
            'employeeEmail' => $request -> employeeEmail,
            'employeePhone' => $request -> employeePhone,
            'employeeAddress' => $request -> employeeAddress,
        ]);

        session()->flash('MessageEditEmployee', 'Proses Perubahan Data Berhasil');
        return redirect('employee');
    }

    public function deleteEmployee(Request $request, $employeeId)
    {
        $employeeEdit = DB::table('employees')
        ->where('employeeId',$employeeId);

        $employeeEdit->delete();
        session()->flash('MessageDeleteEmployee', 'Proses Penghapusan Data Berhasil');
        return redirect('employee');
    }
}
