<?php

namespace App\Http\Controllers;

use App\Models\Offre;
use Illuminate\Http\Request;
use Illuminate\Routing\Controller;

class ApiControllerOffre extends Controller
{
    public function returnOffre(Request $request){
        $demande = Offre::where('IDINTERNAUTE', $request->get('IDINTERNAUTE'))
            ->where('NUMSERVICE', $request->get('NUMSERVICE'))->first();
        return response()->json($demande);
    }

    public function createOffre(Request $request){
        $item = Offre::create($request->all());
        return response()->json($item);
    }

    public function deleteOffre($id){
        $demande = Offre::find($id);
        if($demande){
            $demande->delete();
            return response()->json(["status" => "succes"]);
        }else{
            return response()->json(["status" => "error"]);
        }
    }
}
