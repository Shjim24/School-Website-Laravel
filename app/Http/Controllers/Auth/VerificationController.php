<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller; // <-- MUST HAVE THIS
use Illuminate\Foundation\Auth\VerifiesEmails;

class VerificationController extends Controller // <-- MUST EXTEND CONTROLLER
{
    use VerifiesEmails;

    protected $redirectTo = '/home';

    public function __construct()
    {
        $this->middleware('auth');
        $this->middleware('signed')->only('verify');
        $this->middleware('throttle:6,1')->only('verify', 'resend');
    }
}