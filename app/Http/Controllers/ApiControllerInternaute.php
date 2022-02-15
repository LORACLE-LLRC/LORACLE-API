<?php

namespace App\Http\Controllers;

use App\Models\Internaute;
use Illuminate\Http\Request;
use Illuminate\Routing\Controller;

class ApiControllerInternaute extends Controller
{
    public function returnInternaute(Request $request)
    {
        $internaute = Internaute::where('EMAILINTER', $request->get('EMAILINTER'))->get();
        return response()->json($internaute);
    }

    public function createInternaute(Request $request){
        $item = Internaute::create($request->all());
        return response()->json($item);
    }
}
