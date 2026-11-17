<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;

class DasboardController extends Controller
{
    //panggil dashboard
    public function index(){
        return view('admin.dasboard');
    }
}
