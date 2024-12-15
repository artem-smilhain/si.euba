<?php

namespace App\Http\Controllers;

use App\Models\Vehicle;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function index()
    {
        // Получение всех доступных автомобилей
        $vehicles = Vehicle::where('status', 'Available')->get();
        return view('index', compact('vehicles'));
    }
}
