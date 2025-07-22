<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller; // <-- MUST HAVE THIS
use Illuminate\Foundation\Auth\ResetsPasswords;

class ResetPasswordController extends Controller // <-- MUST EXTEND CONTROLLER
{
    use ResetsPasswords;

    protected $redirectTo = '/home';
}