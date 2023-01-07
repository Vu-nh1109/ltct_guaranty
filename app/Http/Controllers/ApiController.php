<?php

namespace App\Http\Controllers;

use App\Models\Petition;
use Illuminate\Http\Request;

class ApiController extends Controller
{
    public function index(){
        return Petition::all();
    }

    

    public function show($id)
    {
        return Petition::find($id);
    }
}
