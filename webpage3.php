<?php
//make sure dad puts it on the cloud and make 2 pages. when go to 3page say "hello,name,welcome

//echo "Hello Olutob's world";
 //remember wschools
//change what it says "please sign in"
//
$pool = "please, sign in";
$num = 19;
$name = 'Olutobs';
 //making a server
$email = "olaoguns@gmail.com";
$password = "wearetheolaoguns";

  $username1 = $_POST['email'] ; //we have captured the input variables
  $password1 = $_POST['password'];


  //now,let us do something when someoen submites the form ao click the submit button
  
//use if function
//use isset() function
// we will use "if" to check the button has been clicked



if (isset($_POST['email'])) {
    
   $name = "olutobi";
$name2 = "wale";
$name3 = "jibike";
$name4 = "eni";
$name5 = "oladele"; 
$name_input = $_POST['name_input'];

  if ($name_input == $name || $name_input == $name2 || $name_input == $name3 || $name_input == $name4 || $name_input == $name5) {


    header("location:webpage3.php");
  } 
    else {

    echo "<div class='alert alert-danger' role='alert'>
  Please check your name 
</div>";
  }            

}             


?>




<!DOCTYPE html>
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>mywebpage</title>
    
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.2.1/css/bootstrap.min.css" integrity="sha384-GJzZqFGwb1QTTN6wy59ffF1BuGJpLSa9DkKMp0DgiMDm4iYMj70gZWKYbI706tWS" crossorigin="anonymous">
    
    <link href="https://fonts.googleapis.com/css?family=Dancing+Script:700" rel="stylesheet">
    <style>
        body {
         font-family: 'Dancing Script', cursive;     
            
        }
        
        
    .email{
            
     background-color: cadetblue;
     width:auto;
 
     margin-top:60px;
    padding: 30px;
    
            
        }
    
          
    </style>
    
</head>
<body>
<div class="container">
<h1>Thank you, now sign in into this last page.</h1>

   <div class="email">
 <form method="post" action="webpage.html">
  <div class="form-group row">
    <label for="" class="col-sm-2 col-form-label">Email</label>
    <div class="col-sm-10">
      <input type="email"  class="form-control" id="email" placeholder="Email@email.com" name="email">
    </div>
  </div>
  <div class="form-group row">
    <label for="inputPassword" class="col-sm-2 col-form-label">Password</label>
    <div class="col-sm-10">
      <input type="password" class="form-control" id="inputPassword" placeholder="Password" name="password">
    </div>
  </div>
  
  
  <button type="submit" name="submit" class="btn btn-secondary">Take to last page</button>
  
  
</form>  

  </body>