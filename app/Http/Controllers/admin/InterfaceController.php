<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;


class InterfaceController extends Controller
{
    //
    public function __construct()
    {
        $this->middleware('auth');
    }

    public function index(){


    	$interfaces=Interface::all();

    	return view('admin.interface.list',conpact('interfaces'));
    }
}
