<!--
=========================================================
* Paper Dashboard 2 - v2.0.1
=========================================================

* Product Page: https://www.creative-tim.com/product/paper-dashboard-2
* Copyright 2020 Creative Tim (https://www.creative-tim.com)

Coded by www.creative-tim.com

 =========================================================

* The above copyright notice and this permission notice shall be included in all copies or substantial portions of the Software.
-->
<?php
include("Connection.php");
$row = 0;
session_start();
if(!isset($_SESSION['username']))
{
  echo "<script>window.location.href='404.php'</script>";
}
else
{
  include("Connection.php");
  $email = $_SESSION['username'];
  $sql = "select * from admin where username='$email'";
  $result = mysqli_query($link,$sql);
  $row = mysqli_fetch_assoc($result);
  // $id=$row['id'];
  //  echo $id;
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
          <li class="active ">
            <a href="./Admindashboard.php">
              <i class="nc-icon nc-bank"></i>
              <p>Dashboard</p>
            </a>
          </li>
           <li>
		     
            <a href="Add_maternity_products.php">
              <i class="nc-icon nc-diamond"></i>
              <p>Maternity Wear</p>
            </a>
			<a href="Add_kids_products.php">
              <i class="nc-icon nc-diamond"></i>
              <p>Kids Wear</p>
            </a>
			<a href="Add_toys_products.php">
              <i class="nc-icon nc-diamond"></i>
              <p>Baby Toys</p>
            </a>
          </li>
          <li>
            <a href="View_orders.php">
              <i class="nc-icon nc-pin-3"></i>
              <p>View Orders</p>
            </a>
          </li>
          <li>
            <a href="Add_Doctors.php">
              <i class="nc-icon nc-pin-3"></i>
              <p>Add Doctors</p>
            </a>
          </li>
          <li>
            <a href="View_doctors.php">
              <i class="nc-icon nc-single-02"></i>
              <p>View Doctors</p>
            </a>
          </li>
         
          <li>
            <a href="Add_eventmanagement.php">
              <i class="nc-icon nc-caps-small"></i>
              <p>Event Management</p>
            </a>
          </li>
          <li>
            <a href="Add_dietcharts.php">
              <i class="nc-icon nc-caps-small"></i>
              <p>Diet Charts</p>
            </a>
          </li>
          <li>
            <a href="Add_foodcharts.php">
              <i class="nc-icon nc-caps-small"></i>
              <p>Food Charts</p>
            </a>
          </li>
          <li>
            <a href="View_feedback.php">
              <i class="nc-icon nc-caps-small"></i>
              <p>Q & A Section</p>
            </a>
          </li>
          <li>
           <li>
            <a href="index.php">
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
            <!-- <a class="navbar-brand" href="javascript:;">Paper Dashboard 2</a> -->
          </div>
          <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navigation" aria-controls="navigation-index" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-bar navbar-kebab"></span>
            <span class="navbar-toggler-bar navbar-kebab"></span>
            <span class="navbar-toggler-bar navbar-kebab"></span>
          </button>
          <div class="collapse navbar-collapse justify-content-end" id="navigation">
            <!-- <form>
              <div class="input-group no-border">
                <input type="text" value="" class="form-control" placeholder="Search...">
                <div class="input-group-append">
                  <div class="input-group-text">
                    <i class="nc-icon nc-zoom-split"></i>
                  </div>
                </div>
              </div>
            </form> -->
           <!--  <ul class="navbar-nav">
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
            </ul> -->
          </div>
        </div>
      </nav>
      <!-- End Navbar -->
      <div class="content">
        <div class="row">
          <div class="col-md-4">
            
           <!--  <div class="card">
              <div class="card-header">
                <h4 class="card-title">Team Members</h4>
              </div>
              <div class="card-body">
                <ul class="list-unstyled team-members">
                  <li>
                    <div class="row">
                      <div class="col-md-2 col-2">
                        <div class="avatar">
                          <img src="../assets/img/faces/ayo-ogunseinde-2.jpg" alt="Circle Image" class="img-circle img-no-padding img-responsive">
                        </div>
                      </div>
                      <div class="col-md-7 col-7">
                        DJ Khaled
                        <br />
                        <span class="text-muted"><small>Offline</small></span>
                      </div>
                      <div class="col-md-3 col-3 text-right">
                        <btn class="btn btn-sm btn-outline-success btn-round btn-icon"><i class="fa fa-envelope"></i></btn>
                      </div>
                    </div>
                  </li> -->
                  <!-- <li>
                    <div class="row">
                      <div class="col-md-2 col-2">
                        <div class="avatar">
                          <img src="../assets/img/faces/joe-gardner-2.jpg" alt="Circle Image" class="img-circle img-no-padding img-responsive">
                        </div>
                      </div>
                      <div class="col-md-7 col-7">
                        Creative Tim
                        <br />
                        <span class="text-success"><small>Available</small></span>
                      </div>
                      <div class="col-md-3 col-3 text-right">
                        <btn class="btn btn-sm btn-outline-success btn-round btn-icon"><i class="fa fa-envelope"></i></btn>
                      </div>
                    </div>
                  </li>
                  <li>
                    <div class="row">
                      <div class="col-md-2 col-2">
                        <div class="avatar">
                          <img src="../assets/img/faces/clem-onojeghuo-2.jpg" alt="Circle Image" class="img-circle img-no-padding img-responsive">
                        </div>
                      </div>
                      <div class="col-ms-7 col-7">
                        Flume
                        <br />
                        <span class="text-danger"><small>Busy</small></span>
                      </div>
                      <div class="col-md-3 col-3 text-right">
                        <btn class="btn btn-sm btn-outline-success btn-round btn-icon"><i class="fa fa-envelope"></i></btn>
                      </div>
                    </div>
                  </li>
                </ul> -->
              </div>
            </div>
          </div>
          <div class="col-md-8">
            <div class="card card-user">
              <div class="card-header">
                <h5 class="card-title">Add Maternity Products</h5>
              </div>
              <div class="card-body">
                <form action="" method="POST" enctype="multipart/form-data">
                  <div class="row">
                    <!-- 
                      <div class="form-group">
                        <label>Company (disabled)</label>
                        <input type="text" class="form-control" disabled="" placeholder="Company" value="Creative Code Inc.">
                      </div>
                    </div> -->
                    <div class="col-md-5 pr-1">
                      <div class="form-group">
                        <label>Product Code</label>
                        <input type="text" class="form-control" id="code" name="code" placeholder="Product Code" >
                      </div>
                    </div>
                    <div class="col-md-4 pl-1">
                      <div class="form-group">
                        <label for="exampleInputEmail1">Product Name</label>
                        <input type="text" class="form-control" id="name" name="name" placeholder="Product Name">
                      </div>
                    </div>
                  </div>
                  <div class="row">
                    <div class="col-md-6 pr-1">
                      <div class="form-group">
                        <label>Product Description</label>
                        <input type="text" class="form-control" id="description" name="description" placeholder="Product Description" >
                      </div>
                    </div>
                    
                  </div>
                  <div class="row">
                    <div class="col-md-12">
                      <div class="form-group">
                        <label>Product Quantity</label>
                        <input type="text" class="form-control" id="qty" name="qty" placeholder="Product Quantity">
                      </div>
                    </div>


                  </div>
                   <div class="row">
                    <div class="col-md-12">
                      <div class="form-group">
                        <label>Product Price</label>
                        <input type="text" class="form-control" id="price" name="price" placeholder="Product Price" >
                      </div>
                       <div class="row">
                    <div class="col-md-12">
                      <div class="form-group">
                        <label>Total Stock</label>
                        <input type="text" class="form-control" id="stock" name="stock" placeholder="Stock" >
                      </div>
                  <div>
                   <label for="iname">Image</label>
                 <input type="file" name="img" id="img">
               </div>
                        </div>
                      
                    </div>
                    </div>
                  </div>
                  <div class="row">
                    <div class="update ml-auto mr-auto">
                      <button type="submit" class="btn btn-primary btn-round" id="submit" name="submit">Add Products</button>
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
  
  $name=$_POST['name'];
  $code=$_POST['code'];
  $quantity=$_POST['qty'];
  $description=$_POST['description'];
  $stock=$_POST['stock'];
   $price=$_POST['price'];



    $pic=$_FILES["img"]["name"];
    $tmp=$_FILES["img"]["tmp_name"];
    $type=$_FILES["img"]["type"];
   
      
    $path="User_images/".$pic;
    $icon="warning";
    $class="danger";
 


  
  $sql="insert into maternityproducts(product_code,product_name,product_description,product_quantity,product_price,product_image,product_stock)

 values('$code','$name','$description','$quantity','$price','$pic','$stock')";


  if(mysqli_query($link,$sql))
   {

    move_uploaded_file($tmp,$path);

    echo"<script>alert('Product Added')</script>";

   }
else
{
  echo "error".$sql."<br>".mysqli_error($link,$sql);
}

}
  
?>