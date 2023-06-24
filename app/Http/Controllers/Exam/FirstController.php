<?php

namespace App\Http\Controllers\Exam;

use App\Http\Controllers\Controller;
use App\Http\Controllers\Exam\SecondController;
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

    public function loader_form() {
        return view('add');
    }

    public function store(Request $request) {
        // dd($request->all());

        // return redirect()->action([SecondController::class, 'testTwo']);

        return redirect()->back()->with('success', 'Data Inserted!');
    }
}
