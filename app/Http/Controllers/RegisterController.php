<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Employee;

class RegisterController extends Controller
{
    public function registerPage()
    {
        return view('admin.register');
    }

    public function registerProcess(Request $request)
    {
        $registerValidate = $request->validate([
            'employeeName' => ['required', 'min:3'],
            'employeeEmail' => ['required', 'unique:employees', 'email:dns'],
            'employeePhone' => ['required', 'min:12', 'unique:employees'],
            'employeeAddress' => ['required'],
            'isAdmin',
            'employeePassword' => ['required', 'min:5'],
            'passwordConfirmation' => ['required', 'same:employeePassword']
        ]);

        $registerValidate['isAdmin'] = 1;
        $registerValidate['employeePassword'] = bcrypt($registerValidate['employeePassword']);

        Employee::create($registerValidate);

        session()->flash('registerProcessMessage', 'Proses Registrasi Berhasil, Silahkan Login');

        return redirect(route('admin.loginPage'));
    }
}
