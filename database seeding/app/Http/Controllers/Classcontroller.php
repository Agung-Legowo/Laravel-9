<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\ClassRoom;

class Classcontroller extends Controller
{
    public function index()
    {
        
        $Class = ClassRoom::all();
        return view('classroom', ['Classlist' => $Class]);
    }
}
