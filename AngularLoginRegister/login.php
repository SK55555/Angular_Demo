<?php
require 'connect.php';

  $token = uniqid();


  $headers = apache_request_headers();
  //print_r($headers);


 $postdata = file_get_contents("php://input");

if(isset($postdata) && !empty($postdata))
{
  $request = json_decode($postdata);

  // print_r($request);
  
  // Sanitize.
   $username = $request->username;
   $password = $request->password;
  
$query = "SELECT * FROM register WHERE username='$username' AND password='$password'";
    $results = mysqli_query($con, $query);


 // print_r($query);

 if (mysqli_num_rows($results) == 1) {
       echo json_encode(
            array(
                "message" => "Successful login.",
                "token" => $token,
                "email" => $username
            ));
         // http_response_code(200);
    }else {
            // http_response_code(401);
        echo json_encode(array("message" => "Login failed."));

    }


  // if($username=='sagar' && $password=='12345'){

  //  echo json_encode(
  //           array(
  //               "message" => "Successful login.",
  //               "token" => 'Bearer-jsdfnkj223',
  //               "email" => $username
  //           ));
  //        // http_response_code(200);
  //   }
  //   else{

  //      // http_response_code(401);
  //       echo json_encode(array("message" => "Login failed."));
  //   }
  

}