<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class DashboardController extends Controller
{
    public function index()
    {
        view('dashboard.index', [
            'title' => 'dashboard',
            'active' => 'dashboard'
        ]);
    }
}
