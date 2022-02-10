<?php

namespace App\Http\Controllers;

use App\Models\Demande;
use Illuminate\Http\Request;

class ApiControllerDemande extends Controller
{
    public function returnDemande(Request $request){
        $demande = Demande::where('IDINTERNAUTE', $request->get('IDINTERNAUTE'))
            ->where('NUMSERVICE', $request->get('NUMSERVICE'))->first();
        return responce()->json($demande);
    }

    public function createDemande(Request $request){
        $item = Demande::create($request->all());
        return response()->json($item);
    }

    public function deleteDemande($id){
        $demande = Demande::find($id);
        if($demande){
            $demande->delete();
            return response()->json(["status" => "succes"]);
        }else{
            return response()->json(["status" => "error"]);
        }
    }
}
