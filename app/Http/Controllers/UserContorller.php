<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class UserContorller extends Controller
{
    // public function index()
    // {
    // Render: 
    //     return "getting from user controller";
    // }

    public function index()
    {
        // Render blade:
        return view('greeting');
    }

    public function show($id)
    {
        return "showing user from controller and user id: " . $id;
    }
}
