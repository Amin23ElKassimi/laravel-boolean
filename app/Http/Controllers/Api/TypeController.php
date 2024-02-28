<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Models\Type;
use Illuminate\Http\Request;

class TypeController extends Controller
{
    //
    public function index(){
        $types =  Type::all();
        return response()->json(
            [
                "success" => true,
                "results" => $types
            ]);
    }

    public function show(string $id){
        $type = Type::findOrFail($id);
        return response()->json($type);
    }
}
