<?php

namespace App\Http\Controllers;

use App\Models\Service;
use Illuminate\Http\Request;
use Illuminate\Routing\Controller;

class ApiControllerService extends Controller
{
    public function returnServices(){
        $services = Service::where('ESTFINI', 0)->orderby('NUMSERVICE', 'DESC')->get();
        return response()->json($services);
    }

    public function createService(Request $request){
        $item = Service::create($request->all());
        return response()->json($item);
    }

    public function finishService(Request $request){
        $service = Service::where('NUMSERVICE', $request->get('NUMSERVICE'))->first()
            ->update(['ESTFINI' => 1]);
        return response()->json($service);
    }
}
