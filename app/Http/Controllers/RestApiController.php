<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Salle;

class RestApiController extends Controller
{
    public function getAllSalles()
    {
        $resultats = Salle::all();    
         
        return response()->json($resultats);
    }
}
