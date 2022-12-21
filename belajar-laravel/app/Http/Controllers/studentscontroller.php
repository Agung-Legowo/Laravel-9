<?php

namespace App\Http\Controllers;

class studentscontroller extends Controller
{
    public function index()
    {
        //$nama = "agung";
        // qlequent orm (rekomendasi)
        //query builder (masih oke)
        // raw query (tidak rekomendasi rawan sql injection)

        //$student = student::all(); // select * from
        //return view('student', ['studentslist' => $student]);

        //Query Builder
    }

}
