<?php

namespace App\Http\Controllers;

use App\Models\Promotion;
use Illuminate\Http\Request;

class searchController extends Controller
{
    public function search(Request $request){
        // $search =$request->get('search');
        // $promotion = Promotion::where('name','like','%'.$search.'%')->paginate(5);
        // return view('index',['promotion'=>$promotion]);



        if($request->ajax()){
            $input = $request->key;
        $output="";
        $searchPromotion=Promotion::where('name','like','%'.$input."%")->get();
        if($searchPromotion)
        {
        foreach ($searchPromotion as $promotion) {
        $output.=
        '<table>
            <thead>
                
            </thead>
            <tbody>
                <tr>
                    <td>'.$promotion ->name.'</td>
                    <td>
                      
                        <td> <a href="' .route('promotion.edit',$promotion->id ).'">Edit</a></td>
                        <td> <form method="post" action="'.route('promotion.destroy',$promotion->id ).'">
                        <input type="hidden" name="_method" value="delete">
                        <input type="hidden" name="_token" value="'. csrf_token() .'">
                            <button type="submit" class="btn btn-danger btn-sm">Delete</button>
                        </form>
                    <td>
                <tr>
            </tbody>
        </table>
        ';

        }
            return Response($output);
            }
            
            }
    }
}
