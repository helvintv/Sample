<link href="//maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
<script src="//maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"></script>
<script src="//cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
<!------ Include the above in your HEAD tag ---------->

<!--author:starttemplate-->
<!--reference site : starttemplate.com-->
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="keywords"
          content="unique login form,leamug login form,boostrap login form,responsive login form,free css html login form,download login form">
    <meta name="author" content="leamug">
    <title>Unique Login Form | Bootstrap Templates</title>
    <link href="css/style.css" rel="stylesheet" id="style">
    <!-- Bootstrap core Library -->
    <link href="//netdna.bootstrapcdn.com/bootstrap/3.2.0/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
    <script src="//netdna.bootstrapcdn.com/bootstrap/3.2.0/js/bootstrap.min.js"></script>
    <script src="//code.jquery.com/jquery-1.11.1.min.js"></script>
    <!-- Google font -->
    <link href="https://fonts.googleapis.com/css?family=Dancing+Script" rel="stylesheet">
    <!-- Font Awesome-->
    <link href="//maxcdn.bootstrapcdn.com/font-awesome/4.2.0/css/font-awesome.min.css" rel="stylesheet">
</head>
<body>

<!-- Page Content -->
<div class="container">
<form action="" method="post">
    <div class="row">
        <div class="col-md-offset-5 col-md-4 text-center" style="margin-left: -12.333333%;">
            <h1 class='text-white'>Unique Login Form</h1>
              
              <div class="form-login" style=" width: 452px; height: 300px;"></br>
                <h4>Secure Login</h4>
                </br>

                <input type="text" id="username" name="username" class="form-control input-sm chat-input" placeholder="username"/>
                </br></br>
                <input type="password" id="password"  name="password" class="form-control input-sm chat-input" placeholder="password"/>
                </br></br>
                <div class="wrapper">
                        <span class="group-btn">
                           <input type="submit"  class="btn btn-danger btn-md" id="login" name="login">
                        </span>
                </div>
            </div>
        </div>
    </div>
    </br></br></br>
    <!--footer-->
    <div class="footer text-white text-center">
        
    </div>
    <!--//footer-->
</form>
</div>
<style type="text/css">
    /*author:starttemplate*/
/*reference site : starttemplate.com*/
body {
  background-image:url('images/r.jpg');
  background-position:center;
  background-size:cover;
  font: normal 14px Roboto,arial,sans-serif;
  font-family: 'Dancing Script', cursive!important;
}

.container {
    padding: 110px;
}
::placeholder { /* Chrome, Firefox, Opera, Safari 10.1+ */
    color: #ffffff!important;
    opacity: 1; /* Firefox */
    font-size:18px!important;
}
.form-login {
    background-color: rgba(0,0,0,0.55);
    padding-top: 10px;
    padding-bottom: 20px;
    padding-left: 20px;
    padding-right: 20px;
    border-radius: 15px;
    border-color:#d2d2d2;
    border-width: 5px;
    color:white;
    box-shadow:0 1px 0 #cfcfcf;
}
.form-control{
    background:transparent!important;
    color:white!important;
    font-size: 18px!important;
}
h1{
    color:white!important;
}
h4 { 
 border:0 solid #fff; 
 border-bottom-width:1px;
 padding-bottom:10px;
 text-align: center;
}

.form-control {
    border-radius: 10px;
}
.text-white{
    color: white!important;
}
.wrapper {
    text-align: center;
}
.footer p{
    font-size: 18px;
}
</style>
</body>
</html>



<?php 
  include("Connection.php");
  if(isset($_POST["login"]))
  {
      $email=$_POST["username"];
      $pass=$_POST["password"];

      $sql1=mysqli_query($link,"select * from admin where username='$email' and password='$pass'");

      $sql=mysqli_query($link,"select * from register where email='$email' and password='$pass'");
      if(mysqli_num_rows($sql))
      {
        $today = Date("Y-m-d");
        $updatesql=mysqli_query($link,"update register set logindate= '$today' where email='$email' and password='$pass'");
          while($row=mysqli_fetch_array($sql))
          {   
              $name=$row["name"];
              $id=$row["id"];
             // $category=$row["category"];
              session_start();
              $_SESSION["name"]=$name;
              $_SESSION["id"]=$id;
              $_SESSION["email"]=$email;
              
        

          if(!empty($row["maternity"]))
          {
            echo"<script>alert('Login Successfull')</script>";
            echo "<script>window.location.href='dashboard.php'</script>"; 
          }elseif(!empty($row["parenta"]))
          {
              echo"<script>alert('Login Successfull')</script>";
              echo "<script>window.location.href='dashboard1.php'</script>"; 
          }elseif(!empty($row["parentb"]))
             {
                echo"<script>alert('Login Successfull')</script>";
                echo "<script>window.location.href='dashboard2.php'</script>"; 
             }
          }
           // echo"<script>alert('Login Successfull')</script>";
           // echo "<script>window.location.href='dashboard2.php'</script>";
         
       }elseif(mysqli_num_rows($sql1)){

            while($row=mysqli_fetch_array($sql1))
            {   
               // $name=$row["name"];
                $id=$row["id"];
                session_start();
               // $_SESSION["name"]=$name;
                $_SESSION["id"]=$id;
                $_SESSION["username"]=$email;
                
            }
            echo"<script>alert('Login Successfull')</script>";
            echo "<script>window.location.href='Admindashboard.php'</script>";

       }else{
           $error="";
          echo '<script>alert("plz enter valid password");</script>';
  
  
       }
  
    }
  



?>