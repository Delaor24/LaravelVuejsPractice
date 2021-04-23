<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Artisan;
use Auth;
use App\Models\Backend\Admin;
class AdminLoginController extends Controller
{
    public function __construct()
    {
        $this->middleware('guest:admin')->except('logout', 'loginCheck');
    }
    public function login(Request $request){
       $this->validate($request,['email'=>'required','password'=>'required']);

       $arr = [
           'email'=>$request->email,
           'password'=>$request->password
       ];
       $admin = Admin::where('email',$request->email)->first();
       
       if(!empty($admin)){
            if (Auth::guard('admin')->attempt($arr, $request->remember)) {
                Artisan::call('cache:clear');
                return response([
                    'message'   => "Login Successfully",
                    'id'        => Auth::guard('admin')->user()->id ?? "",
                    'name'      => Auth::guard('admin')->user()->name ?? "",
                ], 200);
            }
            else{
                return response(['message'=>'Credentials worng! Please try again'],201);
            }
       }else{
        return response(['message'=>'Email does not match our records!'],202);
       }
    }

    public function logout()
    {
        Artisan::call('cache:clear');
        $logout = Auth::guard('admin')->logout();
        return response()->json(true);
    }

    public function loginCheck()
    {
        if (Auth::guard('admin')->user()) {
            return response([
                'message'   => "Login Successfully",
                'id'        => Auth::guard('admin')->user()->id ?? "",
                'name'      => Auth::guard('admin')->user()->name ?? "",    
            ], 200);
        }
        return response([
            'message'   => "Unauthorized",
        ], 201);
    }

    protected function guard(){

        return Auth::guard('admin');
    }
}
