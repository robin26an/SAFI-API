<?php


namespace App\Http\Controllers;


use App\Models\Expense;
use App\Models\ExpensePackageTypes;
use Illuminate\Http\Request;


class ExpensePackageTypesController extends Controller
{
    function type()
    {
        return ExpensePackageTypes::all();
    }
    function typeOne($id)
    {
        return ExpensePackageTypes::find($id);
    }
    function typeAdd(Request $req)
    {
        $expenseType = new ExpensePackageTypes;
        $expenseType->name =$req->name;
        $expenseType->amount = $req->amount;
        $result = $expenseType->save();
        if ($result)
        {
            return ["resultat"=>"les données ont été sauvegardée"];
        }
        else
        {
            return ["resultat" => "opération refusé"];
        }

    }
}


