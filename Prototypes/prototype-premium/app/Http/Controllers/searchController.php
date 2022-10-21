<?php

namespace App\Http\Controllers;

use App\Models\Promotion;
use Illuminate\Http\Request;

class searchController extends Controller
{
    public function search(Request $request){
        $search =$request->get('search');
        $promotion = Promotion::where('name','like','%'.$search.'%')->paginate(5);
        return view('index',['promotion'=>$promotion]);
    }
}
