<?php

namespace App\Http\Controllers;

use App\Models\Brand;
use App\Models\Product;
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

  //      return Brand::where('id','=',$request->id)->delete();

     // return  Product::where('id',1)->decrement('price',100);
//        return Brand::all();
//        return Brand::find(1);
//        return Product::pluck('price','title');
    //    return Product::count('price');
//        return Product::select('title','price')->get();

//        return Product::skip(10)->take(1)->first();
        return Product::simplePaginate(2);
    }

}
