<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class FormController extends Controller
{
    public function index() {
        return view('form');
    }

    public function store(Request $request) {
        $input = $request->all();

        $this->validate($request, [
            'username' => 'required|max:5',
            'email' => 'required|email',
            'contact' => 'required'
        ]);

        return $input;
    }
}
