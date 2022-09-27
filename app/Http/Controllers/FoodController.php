<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use App\Food;
use Illuminate\Support\Facades\DB;
use Auth;
use Illuminate\Support\Facades\Input; 

class FoodController extends Controller
{
    public function form(Request $request)
    {
        $regras = [
            'nome' => 'required',
            'valor_energetico' => 'required'
        ];
        $feedback = [
            'required' => 'Deve ser preenchido'
        ];
        $request->validate($regras, $feedback);
        Food::create([
            'user_id' => Auth::id(),
            'nome' => request('nome'),
            'porcao' => request('porcao'),
            'valor_energetico' => request('valor_energetico'),
            'carboidratos' => request('carboidratos'),
            'proteinas' => request('proteinas'),
            'gorduras_totais' => request('gorduras_totais'),
            'gorduras_trans' => request('gorduras_trans'),
            'fibras_alimentares' => request('fibras_alimentares'),
            'sodio' => request('sodio'),
        ]);
        $food = DB::table('food')->where('user_id', Auth::id())->get();
        $calories = DB::table('food')->where('user_id', Auth::id())->sum('valor_energetico');
        return view('home')->with(['food'=> $food, 'calories' => $calories]);
    }
}
