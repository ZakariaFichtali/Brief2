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

// ==============================    Edit  ====================================


// public function Edit($id)
// {
//     $data = Promotion::find($id);
//     return view('Edit', compact('data'));
// }






public function Edit($id){
    $ziko = Promotion::find($id);
    return view('Edit', compact('ziko'));

}

// -------------------------->


public function update($id,Request $request){
    $editpromo = Promotion::find($id);
    $editpromo->name = $request->input('name');
    $editpromo->save();
    return redirect('ViewData');
}


// ==============================    DELETE  ====================================

public function delete()
{
    # code...
}






}


