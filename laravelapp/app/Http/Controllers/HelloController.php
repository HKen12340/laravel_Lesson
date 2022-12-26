<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Http\Response;
use App\Http\Requests\HelloRequest;
use Illuminate\Support\Facades\DB;
use Validator;

class HelloController extends Controller
{
  
   public function index(Request $request){

   $items = DB::table('people')->orderBy('age',"asc")->get();
   return view('hello.index',['items'=>$items]);
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

   public function add(){
      return view("hello.add");
   }
   
   public function create(Request $request){
      $param = [
         'name' => $request->name,
         'mail' => $request->mail,
         'age' => $request->age,
     ];
      DB::table('people')->insert($param);
      return redirect('/hello');
   }

   public function edit(Request $request){
      $param = ['id' => $request->id];
      $item = DB::select('select * from people where id = :id',
               $param);
               return view('hello.edit',['form' => $item[0]]);
   }

   public function update(Request $request){
      $param = [
         'id' => $request->id,
         'name' => $request->name,
         'mail' => $request->mail,
         'age' => $request->age,
      ];
      DB::table("people")
      ->where("id",$request->id)
      ->update($param);
      return redirect('/hello');
   }

   public function del(Request $request){
      $param = ['id' => $request->id];
      $item = DB::select('select * from people where id = :id',$param);
      return view('hello.del',['form' => $item[0]]);
   }

   public function remove(Request $request){
      $param = ['id' => $request->id];
      DB::table('people')
      ->where('id',$request->id)->delete();
      return redirect('/hello');
   }

   public function show(Request $request){
       $page = $request->page;
      // $min = $request->min;
      // $max = $request->max;
      $item = DB::table('people')
      // ->whereRaw('age >= ? and age <=  ?',[$min,$max])
      // ->orderBy('age','desc')
       ->offset($page * 3)
       ->limit(3)
      ->get();
      return view('hello.show',['items' => $item]);
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