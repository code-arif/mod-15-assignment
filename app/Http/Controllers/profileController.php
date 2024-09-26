<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class profileController extends Controller
{
    public function index($id)
    {
        // variable declaration
        $name = "Donal Trump";
        $age = "75";

        // Add three variables in $data variable as associative array with values
        $data = [
            'id' => $id,
            'name' => $name,
            'age' => $age,
        ];

        // Set cookie variables
        $cookie_name = 'access_token';
        $cookie_value = '123-XYZ';
        $minutes = 1;
        $path = '/';
        $domain = $_SERVER['SERVER_NAME'];
        $secure = false;
        $httpOnly = true;

        // Set cookie
        $cookie = cookie($cookie_name, $cookie_value, $minutes, $path, $domain, $secure, $httpOnly);

        // Return the response
        return response()->json($data, 200)->cookie($cookie);
    }
}
