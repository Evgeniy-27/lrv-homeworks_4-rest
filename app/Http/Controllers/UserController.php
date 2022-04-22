<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class UserController extends Controller
{
    public function index()
    {
        $value = Auth::user();
        return view('user', [
            'name' => $value->name,
            'email' => $value->email,
            'id' => $value->id,
        ]);
    }
}
