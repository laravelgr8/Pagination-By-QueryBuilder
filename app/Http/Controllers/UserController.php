<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
class UserController extends Controller
{
    function index()
    {
        $data=DB::table('login')->paginate(3);
        return view('home',["data"=>$data]);
    }
}
