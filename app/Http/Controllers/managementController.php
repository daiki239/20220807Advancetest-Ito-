<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class managementController extends Controller
{
    public function management(Request $request)
    {
        $request->validate([
            'name'     => 'required|max:10',
            'email'    => 'required|email',
            'tel'      => 'nullable|numeric',
            'gender'   => 'required',
            'contents' => 'required',
             'postcode' => 'required',
        ]);

        // フォームから受け取ったすべてのinputの値を取得
        $inputs = $request->all();
        
        
        return view('management', ['inputs' => $inputs]);
       
       
        
    }
}
