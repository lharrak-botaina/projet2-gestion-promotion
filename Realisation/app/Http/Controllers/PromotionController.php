<?php

namespace App\Http\Controllers;

use App\Models\Promotion;
use App\Models\Student;
use Illuminate\Support\Str;
use Illuminate\Http\Request;

class PromotionController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $promotion =  Promotion::all();
        // dd($promotion);
        return view('index')->with([
            "promotion" => $promotion
        ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('inserte-promotion');
    }





    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        // $name = $request->input('name');
        $promotion = Promotion::create([
            "name" => $request->name,
            'token'=>Str::random()
        ]);

        // if($inserte){
       return redirect()->route('promotion.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($token)
    {
        $promotion =Promotion::where('token',$token)->firstOrFail();
        $studentPromotion = Student::where('promotion_token',$promotion->token)->get();
        return view('edit',[
           'promotion'=>$promotion,
            'studentPromotion'=>$studentPromotion
        ]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $token)
    {

        $update=Promotion::where('token',$token)->firstOrFail();
        $update->name=$request->get('name');
        $update->save();


        return redirect('/promotion')->with('success');

    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($token)
    {

        $delete = Promotion::firstOrFail();
        $delete->delete();
        return redirect('/promotion')->with('success');
    }
}
