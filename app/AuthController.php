<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AuthController extends Controller
{
    private $cognitoUrl = "YOUR_COGNITO_HOSTED_UI_URL";

    public function login()
    {
        return redirect($this->cognitoUrl);
    }

    public function callback(Request $request)
    {
        return "Authentication Successful";
    }

    public function logout()
    {
        return redirect('/');
    }
}
