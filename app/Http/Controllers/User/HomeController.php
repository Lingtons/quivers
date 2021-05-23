<?php

namespace App\Http\Controllers\User;

use App\Http\Controllers\Controller;
use App\Models\Family;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        $families = Family::all();
        return view('user.home',['families' => $families]);
    }
}
