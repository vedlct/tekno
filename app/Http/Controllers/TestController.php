<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Imagecow\Image;

class TestController extends Controller
{
    public function index(){
        return view('email.brochure');
    }
}
