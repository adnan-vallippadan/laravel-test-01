<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class DatabaseController extends Controller
{
    public function addUser(Request $request) {
        $name = $request->input('name', 'Default Name');
        $email = $request->input('email', 'test@test.com');

        DB::table('users')->insert(
            [
                'name' => $name,
                'email' => $email                
            ]
        );

        Return "Data Added";

    }

    public function showData() {
        $users = DB::table('users')
                    ->where('name', 'LIKE', '%Name%')
                    ->get()->pluck('name');
        dd($users);
    }
}
