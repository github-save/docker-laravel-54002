<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class CsvpageController extends Controller
{
    public function page1(){
        return view('csvpage');
    }
}
