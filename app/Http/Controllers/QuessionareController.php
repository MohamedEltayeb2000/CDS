<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class QuessionareController extends Controller
{
   function showquessionare(){
       return view("quessionare.quessionare");
   }
   function quessionareresult(Request $request){
    $count=0;
     $question_1=$request->input("question_1");
     $question_2=$request->input("question_2");
     $question_3=$request->input("question_3");
     $question_4=$request->input("question_4");
     $question_5=$request->input("question_5");
     $question_6=$request->input("question_6");
     $question_7=$request->input("question_7");
     $question_8=$request->input("question_8");

       if($question_1){
          foreach($question_1  as $value){
             if($value=="China" ||$value=="South Korea"||$value=="Iran"||$value=="Europe"||$value=="US States")
              {
                $count++;
               // echo "count quesion 1  ",$count,"<br>";
             }
         }
       }
       if($question_4){
        foreach($question_4  as $value){
            if($value=="Shortness of breath or breathing very fast"||$value=="Shortness of breath & Intense chest pain"||$value=="Cannot complete a long sentence in one breath"){
               $count++;
              // echo "count quesion 4   ",$count,"<br>";
            }

        }  
    }
    if($question_2=="Yes"){
        $count++;
        //echo "count quesion 2 ",$count,"<br>";
    }
    if($question_3=="Yes"){
        $count++;
       // echo "count quesion 3 ",$count,"<br>";
    }
    if($question_5=="Yes"){
        $count++;
       // echo "count quesion 5 ",$count,"<br>";
    }
    if($question_6=="Yes"){
        $count++;
       // echo "count quesion 6 ",$count,"<br>";
    }
    if($question_7=="Yes"){
        $count++;
        //echo "count quesion 7 ",$count,"<br>";
    }
    if($question_8=="Yes"){
        $count++;
       // echo "count quesion 8 ",$count,"<br>";
    }

     

    //    foreach($request->all() as $key=>$value){
    //        echo $key;
    //     if($key=="question_1" ||$key=="question_4"){
    //      foreach($key as $value2){
    //          if($value2=="China" ||$value2=="South Korea"||$value2=="Iran"||$value2=="Europe"||$value2=="US States" ||$value2=="Shortness of breath or breathing very fast"||$value2=="Shortness of breath & Intense chest pain"||$value2=="Cannot complete a long sentence in one breath"){
    //             $count++;
    //             echo "count  ",$count;
    //          }
    //      }
    //     }else{
    //         if($value=="Yes"){
    //             $count++;
    //             echo "count  ",$count;
    //         }   
    //      }

    //    }
    $result= ($count/14)*100; 
   // echo "result  ",$result;
    
    return view("quessionare.quessionareresultview",["result"=> $result]);
   }
}
