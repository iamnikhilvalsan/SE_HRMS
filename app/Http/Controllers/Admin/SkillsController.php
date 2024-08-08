<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class SkillsController extends Controller
{
    public function index()
    {
        $title = 'skills';
        $overtimes = []; // Overtime::get();
        return view('backend.employee-skills',compact(
            'title','overtimes'
        ));
    }
}
