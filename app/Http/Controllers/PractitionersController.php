<?php

namespace App\Http\Controllers;

use App\Models\Practitioners;
use Illuminate\Http\Request;

class PractitionersController extends Controller
{
    function catch()
    {
        return Practitioners::all();
    }
    function catchOne($id)
    {
        return Practitioners::find($id);

    }
}
