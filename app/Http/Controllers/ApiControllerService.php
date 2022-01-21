<?php

namespace App\Http\Controllers;

use App\Models\Service;
use Illuminate\Http\Request;

class ApiControllerService extends Controller
{
    public function listService(){
        return response()->json(Service::all());
    }

    public function createService(Request $request){
        $item = Service::create($request->all());
        return response()->json($item);
    }

    public function deleteService($id){
        $service = Service::find($id);
        if($service){
            $service->delete();
            return response()->json(["status" => "succes"]);
        }else{
            return response()->json(["status" => "error"]);
        }
    }
}
