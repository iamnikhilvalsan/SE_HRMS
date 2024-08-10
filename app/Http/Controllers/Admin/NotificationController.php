<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class NotificationController extends Controller
{
    public function index()
    {
        $title = 'notifications';
        $notifications = []; // Overtime::get();
        return view('backend.notifications',compact(
            'title','notifications'
        ));
    }
}
