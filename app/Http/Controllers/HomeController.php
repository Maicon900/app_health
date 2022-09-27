<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Home;
use Illuminate\Support\Facades\DB;
use App\Food;
use Auth;

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
        $food = DB::table('food')->where('user_id', Auth::id())->get();
        $calories = DB::table('food')->where('user_id', Auth::id())->sum('valor_energetico');
        return view('home')->with(['food'=> $food, 'calories' => $calories]);
    }
}
