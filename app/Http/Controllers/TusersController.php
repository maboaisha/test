<?php

namespace App\Http\Controllers;

use App\Models\Tuser as ModelsTuser;
use Illuminate\Database\Eloquent\Model\Tuser;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\View;
use Symfony\Component\Console\Input\Input;

class TusersController extends Controller
{
    public function login()
    {
        return view('login');
    }

    public function loged(Request $request)
    {
        DB::table('tusers')->where('username','=',$request->input('username') && 'password','=',$request->input('password'))->get();
        return "<h3 style='color:green;'>login succssesfully! ".$request->input('username')."</h3>";
    }

    public function signin()
    {
        return view('signin');
    }

    public function signed(Request $request)
    {
        $tuser=new ModelsTuser();
        $tuser->name=$request->input('username');
        $tuser->email=$request->input('email');
        $tuser->phone=$request->input('phone');
        $tuser->password=$request->input('password');
        $tuser->save();
        echo"<h3 style='color:green;'>sigin succssesfully! ".$request->input('username')."</h3>";
    }

    public function resetpassword()
    {
        return view('pass');
    }

    public function resetedpassword(Request $request)
    {
        DB::table('tusers')->where('email','=',$request->input('email'))
        ->update(['password' => $request->password]);
        return "<h3 style='color:green;'>Password reseted succssesfully! </h3>";
    }
}
