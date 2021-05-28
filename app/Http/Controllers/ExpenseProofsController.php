<?php


namespace App\Http\Controllers;


use App\Models\ExpenseProofs;

class ExpenseProofsController extends Controller
{
        function list()
        {
            return ExpenseProofs::all();
        }
}
