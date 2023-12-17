<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\DB;

class LoginController extends Controller
{
    public function loginPage()
    {
        return view('admin.login');
    }

    public function loginProcess(Request $request)
    {
        $employeeEmailInput = $request->input('employeeEmail');

        $employee = DB::table('employees')->select('employeeName', 'employeeEmail', 'employeePassword')->where('employeeEmail', $employeeEmailInput)->get();

        $employeePaswordInput = $request->input('employeePassword');

        if (!count($employee) == 1) {
            return back()->with('loginProcess', 'Proses Login Gagal');
        }

        if (!Hash::check($employeePaswordInput, $employee[0]->employeePassword)) {
            $request->session()->put('isAuthorize', false);
            return back()->with('loginProcess', 'Proses Login Gagal');
        }

        $request->session()->put('isAuthorize', true);
        $request->session()->put("employee", $employee[0]->employeeName);

        return redirect(route('admin.dashboard'))->with('loginSuccess', 'Proses Login berhasil');
    }

    public function logout(Request $request)
    {
        $request->session()->forget('employee');
        return redirect(route('customer.index'));
    }
}
