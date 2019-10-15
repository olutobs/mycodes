<?php

session_start()
$_SESSION['names'] = $name_input;

//make sure dad puts it on the cloud and make 2 pages. when go 
//echo "Hello Olutob's world";
 //remember wschools
//change what it says "please sign in"
//
$pool = "please, sign";
$num = 19;
$name = 'Olutobs';
 //making a server
$username = "Olutobs";
$password = "oluwat";
$name = "olutobi";
$name2 = "wale";
$name3 = "jibike";
$name4 = "eni";
$name5 = "oladele";
$username1 = $_POST['email']; //we have captured the input variables
$password1 = $_POST['password'];

$name_input = $_POST['name_input'];
  //now,let us do something when someoen submites the form ao click the submit button
  
//use if function
//use isset() function
// we will use "if" to check the button has been clicke

if (isset($_POST['submit'])) 
    
    $name_input = $_POST["email"];
    $password1  =$_POST["password"];

  
        
      if ($name_input == $name || $name_input == $name2 || $name_input == $name3 || $name_input == $name4 || $name_input == $name5) 
          
          $_SESSION['olu']

    header("location:sols.html");
  } else {

    echo '<div class="alert alert-danger" role="alert">
  This is a danger alert—check it out!
</div>';
  }            

}             

?>


<!DOCTYPE html>

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>mywebpage</title>

    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.2.1/css/bootstrap.min.css"
        integrity="sha384-GJzZqFGwb1QTTN6wy59ffF1BuGJpLSa9DkKMp0DgiMDm4iYMj70gZWKYbI706tWS" crossorigin="anonymous">

    <link href="https://fonts.googleapis.com/css?family=Dancing+Script:700" rel="stylesheet">
    <style>
    body {
        font-family: 'Dancing Script', cursive;

    }


    .email {

        background-color: cadetblue;
        width: auto;
        height: ;
        margin-top: 20px;
        padding: 30px;


    }







    }
    </style>

</head>

<body>
    <div class="container">
        <h1>Please sign in below</h1>

        <div class="email">
            <form method="post" action="webpage2.php">


                <div class="form-group row">
                    <label for="" class="col-sm-2col-form-label">Title</label>

                    <div class="col-sm-10">



                        <select name="Title" class=form-group />
                        <option name="title" value="Select" class="form-control"> Select

                        <option name="title" value="Mr" class="form-control"> Mr

                        </option>

                        <option name="title" value="Mrs" class="form-control">
                            Mrs
                        </option>

                        <option name="title" value="Miss" class="form-control">
                            Miss


                        </option>



                        </select>


                    </div>
                </div>

                <div class="form-group row">
                    <label for="inputname" class="col-sm-2 col-form-label"> Name</label>
                    <div class="col-sm-10">
                        <input type="Name" class="form-control" id="inputname" placeholder="Please enter your name"
                            name="name_input">
                    </div>
                </div>



                <a href="sols.html" class="btn btn-secondary btn-lg " role="button" id="submit" aria-disabled="true"
                    name="submit"> Take to naxt page</a>





            </form>

        </div>




</body>