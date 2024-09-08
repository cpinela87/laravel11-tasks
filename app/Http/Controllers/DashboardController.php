<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth as FacadesAuth;

class DashboardController extends Controller
{
    //
    public function index()
    {
        $user = FacadesAuth::user();
        $tasks = $user->tasks;
        return view('dashboard', compact('tasks'));

    }
}
