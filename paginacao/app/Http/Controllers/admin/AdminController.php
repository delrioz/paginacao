<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

use Illuminate\Validation\Rule;


class AdminController extends Controller
{   
        public function __construct() {
            
            return "admincontroller na pasta admin";
         $this->middleware('auth:admin');

    }
    
    
    
    public function index()
    {
        //return view ('admin.dashboard');

       // return "Admin dashboard";

        return "Admin dashboard";

    }
}
