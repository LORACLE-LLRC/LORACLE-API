<?php

namespace App\Http\Controllers;

use App\Models\Internaute;
use Illuminate\Http\Request;

class ApiControllerInternaute extends Controller
{
  public function returnInternaute(Request $key)
  {
    return response()->json(Internaute::find($key));
  }

  public function createInternaute(Request $request){
    $item = Internaute::create($request->all());
    return response()->json($item);
  }
}