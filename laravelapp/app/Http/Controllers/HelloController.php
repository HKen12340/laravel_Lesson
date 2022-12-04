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
      if($request->hasCookie('msg')){
         $msg = 'Cookie:'.$request->cookie('msg');
      }else{
         $msg = '※クッキーはありません';
      }
      return view('hello.index',['msg'=>$msg]);
   }

   public function post(Request $request){
      $validate_rule = [
         'msg' => 'required',
      ];
         $this->validate($request,$validate_rule);
         $msg = $request->msg;
         $response = response()->view('hello.index',
         ['msg'=>'「'. $msg .'」をクッキーに保存しました。']);
         $response->cookie('msg',$msg,100);
         return $response;
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