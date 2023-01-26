<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;

class EmailVerificationController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     * 
     */
    public function __construct()
    {
        $this->middleware(['auth', 'verified']);
    }


    public function show()
    {
        //
    }
    public function verify($id)
    {
        //
    }
    public function resend()
    {
        //
    }
}
