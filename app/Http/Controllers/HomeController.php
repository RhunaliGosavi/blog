<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
//use App\User_data;
use Session;
use Illuminate\Support\Facades\Auth;
use App\User_data;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');


    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    { 


       $user = Auth::user();

    

           if($user->name=='Admin' && $user->email=='admin@gmail.com'){
           
             Session::put('isAdmin',1);

            }
        return view('home');
    }

    public function uploadFile(Request $request){
    $user = Auth::user();

    $validatedData = $request->validate([
        'comment' => 'required',
        'file' => 'required',
    ]);

    if($validatedData){


        $image = $request->file('file');
        $name = $user->id.'-'.time().'.'.$image->getClientOriginalExtension();
        $destinationPath = public_path('/userfiles');
        $image->move($destinationPath, $name);

        $insert=array(
         'comment'=>$request->comment,
         'file'=>$name,
         'userid'=>$user->id
        );



        if(User_data::create($insert)){


           return  redirect('/home')->with('success','Data Updated Successfully');
         }else{

           return redirect('/home')->with('failed','Please try again');
         }
        
        //print_r($user->id);
     }
   

    }


    public function edit(Request $request){


         $id=$request->id;
         $list_data= User_data::where('id',$id)->get();;
         return view('edit_list')->with('list_data',$list_data);
    }


    public function update_data(Request $request){ 

    $user = Auth::user();


  $validatedData = $request->validate([
        'comment' => 'required',
       
    ]);

    if($validatedData)
        {

            if($request->hasFile('file')){

            $image = $request->file('file');
            $name = $user->id.'-'.time().'.'.$image->getClientOriginalExtension();

         
            $destinationPath = public_path('/userfiles');
            $image->move($destinationPath, $name);

              User_data::where('id',$request->id)->update(['comment'=>$request->comment,'file'=>$name ]);
            }else{



                User_data::where('id',$request->id)->update(['comment'=>$request->comment]);
            }

        }

        return redirect('/home')->with('success','Data Updated successfully');


    }


        public function display_list(){

           $user = Auth::user();

           if(Session('isAdmin')==1){

              $list_data= User_data::all();
           }
           else
           {
               $list_data= User_data::where('userid',$user->id)->get();
           }

          return view('list')->with('list_data',$list_data);

        }


        public function delete(Request $request){

         $id=$request->id;
         $list_data= User_data::where('id',$id)->delete();;
         return view('/home')->with('success','Data Updated successfully');


        }



    public function logout(){


        Session::flush();

       return redirect('/home');
    }

}
