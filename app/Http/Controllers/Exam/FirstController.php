<?php

namespace App\Http\Controllers\Exam;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class FirstController extends Controller
{
    //index method:
    public function index() {
        return view('contact');
    }

    public function country() {
        return view('morning');
    }
}
