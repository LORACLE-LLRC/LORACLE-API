<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ApiInternauteControler extends Controller
{
  public function listService(){
    return response()->json(Service::all());
}
