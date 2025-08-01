<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ProductController extends Controller
{
    //
    public function lists(Request $request){
        $data = [
            [
                'id'=>1,
                'name'=>'Coca',
                'price'=>0.5,
                'qty'=>100,
                'imageUrl'=>'https://souriredessaveurs.com/2977-large_default/coca-cola-metal-box-33-cl.jpg',
            ]
        ];
        return response()->json($data);
    }
}
