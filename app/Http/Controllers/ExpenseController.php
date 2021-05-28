<?php


namespace App\Http\Controllers;


use App\Models\Expense;

class ExpenseController extends Controller
{
        function show()
        {
            return Expense::all();
        }
        function showOne($id)
        {
            return Expense::find($id);
        }
}
