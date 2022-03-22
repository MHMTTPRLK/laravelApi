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
}
