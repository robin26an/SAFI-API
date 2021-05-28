<?php


namespace App\Http\Controllers;


use App\Models\ExpenseOutPackages;


class ExpenseOutPackagesController extends Controller
{
    function pack()
    {
        return ExpenseOutPackages::all();
    }

}
