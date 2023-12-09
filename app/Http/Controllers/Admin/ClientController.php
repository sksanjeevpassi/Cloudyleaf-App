<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class ClientController extends Controller
{
    //

    Public function getClient(Request $request){
        return view('Admin/Client/index');
    }

    Public function addClient(Request $request){
        return view('Admin/Client/add');
    }
}
