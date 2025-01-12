{{-- Disregard file --}}
{{-- Test --}}

{{-- Route for web.php --}}

<?php

// If '/', URL will be "localhost:8000" to view home.blade.php 
Route::get('/', function(){
    return view('home')
});

// If '/about', URL will be "localhost:8000/about" to view about.blade.php
Route::get('/about', function(){
    return view('about')
})

// If '/data', URL will be "localhost:8000/data" and it will return 'Hello!' string
Route::get('/data', function(){
    return 'Hello!';
})

Route::get('/data', function(){
    return response()->json(['number' => 42]);
});

?>



{{-- ^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^ --}}



{{-- Not best practice sabi ni gpt, dapat nasa App\Http\(extended)Controller yung mga APIs such as POST, GET, and etc. --}}
{{-- This API is specifically or mainly located at web.php, but it's not the best practice out there. XD --}}
<?php



use Illuminate\Support\Facades\Route;

// User GET Method
Route::get('/user', function () {
    return response()->json([
        'id' => 1,
        'name' => 'John Doe',
        'email' => 'john.doe@example.com'
    ]);
});


// User POST Method
use Illuminate\Support\Facades\Route;
use Illuminate\Http\Request;
use App\Models\User; // Assuming you have a User model

Route::post('/user', function (Request $request) {
    // Retrieve data from the request
    $name = $request->input('name');
    $email = $request->input('email');

    // Create a new user
    $user = User::create([
        'name' => $name,
        'email' => $email,
    ]);

    // Return a success response
    return response()->json([
        'message' => 'User created successfully!',
        'user' => $user,  // The created user with the auto-incremented ID
    ]);
});



?>



{{-- Dapat wala sa routes ang API, must be located at Controllers --}}
{{-- This is the right path for API --}}
<?php

// app/Http/Controllers/(Extended)Controller.php
// User POST Method
namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;

class UserController extends Controller
{
    public function store(Request $request)
    {
        // Retrieve data from the request
        $name = $request->input('name');
        $email = $request->input('email');

        // Create a new user
        $user = User::create([
            'name' => $name,
            'email' => $email,
        ]);

        // Return a success response
        return response()->json([
            'message' => 'User created successfully!',
            'user' => $user,
        ]);
    }
}

// routes/web.php
// To call the API
use App\Http\Controllers\UserController;

Route::post('/user', [UserController::class, 'store']);


// User GET Method
// app/Http/Controllers/UserController.php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;

class UserController extends Controller
{
    public function store(Request $request)
    {
        // Retrieve data from the request
        $name = $request->input('name');
        $email = $request->input('email');

        // Create a new user
        $user = User::create([
            'name' => $name,
            'email' => $email,
        ]);

        // Return a success response
        return response()->json([
            'message' => 'User created successfully!',
            'user' => $user,
        ]);
    }
}

// To call the API
// routes/web.php

use App\Http\Controllers\UserController;

Route::post('/user', [UserController::class, 'store']);


?>



{{-- API RELATED yung nasa taas --}}
{{-- ^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^ --}}





