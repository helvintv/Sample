<link href="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
<script src="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/js/bootstrap.min.js"></script>
<script src="//cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
<!------ Include the above in your HEAD tag ---------->

<div class="container">
 
  <hr>
  </div>
  <div class="form-bg" style="background-image: url(images/ji.jpg);">
    <div class="">
        <div class="row">
            <div class="col-md-offset-2 col-md-6">
                <form class="form-horizontal" action="" method="POST">
                    <div class="header">Registration</div>
                    <div class="form-content" style="background: #ffffff61;">
                    
                        <h4 class="heading">Your Details</h4>
                        <div class="form-group">
                            <div class="col-sm-6">
                                <label class="control-label" for="exampleInputName2"><i class="fa fa-user"></i></label>
                                <input class="form-control" id="name" name="name" placeholder="Your Name" type="text" required>
                            </div>
                            <div class="col-sm-6">
                                <label class="control-label" for="exampleInputName2"><i class="fa fa-user"></i></label>
                               <input class="form-control" id="number" name="number" placeholder="Contact Number" type="text" required>
                            </div>
                            <div class="col-sm-6">
                                <label class="control-label" for="exampleInputName2"><i class="fa fa-envelope-o"></i></label>
                                <input class="form-control" id="email" name="email" placeholder="Email" type="email" required>
                            </div>
                            <div class="form-group">
                            <div class="col-sm-6">
                                <label class="control-label" for="exampleInputName2"><i class="fa fa-lock"></i></label>
                                <input class="form-control" id="password" name="password" placeholder="Password" type="text" required>
                            </div>
                        </div>
                        </div>
                        <div class="clearfix"></div>
                        

                        <div class="form-group">
                            <div class="col-md-12" required>
                            
                                <label class="form-control" for="exampleInputName2"> Maternity Period 
                                <input id="checkbox1" name="checkbox1" placeholder="" value="1" type="checkbox" onclick="myFunction()">
                                </label><br>

                               
                                <label class="control-label" for="exampleInputName2"><i class="fa fa-user"></i></label>
                                <label for="delivery date">Expected Delivery date:</label>
  <input type="date" id="period" name="period">
  
         
                              
                               <script type="text/javascript">
                                    function myFunction() {
                                    var checkBox = document.getElementById("checkbox1");
                                    var text = document.getElementById("period");
                                    if (checkBox.checked == true){
                                        text.style.display = "block";
                                    } else {
                                        text.style.display = "none";
                                    }
                                    }
                                </script>
                               
        
                                <label class="form-control" for="exampleInputName2"> Parent of 0 to 3
                                <input id="checkbox2" name="checkbox2" placeholder="" value="1" type="checkbox" checked>
                                </label><br>

                                <label class="form-control" for="exampleInputName2"> Parent of 4 to 10
                                <input id="checkbox3" name="checkbox3" placeholder="" value="1" type="checkbox">
                                </label><br>
                                
                            </div>
                        </div>
                        
                
                       
                        <div class="form-group">
                            <div class="col-sm-12">
                                <label class="control-label" for="exampleInputName2"><i class="fa fa-calendar"></i></label>
                                <textarea class="form-control" id="address" name="address" placeholder="Address" required></textarea>
                            </div>
                        </div>
                        <div class="clearfix">
                           <input type="submit" name="submit" id="submit" value="Register">
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>
<style type="text/css">
  
:root{
    --color_0: #000;
    --color_1: #fff;
    --color_2: #2655c1;
    --color_3: #372f7f;
}

.form-bg{
    background: #e4e6e6;margin:0 auto;padding:50px;
}
form{
    font-family: 'Roboto', sans-serif;
}
.form-horizontal .header{
    background: linear-gradient(135deg,var(--color_2),var(--color_3),var(--color_2),var(--color_3));
    padding: 30px 25px;
    font-size: 30px;
    color: #fff;
    text-align: center;
    text-transform: uppercase;
    border-radius: 3px 3px 0 0;
}
.form-horizontal .heading{
    font-size: 16px;
    color: #2655c1;
    margin: 10px 0 20px 0;
    text-transform: capitalize;
}
.form-horizontal .form-content{
    padding: 25px;
    background: #fff;
}
.form-horizontal .form-control{
    padding: 12px 16px 12px 39px;
    height: 50px;
    font-size: 14px;
    color: #2b2a2a;
    border: none;
    border-bottom: 2px solid #ccc;
    border-radius: 0;
    box-shadow: none;
    margin-bottom: 15px;
}
.form-horizontal .form-control:focus{
    border-color: #2655c1;
    box-shadow: none;
}
.form-horizontal .control-label{
    font-size: 17px;
    color: #ccc;
    position: absolute;
    top: 5px;
    left: 27px;
    text-align: center;
}
.form-horizontal textarea.form-control{
    resize: vertical;
    height: 130px;
}
.form-horizontal .btn{
    font-size: 18px;
    color: #4e4e4e;
    float: right;
    margin: 10px 0;
    border: 2px solid #ccc;
    border-radius: 0;
    padding: 10px 25px;
    transition: all 0.5s ease 0s;
}
.btnmk{background: linear-gradient(135deg,var(--color_2),var(--color_3),var(--color_2),var(--color_3));color: var(--color_1) !important;box-shadow: 0 0.5rem 1rem rgba(0, 0, 0, 0.15);}
.form-horizontal .btn:hover{
    background: #fff;
    border-color: #2655c1;color:#000 !important;
}
.col-sm-6{float:left;}
.col-md-offset-2.col-md-6 {

    margin: 0 auto;

}


</style>



<?php
include("Connection.php");

if(isset($_POST['submit']))
{
  
  $name=$_POST['name'];
  $email=$_POST['email'];
  $number=$_POST['number'];
  $password=$_POST['password'];
  $address=$_POST['address'];
  $period=$_POST['period'];
  $checkbox1=$_POST['checkbox1'];  
  $checkbox2=$_POST['checkbox2'];
  $checkbox3=$_POST['checkbox3'];


  if(isset($checkbox1)){
    $c1=1;
  }
  if(isset($checkbox2)){
    $c2=1;
  }
  if(isset($checkbox3)){
    $c3=1;
  }
  

$sql="insert into register(name,email,password,phone,address,maternity,parenta,parentb,period)

values('$name','$email','$password','$number','$address','$c1','$c2','$c3','$period')";

  if(mysqli_query($link,$sql))
   {

     echo "<script>window.location.href='login.php'</script>";

   }
else
{
  echo "error".$sql."<br>".mysqli_error($link);
}

}
  
?>
