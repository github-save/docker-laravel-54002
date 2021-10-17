<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class CsvpageController extends Controller
{
    public function page1(){
        return view('csvpage');
    }

    public function importcsv(Request $request){
        // dd($request->all());
        dd($request->file('csv_file'));
        return view('csvdata');
    }

}
