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
        // $request->file('csv_file')->store('test_csv');
        // $request->file('csv_file')->storeAs('test_csv','test_import.csv');
        dd($request->file('csv_file'));
        return view('csvdata');
    }

}
