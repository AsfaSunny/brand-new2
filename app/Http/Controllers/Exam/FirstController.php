<?php

namespace App\Http\Controllers\Exam;

use App\Http\Controllers\Controller;
use App\Http\Controllers\Exam\SecondController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Log;

class FirstController extends Controller
{
    //index method:
    public function index() {
        return view('contact');
    }

    // public function contact_store(Request $request) {

    // }




    public function country() {
        return view('morning');
    }

    public function loader_form() {
        return view('add');
    }

    public function store(Request $request) {
        $request->validate([
            'name' => 'required|max:55',
            'email' => 'required|max:80',
            'password' => 'required|min:8|max:32'
        ]);

        // dd($request->all());

        Log::channel('contactstore')->info('The form submitted by: ' .rand(1, 30));
        return redirect()->back();
    }
}
