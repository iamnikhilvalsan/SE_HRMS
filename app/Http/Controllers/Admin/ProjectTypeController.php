<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class ProjectTypeController extends Controller
{
    public function index()
    {
        $title = 'project type';
        $type = [];
        return view('backend.projects.type',compact(
            'title','type'
        ));
    }
}
