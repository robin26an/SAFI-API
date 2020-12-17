<?php

namespace App\Http\Controllers;

use App\Models\Medicines;
use Illuminate\Http\Request;


class MedicinesController extends Controller
{
    function take()
    {
        return Medicines::all();
    }
    function takeOne($id)
    {
        return Medicines::find($id);

    }
}
