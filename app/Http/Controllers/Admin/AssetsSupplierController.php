<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class AssetsSupplierController extends Controller
{
    public function index()
    {
        $title = 'assets supplier';
        $type = [];
        return view('backend.assets-supplier',compact(
            'title','type'
        ));
    }
}
