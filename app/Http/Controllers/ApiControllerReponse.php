<?php

namespace App\Http\Controllers;

use App\Models\Reponse;
use Illuminate\Http\Request;

class ApiControllerReponse extends Controller
{
  public function returnReponse(Request $key)
  {
    return response()->json(Reponse::find($key));
  }

  public function createReponse(Request $request){
    $item = Reponse::create($request->all());
    return response()->json($item);
  }
}
