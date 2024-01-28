<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;

class AdminController extends Controller
{
    public function home()
    {
        return view('admin.index');
    }
}
