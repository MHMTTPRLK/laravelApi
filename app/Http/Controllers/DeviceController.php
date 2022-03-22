<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\DeviceModel;

class DeviceController extends Controller
{
    function list()
    {
        return DeviceModel::all();
    }
  /*  function list($id=null)
    {
       return $id?DeviceModel::find($id):DeviceModel::all();
    }*/
    function find($id)
    {
       $device=DeviceModel::find($id);
       return $device;
    }
    function add(Request $request)
    {
        $device=new DeviceModel();
        $device->name=$request->name;
        $result=$device->save();
        if($result)
        {
            return ["Result"=>"Data has been saved"];
        }
        else{
            return ["Result"=>"Operation failed"];
        }

    }
}
