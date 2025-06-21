<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Property;

class HomeController extends Controller
{
    public function index()
    {
        $latestProperties = Property::latest()->take(6)->get(); // or paginate(6)
        return view('home.index', compact('latestProperties'));
    }
}
