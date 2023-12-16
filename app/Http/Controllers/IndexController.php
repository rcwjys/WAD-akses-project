<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class IndexController extends Controller
{
    public static function index()
    {
        return view('customer.index');
    }

    public function accessMedicinePage()
    {
        return view('customer.persediaan-obat');
    }
}
