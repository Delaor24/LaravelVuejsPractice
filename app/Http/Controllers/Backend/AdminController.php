<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Auth;
class AdminController extends Controller
{
    public function test(){
        return 'hello world';
    }
    public function adminInfo(){
        $admin = Auth::guard('admin')->user();
        return response()->json($admin);
    }
}
