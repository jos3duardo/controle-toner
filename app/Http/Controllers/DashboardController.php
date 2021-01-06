<?php

namespace App\Http\Controllers;

use App\Models\Servicos;
use App\Models\Toner;
use Illuminate\Http\Request;

class DashboardController extends Controller
{
    public function index()
    {
        $title = 'Dashboard';
        $servicos = Servicos::all()->count();
        $toners = Toner::all()->count();
        return view('dashboard', compact('title', 'servicos', 'toners'));
    }
}
