<?php
include("Connection.php");
$row = 0;
session_start();
if(!isset($_SESSION['email']))
{
  echo "<script>window.location.href='404.php'</script>";
}
else
{
  include("Connection.php");
  $email = $_SESSION['email'];
  $sql = "select * from register where email='$email'";
  $result = mysqli_query($link,$sql);
  $row = mysqli_fetch_assoc($result);
  $id=$row['id'];
  $username=$row['name'];
   echo $id;
} 
?>

<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8" />
  <link rel="apple-touch-icon" sizes="76x76" href="paper/assets/img/apple-icon.png">
  <link rel="icon" type="image/png" href="paper/assets/img/favicon.png">
  <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1" />
  <title>
    Paper Dashboard 2 by Creative Tim
  </title>
  <meta content='width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0, shrink-to-fit=no' name='viewport' />
  <!--     Fonts and icons     -->
  <link href="https://fonts.googleapis.com/css?family=Montserrat:400,700,200" rel="stylesheet" />
  <link href="https://maxcdn.bootstrapcdn.com/font-awesome/latest/css/font-awesome.min.css" rel="stylesheet">
  <!-- CSS Files -->
  <link href="paper/assets/css/bootstrap.min.css" rel="stylesheet" />
  <link href="paper/assets/css/paper-dashboard.css?v=2.0.1" rel="stylesheet" />
  <!-- CSS Just for demo purpose, don't include it in your project -->
  <link href="paper/assets/demo/demo.css" rel="stylesheet" />
</head>

<body class="">
  <div class="wrapper ">
    <div class="sidebar" data-color="white" data-active-color="danger">
      <div class="logo">
        <a href="https://www.creative-tim.com" class="simple-text logo-mini">
          <div class="logo-image-small">
            <img src="paper/assets/img/logo-small.png">
          </div>
          <!-- <p>CT</p> -->
        </a>
        <a href="" class="simple-text logo-normal">
          Creative Tim
          <!-- <div class="logo-image-big">
            <img src="../assets/img/logo-big.png">
          </div> -->
        </a>
      </div>
      <div class="sidebar-wrapper">
       <ul class="nav">
           <!--         <li class="active ">
            <a href="./dashboard.php">
              <i class="nc-icon nc-bank"></i>
              <p>Dashboard</p>
            </a>
          </li>
          -->
          <li>
            <a href="View_Products.php">
              <i class="nc-icon nc-diamond"></i>
              <p>Shopping</p>
            </a>
          </li>
           <li>
            <a href="User_cart.php">
              <i class="nc-icon nc-pin-3"></i>
              <p>View Your Cart</p>
            </a>
          </li>
           <li>
            <a href="User_order.php">
              <i class="nc-icon nc-pin-3"></i>
              <p>View Your Orders</p>
            </a>
          </li>
         
          <li>
            <a href="./user.php">
              <i class="nc-icon nc-single-02"></i>
              <p>User Profile</p>
            </a>
          </li>
          
          <li>
            <a href="Event_management.php">
              <i class="nc-icon nc-caps-small"></i>
              <p>Event Management</p>
            </a>
          </li>
          <li>
            <a href="Diet_charts.php">
              <i class="nc-icon nc-caps-small"></i>
              <p>Diet Charts</p>
            </a>
          </li>
          <li>
            <a href="Food_charts.php">
              <i class="nc-icon nc-caps-small"></i>
              <p>Food Charts</p>
            </a>
          </li>
          <li>
            <a href="feedback.php">
              <i class="nc-icon nc-caps-small"></i>
              <p>Q & A Section</p>
            </a>
          </li>
          <li>
            <a href="user-feedback.php">
              <i class="nc-icon nc-caps-small"></i>
              <p>View Feedback</p>
            </a>
          </li>
          <li>
            <a href="./index.php">
              <i class="nc-icon nc-caps-small"></i>
              <p>Logout</p>
            </a>
          </li>
           </ul>
      </div>
    </div>
    <div class="main-panel">
      <!-- Navbar -->
      <nav class="navbar navbar-expand-lg navbar-absolute fixed-top navbar-transparent">
        <div class="container-fluid">
          <div class="navbar-wrapper">
            <div class="navbar-toggle">
              <button type="button" class="navbar-toggler">
                <span class="navbar-toggler-bar bar1"></span>
                <span class="navbar-toggler-bar bar2"></span>
                <span class="navbar-toggler-bar bar3"></span>
              </button>
            </div>
            <a class="navbar-brand" href="javascript:;">Paper Dashboard </a>
          </div>
          <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navigation" aria-controls="navigation-index" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-bar navbar-kebab"></span>
            <span class="navbar-toggler-bar navbar-kebab"></span>
            <span class="navbar-toggler-bar navbar-kebab"></span>
          </button>
          <div class="collapse navbar-collapse justify-content-end" id="navigation">
            <form>
              <div class="input-group no-border">
                <input type="text" value="" class="form-control" placeholder="Search...">
                <div class="input-group-append">
                  <div class="input-group-text">
                    <i class="nc-icon nc-zoom-split"></i>
                  </div>
                </div>
              </div>
            </form>
            <ul class="navbar-nav">
              <li class="nav-item">
                <a class="nav-link btn-magnify" href="javascript:;">
                  <i class="nc-icon nc-layout-11"></i>
                  <p>
                    <span class="d-lg-none d-md-block">Stats</span>
                  </p>
                </a>
              </li>
              <li class="nav-item btn-rotate dropdown">
                <a class="nav-link dropdown-toggle" href="http://example.com" id="navbarDropdownMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                  <i class="nc-icon nc-bell-55"></i>
                  <p>
                    <span class="d-lg-none d-md-block">Some Actions</span>
                  </p>
                </a>
                <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdownMenuLink">
                  <a class="dropdown-item" href="#">Action</a>
                  <a class="dropdown-item" href="#">Another action</a>
                  <a class="dropdown-item" href="#">Something else here</a>
                </div>
              </li>
              <li class="nav-item">
                <a class="nav-link btn-rotate" href="javascript:;">
                  <i class="nc-icon nc-settings-gear-65"></i>
                  <p>
                    <span class="d-lg-none d-md-block">Account</span>
                  </p>
                </a>
              </li>
              <li class="nav-item btn-rotate dropdown">
                <a class="nav-link dropdown-toggle" href="dashboard.php" id="navbarDropdownMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                  <i class="nc-single-02"></i>
                  <p>
                    <span class="d-lg-none d-md-block">Some Actions</span>
                  </p>
                </a>

                <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdownMenuLink">
                  <a class="dropdown-item" id="maternity" href="dashboard.php">maternity</a>
                  <a class="dropdown-item" id="parentaa" href="dashboard1.php">parent of 1 to 3</a>
                  <a class="dropdown-item" id="parentbb" href="dashboard2.php">parent of 4 to 10</a>
                </div>

          <?php
          if(empty($row['maternity']))
          {
          ?>
                <script type="text/javascript">
                  document.getElementById("maternity").style.display='none';
                </script>

          <?php
           }
           ?>


          <?php
          if(empty($row['parenta']))
          {
            ?>
                <script type="text/javascript">
                  document.getElementById("parentaa").style.display='none';
                </script>
          <?php
          }
          ?>

          <?php
          if(empty($row['parentb']))
          {
            ?>
                <script type="text/javascript">
                  document.getElementById("parentbb").style.display='none';
                </script>
          <?php
          }
          ?>               
              </li>

            </ul>
          </div>
        </div>
      </nav>
      <!-- End Navbar -->
      <div class="content">
        <div class="row">
          <div class="col-md-4">
      
              </div>
            </div>
          </div>


          
          <div class="col-md-8">
            <div class="card card-user">
              <div class="card-header">
                <h5 class="card-title">Send feedback</h5>
              </div>
              <div class="card-body">
                <form action="" method="POST" enctype="multipart/form-data">
                  <div class="row">
                  
                    <div class="col-md-5 pr-1">
                      <div class="form-group">
                        <label>Username</label>
                        <input type="text" class="form-control" id="name" name="name" placeholder="Username" value="<?php echo $row['name'];?>">
                      </div>
                    </div>
                    <div class="col-md-6 pl-1">
                      <div class="form-group">
                        <label for="exampleInputEmail1">Email</label>
                        <input type="email" class="form-control" id="email" name="email" placeholder="Email" value="<?php echo $row['email'];?>">
                      </div>
                    </div>
                  </div>
				   <div class="row">
                  
                    <div class="col-md-5 pr-1">
                      <div class="form-group">
                        <label>Product Name</label>
                        <input type="text" class="form-control" id="product" name="product" placeholder="Product Name">
                      </div>
                    </div>
                    <div class="col-md-6 pl-1">
                      <div class="form-group">
                        <label for="exampleInputEmail1">Product Id</label>
                        <input type="text" class="form-control" id="proid" name="proid" placeholder="Id">
                      </div>
                    </div>
                  </div>
                     
                   <div class="row">
                    <div class="col-md-12">
                    <div class="form-group">
                        <label for="exampleInputEmail1">Message</label>
                        <textarea class="form-control" id="message" name="message" placeholder="Message"></textarea>
                      </div>
                    </div>
                  </div>
                      
                  <div class="row">
                    <div class="update ml-auto mr-auto">
                      <button type="submit" class="btn btn-primary btn-round" id="submit" name="submit">Send</button>
                    </div>
                  </div>
                </form>
              </div>
            </div>
          </div>

        </div>
      </div>
      <footer class="footer footer-black  footer-white ">
        <div class="container-fluid">
          <div class="row">
            <nav class="footer-nav">
              <ul>
                <li><a href="https://www.creative-tim.com" target="_blank">Creative Tim</a></li>
                <li><a href="https://www.creative-tim.com/blog" target="_blank">Blog</a></li>
                <li><a href="https://www.creative-tim.com/license" target="_blank">Licenses</a></li>
              </ul>
            </nav>
            <div class="credits ml-auto">
              <span class="copyright">
                © <script>
                  document.write(new Date().getFullYear())
                </script>, made with <i class="fa fa-heart heart"></i> by Creative Tim
              </span>
            </div>
          </div>
        </div>
      </footer>
    </div>
  </div>
  <!--   Core JS Files   -->
  <script src="paper/assets/js/core/jquery.min.js"></script>
  <script src="paper/assets/js/core/popper.min.js"></script>
  <script src="paper/assets/js/core/bootstrap.min.js"></script>
  <script src="paper/assets/js/plugins/perfect-scrollbar.jquery.min.js"></script>
  <!--  Google Maps Plugin    -->
  <script src="https://maps.googleapis.com/maps/api/js?key=YOUR_KEY_HERE"></script>
  <!-- Chart JS -->
  <script src="paper/assets/js/plugins/chartjs.min.js"></script>
  <!--  Notifications Plugin    -->
  <script src="paper/assets/js/plugins/bootstrap-notify.js"></script>
  <!-- Control Center for Now Ui Dashboard: parallax effects, scripts for the example pages etc -->
  <script src="paper/assets/js/paper-dashboard.min.js?v=2.0.1" type="text/javascript"></script><!-- Paper Dashboard DEMO methods, don't include it in your project! -->
  <script src="paper/assets/demo/demo.js"></script>
</body>

</html>

<?php
include("Connection.php");

if(isset($_POST['submit']))
{  
  $username=$_POST['name'];
  $email=$_POST['email'];
  $product=$_POST['product'];
  $proid=$_POST['proid'];
  $message=$_POST['message'];
  

  $sql="insert into feedbackproduct(username,email,product,proid,message,reply)
 values('$username','$email','$product','$proid','$message','')";
  if(mysqli_query($link,$sql))
   {
    echo"<script>alert('Feedback Sent')</script>";
   }
else
{
  echo "error".$sql."<br>".mysqli_error($link);
}

}
  
?>