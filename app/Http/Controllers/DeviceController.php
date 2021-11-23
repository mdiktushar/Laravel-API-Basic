<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Device;

class DeviceController extends Controller
{
    //
    function list($id=null){
        return $id ? Device::find($id) : Device::all();
    }

    public function find($id)
    {
        # code...
        return Device::find($id);
    }

    public function input(Request $request)
    {
        # code...
        $data = new Device;
        $data->name = $request->name;
        $data->list = $request->list;
        $result = $data->save();

        if($result) {
            return ["Result" => "Data has been saved"];
        } else {
            return ["Result" => "Error"];
        }
            
    }
}

