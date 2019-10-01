<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Admin;
use Session;
use DB;
class AuthController extends Controller
{
    public function login(){
        if(Session::has('userid')){
            return redirect()->to('dashboard');
        }
        return view('login');
    }
    public function loginstore(Request $request){
        $email=$request->email;
        $password=$request->password;
        $obj=Admin::where('email','=',$email)
                    ->where('password','=',md5($password))
                    ->first();
        if($obj){
            Session::put('userid',$obj->id);
            Session::put('username',$obj->name);
            Session::put('userrole',$obj->role);
            return redirect()->to('dashboard');
        }
        else{
            return redirect()->back()->with('msg','Wrong Email or Password');
        }
    }

    public function dashboard(){
        return view('dashboard');
        
    }
    public function logout(){
        Session::flush();
        return redirect()->to('login');
    }


    public function student1(){
        echo 'student 1';
    }
    public function student2(){
        echo 'student 2';
    }
    public function student3(){
        echo 'Student 3';
    }
    public function teacher1(){
        echo 'teacher 1';
    }
    public function teacher2(){
        echo 'teacher 2';
    }
    public function teacher3(){
        echo 'teacher 3';
    }public function admin1(){
        echo 'admin 1';
    }
    public function admin2(){
        echo 'admin 2';
    }
    public function admin3(){
        echo 'admin 3';
    }

    public function products(){
        $products=DB::table('products')
                    ->join('categories','categories.id','products.category_id')
                    ->select('products.id','products.title','categories.name')
                    ->get();
        return view('products',['products'=>$products]);

    }
}
