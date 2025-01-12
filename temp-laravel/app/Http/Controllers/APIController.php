<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class APIController extends Controller
{
    public function getUser()
    {
        return response()->json([
            'id' => 'user_1',
            'name' => 'Mark',
            'password' => '123Banana'
        ]);
    }
}
