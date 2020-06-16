<?php

namespace App\Http\Controllers;

use App\User;
use Illuminate\Http\Request;
use Symfony\Component\HttpFoundation\Response;

class UserController extends Controller
{
    public function index(){
        return response()->json([
            'users' => User::all()
        ], Response::HTTP_OK);
    }
}
