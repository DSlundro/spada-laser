<?php

namespace App\Http\Controllers\Guest;

use App\Http\Controllers\Controller;
use App\Models\Lightsaber;
use Illuminate\Http\Request;

class PageController extends Controller
{
    public function index()
    {
        $sabers = Lightsaber::orderByDesc('id')->take(4)->get();
        // ddd($sabers);
        return view('guest.index', compact('sabers'));
    }
}
