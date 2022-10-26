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
    return redirect("ViewData");

}

// -------------------------->


public function update($id,Request $request){
    $editpromo = Promotion::find($id);
    $editpromo->name = $request->input('name');
    $editpromo->save();
    return redirect("ViewData");
}


// ==============================    DELETE  ====================================


    //delete section
    public function delete(Request $req, $id)
    {
        $promo = Promotion::where('id', $id)->delete(["name" => $req->name]);
        return redirect("ViewData");
    }




// ==============================    DELETE  ====================================

public function search($name=null){
    if($name == null){
        $data =promotion::all();
        return view('index_search',compact('data'));        }
    else {
        $data =promotion::where('name', 'like','%'.$name.'%')->get();
        return view('index_search',compact('data'));
    }
}






}





