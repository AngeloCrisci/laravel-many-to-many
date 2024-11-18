<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Models\Type;
use Illuminate\Http\Request;

use function PHPSTORM_META\type;

class TypeController extends Controller
{
    //

    public function index(){
        $types = Type::all();

        return response()->json(
            [
                "success" => true,
                "results" =>  $types,
            ]
        );

     }

}
