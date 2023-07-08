<?php

namespace App\Http\Controllers;

use App\Models\Brand;
use Illuminate\Http\Request;

class DemoController extends Controller
{
    public function DemoAction(Request $request){
        //return  Brand::create($request->input());
        // return  Brand::where('id',$request->id)->update($request->input());
//        return Brand::updateOrCreate(
//          ['brandName'=> $request->brandName],
//            $request->input()
//
//        );

        
    }
}
