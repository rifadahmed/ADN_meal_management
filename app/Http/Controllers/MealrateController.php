<?php

namespace App\Http\Controllers;

use App\Models\Meal_rate;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class MealrateController extends Controller
{
    public function index()
    {
         $data['title']="Meal Rate";
         $data['mealrate']=Meal_rate::all();
         $mealrate = New Meal_rate();
         $mealrate = $mealrate->orderBy('id', 'DESC')->simplePaginate(5);
         $data['mealrate']=$mealrate;
         $data['serial']    = 1;
         return view('meal_rate.index',$data);
        // return "hello";
    }

    public function create()
    {
        $data['title']="Crate Meal Rate";
        return view('meal_rate.create', $data);
    }
    public function store(Request $request)
    {

        $request->validate([
            'meal_rate'=>'required|regex:/^\d+(\.\d{1,2})?$/',
        ]);
        
            $mealrate= new Meal_rate();
            $mealrate->meal_rate = $request->meal_rate;
            $mealrate->effective_date =$request->effective_date;
            $mealrate->created_by = Auth::User()->name;
            $mealrate->save();




            
            return redirect()->route('mealrate.index');

    }
}
