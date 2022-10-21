<?php

namespace App\Http\Controllers;

use App\Models\Promotion;
use Illuminate\Http\Request;

class PromotionController extends Controller
{
    public function select()
    {
        $data = Promotion::all();
        return view('ViewData', compact('data'));
    }












}
