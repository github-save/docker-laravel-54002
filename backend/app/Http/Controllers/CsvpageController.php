<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Validator;
// use Illuminate\Validation\Rule;

class CsvpageController extends Controller
{
    public function page1(){
        return view('csvpage');
    }

    public function importcsv(Request $request){
        // dd($request->all());
        // $request->file('csv_file')->store('test_csv');
        // $request->file('csv_file')->storeAs('test_csv','test_import.csv');

        // アップロードファイルに対してのバリデート
        $validator = $this->validateUploadFile($request);
        if ($validator->fails()){
            // $message = $validator->errors();
            return redirect('/csvpage')->with('message', $validator->errors()->first('csv_file'));
        }

        dd($request->file('csv_file'));
        return view('csvdata');
    }

    /**
     * アップロードファイルのバリデート
     *
     * @param Request $request
     * @return Illuminate\Validation\Validator
     */
    private function validateUploadFile(Request $request)
    {
        return \Validator::make($request->all(), [
                'csv_file' => 'required|file|mimetypes:text/plain|mimes:csv,txt',
            ], [
                'csv_file.required'  => 'ファイルを選択してください。',
                'csv_file.file'      => 'ファイルアップロードに失敗しました。',
                'csv_file.mimetypes' => 'ファイル形式が不正です。',
                'csv_file.mimes'     => 'ファイル拡張子が異なります。',
            ]
        );
    }

}
