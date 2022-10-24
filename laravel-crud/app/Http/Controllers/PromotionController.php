<?php

namespace App\Http\Controllers;

use App\Models\Promotion;
use Illuminate\Http\Request;

class PromotionController extends Controller
{

// ==============================    select  ====================================


    public function select()
    {
        $data = Promotion::all();
        return view('ViewData', compact('data'));
    }



// ==============================    Add  ====================================
public function add(Request $request){

    $newpromotion = new Promotion();
    $newpromotion->name = $request->name;
    $newpromotion->save();

 }







}
