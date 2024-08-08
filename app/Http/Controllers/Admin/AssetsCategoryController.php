<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class AssetsCategoryController extends Controller
{
    public function index()
    {
        $title = 'overtime';
        $overtimes = []; // Overtime::get();
        return view('backend.assets-category',compact(
            'title','overtimes'
        ));
    }
}
