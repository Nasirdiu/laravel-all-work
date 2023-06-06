<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class DemoController extends Controller
{
    function DemoAction(){
   //$result= DB::table('brands')->get();

        //first & find method

        $result= DB::table('brands')->pluck('brandImg','brandName');

   return $result;
    }
}
