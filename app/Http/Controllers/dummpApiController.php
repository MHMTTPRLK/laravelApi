<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class dummpApiController extends Controller
{
    function testData(){
        return ['name'=>'Mehmet',
                'surname'=>'Parlak',
                'linkedin'=>'https://www.linkedin.com/in/mehmet-parlak/'
            ];
    }
}
