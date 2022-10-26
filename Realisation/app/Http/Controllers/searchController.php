<?php

namespace App\Http\Controllers;

use App\Models\Promotion;
use App\Models\Student;
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
        '
        <table>
            <thead>
            </thead>
            <tbody>
                <tr>

                    <td>'.$promotion ->name.'</td>
                    <td>
                        <div class="d-flex flex-row justify-content-end ">
                           <a href="' .route('promotion.edit',$promotion->token ).'"><i class="fa fa-pencil " aria-hidden="true"></i></a>
                            <form method="post" action="'.route('promotion.destroy',$promotion->token ).'">
                                <button id="trash-btn"><i class="fa fa-trash" aria-hidden="true"></i></button>
                            </form>
                        </div>
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
    public function searchStudent(Request $request){

        if($request->ajax()){
            $input = $request->key;
            $token = $request->token;
        $output="";
        $searchStudent=Student::where('promotion_token', $token)
        ->where('first_name', 'like', '%' . $input . '%')
        ->orWhere('last_name', 'like', '%' . $input . '%')
        ->orWhere('email', 'like', '%' . $input . '%')
        ->get();
        if($searchStudent)
        {
        foreach ($searchStudent as $student) {
        $output.=
        '
        <table>
            <thead>
            </thead>
            <tbody>
                <tr>

                    <td>'.$student->last_name.'</td>
                    <td>'.$student->first_name.'</td>
                    <td>'.$student->email.'</td>

                    <td>
                        <div class="d-flex flex-row justify-content-end ">
                           <a href="' .route('student.edit',$student->id).'"><i class="fa fa-pencil " aria-hidden="true"></i></a>
                            <form method="post" action="'.route('student.destroy',$student->id).'">
                                <button id="trash-btn"><i class="fa fa-trash" aria-hidden="true"></i></button>
                            </form>
                        </div>
                    <td>
                <tr>
            </tbody>
        </table>
        ';

        }
    }
    return Response($output);
}
    }


}
