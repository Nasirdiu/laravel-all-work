<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class DemoController extends Controller
{
    function DemoAction(){
   //$result= DB::table('brands')->get();

        //first & find method
//        $result= DB::table('brands')->pluck('brandImg','brandName');
      //  $result= DB::table('products')->sum('price');//max min avg sum
//        $result= DB::table('products')->select('title','price')->get();
        $result= DB::table('products')->select('title','price')->distinct()->get(); //unique value select korer jono.
   return $result;
    }
}
