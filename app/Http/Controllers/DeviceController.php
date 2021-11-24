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

    public function update(Request $request)
    {
        # code...
        $data = Device::find($request->id);
        $data->name = $request->name;
        $data->list = $request->list;

        $result = $data->save();

        if($result) {
            return ["Result" => "Data is updated"];
        } else {
            return ["Result" => "Error"];
        }
    }

    public function search($name)
    {
        # code...
        $data = Device::where("name","like", "%". $name."%")->get();

        if(count($data)) {
            return $data;
        } else {
            return ["Result"=>"No Result found"];
        }

        
    }

    public function delete($id)
    {
        # code...
        $data = Device::find($id);

        if($data->delete()) {
            return ["Result"=>"Deleted"];
        } else {
            return ["Result"=>"Not Deleted"];
        }
    }
}

