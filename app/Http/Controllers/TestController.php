<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class TestController extends Controller
{
    function api2($num){
        $arr = [];
        // $num = strval( $num );
        $len = strlen($num);
        
        $num = (int)$num;

        for ($i=0; $i< $len ; $i++){

            $res = $num %(10**($len-$i));

            $res = $res - $num %(10**($len-$i-1));

            array_push($arr , $res); 
        }
  
       $message = $arr;
        

        return response()->json([
            "status" => "Success",
            "message" => $message
        ]);
}
}

?>
