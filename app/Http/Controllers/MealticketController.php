<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Models\Logs;

class MealticketController extends Controller
{
    public function index()
    {
        $user = Auth::user();
        $logs = Logs::with('user', 'mealType')->get();

        return view('admin.tickets', ['logs' => $logs]);
    }
}