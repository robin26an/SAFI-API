<?php

namespace App\Http\Controllers;

use App\Models\Employee;
use Illuminate\Http\Request;
use App\Models\Visits;


class VisitsController extends Controller
{
    function lists($id=null)
    {
        return $id?Visits::find($id):Visits::all();
    }


    function adds(Request $req)
    {
        $visit= new Visits;
        $visit->practitioners_id= $req->practitioners_id;
        $visit->employees_id= $req->employees_id;
        $visit->attendedDate= $req->attendedDate;
        $visit->visitStates_id= $req->visitStates_id;


        $result=$visit->save();
        if($result) {

            return ["Result" => "Les données ont été ajoutées"];
        }
        else
        {
            return["Result"=>"Operation failed"];
        }
    }

}
