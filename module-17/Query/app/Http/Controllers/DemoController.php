<?php

namespace App\Http\Controllers;

use Illuminate\Database\Query\JoinClause;
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
        /*
       //$result= DB::table('products')->select('title','price')->distinct()->get();
       // //unique value select korer jono.
        */

       //inner join,leftjoin,rightjoin,
     /*  $result= DB::table('products')
           ->join('categories','products.category_id','=','categories.id')
           ->join('brands','products.brand_id','=','brands.id')
           ->get();

        /*
       $result= DB::table('products')
           ->crossJoin('brands')
           ->get();
  return $result;
     */

        $result= DB::table('products')
            ->join('categories',function (JoinClause $join){
                $join->on('products.category_id','=','categories.id')
                    ->where('products.price','=',20);
            })->get();
        return $result;
    }
}
