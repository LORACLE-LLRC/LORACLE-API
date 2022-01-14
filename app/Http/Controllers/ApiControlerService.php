<?php

namespace App\Http\Controllers;

use App\Models\Service;
use Illuminate\Http\Request;

class ApiControler extends Controller
{
    public function listService(){
        return response()->json(Service::all());
    }

    public function createService(Request $request){
        $item = Concert::create($request->all());
        return response()->json($item);
    }
}
