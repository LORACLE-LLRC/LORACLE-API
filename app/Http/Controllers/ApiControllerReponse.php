<?php

namespace App\Http\Controllers;

use App\Models\Reponse;
use Illuminate\Http\Request;
use Illuminate\Routing\Controller;

class ApiControllerReponse extends Controller
{
  public function returnReponse(Request $request)
  {
      $reponse = Reponse::where('IDINTERNAUTEP', $request->get('IDINTERNAUTEP'))
          ->where('IDINTERNAUTER', $request->get('IDINTERNAUTER'))
          ->where('NUMSERVICE', $request->get('NUMSERVICE'))->first();
      return response()->json($reponse);
  }

  public function createReponse(Request $request){
    $item = Reponse::create($request->all());
    return response()->json($item);
  }
}
