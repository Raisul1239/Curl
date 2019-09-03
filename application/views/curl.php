<?php // function callAPI(){
   $curl = curl_init();

   

   // OPTIONS:
   curl_setopt($curl,CURLOPT_URL,"https://openlibrary.org/api/books?bibkeys=ISBN:9780415304450&jscmd=details&format=json");
   curl_setopt($curl, CURLOPT_RETURNTRANSFER, 1);
   curl_setopt($curl, CURLOPT_HTTPAUTH, CURLAUTH_BASIC);

   // EXECUTE:
   $result = file_get_contents('https://openlibrary.org/api/books?bibkeys=ISBN:9780415304450&jscmd=details&format=json');
   
  
   $res = json_decode($result, true);
  
//   print_r($res);
  echo   $res["ISBN:9780415304450"]["details"]["series"][0];





//$curl = curl_init();
//
//curl_setopt_array($curl, array(
//  CURLOPT_URL => "https://openlibrary.org/api/books?bibkeys=ISBN:9780415304450&jscmd=details&callback=mycallback",
//  CURLOPT_RETURNTRANSFER => true,
//  CURLOPT_TIMEOUT => 30,
//  CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
//  CURLOPT_CUSTOMREQUEST => "GET",
//  
//));
//
//$response = curl_exec($curl);
//
//$response = json_decode($response, true);
// echo $response;
//   

