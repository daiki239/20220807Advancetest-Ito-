<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Mail;
use App\Contact;
use App\Mail\ContactMail;

class ContactsController extends Controller
{
    public function index()
    {
        return view('index');
    }

    public function confirm(Request $request)
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
        
        
        return view('confirm', ['inputs' => $inputs]);
       
       
        
    }

    public function complete(Request $request)
    { // 確認画面で戻るボタンが押された場合
        if ($request->get('action') === 'return') {
            // 入力画面へ戻る
            return redirect('/')
                ;
        }
                
        
       

        // フォームから受け取ったすべてのinputの値を取得
        $inputs = $request->all();

        return view('complete', ['inputs' => $inputs]);
    }
    
}