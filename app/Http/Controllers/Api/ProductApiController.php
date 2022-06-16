<?php

namespace App\Http\Controllers\Api;
use App\Models\Pizza;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Response;

class ProductApiController extends Controller
{
    //Get Pizza List
    public function getList(){
        $product = Pizza::get();
        return Response::json($product);
    }


    //Delete Pizza List
    public function deletePizza(Request $request){
        $response = Pizza::where('pizza_id',$request->id)->delete();
        return Response::json($response);
    }
}