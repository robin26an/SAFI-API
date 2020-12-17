<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Visits;


class VisitsController extends Controller
{
    function get()
    {
        return Visits::all();
    }
    function getOne($id)
    {
        return Visits::find($id);
    }

    function add(Request $req)
    {
        $visit= new Visits;
        $visit->practitioners_id=$req->practitioners_id;
        $visit->employees_id=$req->employees_id;
        $visit->attendedDate=$req->attendedDate;
        $visit->visitStates_id=$req->visitStates_id;


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
