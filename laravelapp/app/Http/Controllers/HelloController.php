<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Http\Response;
use App\Http\Requests\HelloRequest;
use Validator;

class HelloController extends Controller
{
  
   public function index(Request $request)
   {
      return view('hello.index',['msg'=>'フォームに入力']);
   }

   public function post(Request $request){

      $rules = [
         'name' => 'required',
         'mail' => 'email',
         'age' => 'numeric|between:0,150'
      ];

      $messages = [
         'name.required' => '名前は必ず入力してください',
         'mail.email' => 'メールアドレスが必要です',
         'age.numeric' => '年齢を整数で記入してください',
         'age.between' => '年齢は0～150の間で入力してください'
      ];
      $validator = Validator::make($request->all(),$rules
         ,$messages);

      if ($validator->fails()){
         return redirect('/hello')
         ->withErrors($validator)
         ->withInput();
      }
         return view('hello.index',['msg' =>  '正しく入力されました!']);
   }
   public function test(){
      return view('test.test');
   }

   public function OverView(){
      return view('test.OverView');
   }

   public function Business(){
      return view('test.business');
   }

   public function Contact(){
      return view('test.Contact');
   }
   
   public function test_post(Request $request){
      $msg = $request->msg."さん";
      return view('test.test',['msg' => $msg]);
   }
}