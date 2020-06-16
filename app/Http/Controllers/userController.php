<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;
use Session;
class userController extends Controller
{
    public function list(){
  
       $result=User::all();
      
      return view('userlist',compact('result'));

    }
    public function create(){

    	return view('create');
    }
     public function loginsubmit(Request $request)
    {
         User::select('name')->where(
         	[
         		['password','=',$request->password],
         	    ['email','=',$request->email]
           ]
         )->get();
         $request->session()->put('logData',[$request->input()]);
         return redirect('/list');
    	
    }
    public function createSubmit(Request $request){
         $user= new User;
         $user->name=$request->name;
         $user->email=$request->email;
         $user->password=$request->password;
         $result=$user->save();
         if($result){

         	return redirect('/list');
         }

    }
}
