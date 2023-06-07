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

/*
 //advance join
   $result= DB::table('products')
       ->join('categories',function (JoinClause $join){
           $join->on('products.category_id','=','categories.id')
               ->where('products.price','=',20);
       })->get();
 */
/*
//union
$result1= DB::table('products')->where('products.price','>',2000);
$result2= DB::table('products')->where('products.discount','=',1);
$result=$result1->union($result2)->get();
*/
/*
        //where
        $result= DB::table('products')->whereIn('products.price',[20,5000])
            ->get();
*/
/*
$result= DB::table('products')
    ->whereNotIn('price',[20,2000])
    ->get();
*/
//        $result= DB::table('products')->skip(2)->take(2)->get();
/*
 // group
       $result= DB::table('products')
           ->groupBy('price')
           ->having('price','>',2000)
           ->get();
 */


//insert

//->insert([
//                'brandName'=>'Demo Brand',
//                'brandImg'=>'Demo Img'
//                ]);

//           ->insert($request->input());


// ->insert([
//     "brandName"=>$request->input('name'),
//     "brandImg"=>$request->input('img')
// ]);

//Update

// ->where('id','=',$request->id)
// ->update($request->input());

// ->updateOrInsert([
//     'brandName'=>$request->bname,],
// $request->input());


//incrment //deceremnt

// ->where('id',$request->id)
// ->decrement('price','5');
