<?php
require 'connect.php';

 $postdata = file_get_contents('php://input');

if(isset($postdata) && !empty($postdata))
{
  $request = json_decode($postdata);

  //print_r($request);
  
  // Sanitize.
  $username = mysqli_real_escape_string($con, trim($request->username));
  $password = mysqli_real_escape_string($con, trim($request->password));
  $firstname = mysqli_real_escape_string($con, trim($request->firstName));
  $lastname = mysqli_real_escape_string($con, trim($request->lastName));
  $age = mysqli_real_escape_string($con, trim($request->age));
  // $salary = mysqli_real_escape_string($con, trim($request->salary));
  

  // Store.
  $sql = "INSERT INTO `register`(
     `username`,
     `password`,
     `first_name`,
     `last_name`,
     `age`
    
 ) VALUES
  ('{$username}',
  '{$password}',
  '{$firstname}',
  '{$lastname}',
  '{$age}'

  )";

  if(mysqli_query($con,$sql))
  {

     echo json_encode(
            array(
                "message" => "Successful login."
               
            ));

    http_response_code(201);
  }
  else
  {
    http_response_code(422);
  }
}