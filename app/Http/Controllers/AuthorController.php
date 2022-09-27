<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;

class AuthorController extends Controller
{
    public function index(User $user)
    {
        return view('kosts', [
            'title' => "kost : $user->name",
            'kosts' => $user->kosts->load('category','user')
        ]);
    }
}
