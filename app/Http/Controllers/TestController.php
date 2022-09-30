<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class TestController extends Controller
{ 
    // Function for the first API
    function api1($str){
        $res = "";
        // declaring a reference string
        $str1 = 'aAbBcCdDeEfFgGhHiIjJkKlLmMnNoOpPqQrRsStTuUvVwWxXyYzZ0123456789';
        // looping through the reference string
        for ($i = 0;$i<strlen($str1);$i++){
            // looping through the user input
            for ($j = 0;$j<strlen($str);$j++){
                if ($str[$j] == $str1[$i])
                $res = $res . $str[$j];
            }
        }
        $message = $res;
        // returning the results
        return response()->json([
            'status' => "Success",
            'message' => $message]);
        
        }



    // Function for the second API
    function api2($num){
        $arr = [];
        // getting the length of the input
        $len = strlen($num);
        // changing the input into an integer
        $num = (int)$num;
        // checking if input is negative
        if ($num < 0){
            $num = -$num;
        }
        // looping through the digit of input number
        for ($i=0; $i< $len ; $i++){
            // 
            $res = $num %(10**($len-$i));

            $res = $res - $num %(10**($len-$i-1));

            array_push($arr , $res); 
        }
  
       $message = $arr;
        
        // returning the results
        return response()->json([
            "status" => "Success",
            "message" => $message
        ]);
    }

    

    // Function for the third API
    function api3($str){
        $string  = "";
        for($i = 0 ; $i <strlen($str) ; $i++){
            if(is_numeric($str[$i])){
                $string = $string . $str[$i];
            }

        }

        $message = decbin($string);

        // returning the results
        return response()->json([
            "status" => "Success",
            "message" => $message]);
    }


   // Function for the fourth API
    function api4($str){
        // exploding the input string 
        $arr = explode(" ",$str);
        // checking for the operator and performing operations
        // Performing addition
        if($arr[0] == "+"){
            $res = (int)$arr[1] + (int)$arr[2];
        }
        // Performing substraction
        if($arr[0] == "-"){
            $res = (int)$arr[1] - (int)$arr[2];
        }
        // Performing multiplication
        if($arr[0] == "*"){
            $res = (int)$arr[1] * (int)$arr[2];
        }
        // Performing power
        if($arr[0] == "**"){
            $res = (int)$arr[1] ** (int)$arr[2];
        }
        // Performing modulo
        if($arr[0] == "%"){
            $res = (int)$arr[1] % (int)$arr[2];
        }

        $message = $res;

        // returning the results
        return response()->json([
            "status" => "Success",
            "message" => $message]);
    }
}
?>
