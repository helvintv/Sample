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
            <a href="Add_products.php">
              <i class="nc-icon nc-diamond"></i>
              <p>Add Products</p>
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
         
<div class="content">
        <div class="row">
          <div class="col-md-4">
            
           <div class="card">
              <div class="card-header">
                <center><h4 class="card-title">Doctor</h4></center>
              </div>
              <a href="View_feedbackdoc.php"><div class="card-body">
                <ul class="list-unstyled team-members">
				<center><h6>Reply to Feedback</h6></center>
                  <center><img src="images/doctor.png"></center>
                </ul>
              </div></a>
            </div>
          </div>
		  <div class="col-md-4">
            
           <div class="card">
              <div class="card-header">
                <center><h4 class="card-title">Product</h4></center>
              </div>
              <a href="View_feedbackpro.php"><div class="card-body">
                <ul class="list-unstyled team-members">
				<center><h6>Reply to Feedback</h6></center>
                  <center><img src="images/product.png"></center>
                </ul>
              </div></a>
            </div>
          </div>
		  <div class="col-md-4">
            
           <div class="card">
              <div class="card-header">
                <center><h4 class="card-title">General</h4></center>
              </div>
              <a href="View_feedbacksite.php"><div class="card-body">
                <ul class="list-unstyled team-members">
				
				  <center><h6>Reply to Feedback</h6></center>
                  <center><img src="images/site.png"></center>
                </ul>
              </div></a>
            </div>
          </div>
         
      

       </div><!--/ col-lg-3 -->
      
          </div><!--/ row -->


       </div><!--/ col-lg-3 -->
      
          </div><!--/ row -->
         </div><!--/ container -->
        </section>



       


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
                ?? <script>
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

<style type="text/css">
  /*
*
* ===========================================================
*     HERO SECTION
* ===========================================================
*
*/
.hero {
  padding: 6.25rem 0px !important;
  margin: 0px !important;
}
.cardbox {
  border-radius: 3px;
  margin-bottom: 20px;
  padding: 0px !important;
}

/* ------------------------------- */
/* Cardbox Heading
---------------------------------- */
.cardbox .cardbox-heading {
  padding: 16px;
  margin: 0;
}
.cardbox .btn-flat.btn-flat-icon {
 border-radius: 50%;
 font-size: 24px;
 height: 32px;
 width: 32px;
 padding: 0;
 overflow: hidden;
 color: #fff !important;
 background: #b5b6b6;
 
display: flex;
flex-direction: column;
justify-content: center;
align-items: center;
text-align: center;
}
.cardbox .float-right .dropdown-menu{
  position: relative;
  left: 13px !important;  
}
.cardbox .float-right a:hover{
  background: #f4f4f4 !important; 
}
.cardbox .float-right a.dropdown-item {
  display: block;
  width: 100%;
  padding: 4px 0px 4px 10px;
  clear: both;
  font-weight: 400;
  font-family: 'Abhaya Libre', serif;
  font-size: 14px !important;
  color: #848484;
  text-align: inherit;
  white-space: nowrap;
  background: 0 0;
  border: 0;
}

/* ------------------------------- */
/* Media Section
---------------------------------- */
.media {
  display: -ms-flexbox;
  display: flex;
  -ms-flex-align: start;
  align-items: flex-start;
}
.d-flex {
  display: -ms-flexbox !important;
  display: flex !important;
}
.media .mr-3{
  margin-right: 1rem !important;
}
.media img{
  width: 48px !important;
  height: 48px !important;
  padding: 2px;
  border: 2px solid #f4f4f4;
} 
.media-body {
  -ms-flex: 1;
  flex: 1;
  padding: .4rem !important;
}
.media-body p{
  font-family: 'Rokkitt', serif;  
  font-weight: 500 !important;
  font-size: 14px;
  color: #88898a;
}
.media-body small span{
  font-family: 'Rokkitt', serif;  
  font-size: 12px;
  color: #aaa;
  margin-right: 10px;
}


/* ------------------------------- */
/* Cardbox Item
---------------------------------- */
.cardbox .cardbox-item {
    position: relative;
    display: block;
}

.img-responsive{
    display: block;
    max-width: 100%;
    height: auto;
} 
.fw {
    width: 100% !important;
  height: auto;
}


/* ------------------------------- */
/* Cardbox Base
---------------------------------- */
.cardbox-base{
 border-bottom: 2px solid #f4f4f4;
} 
.cardbox-base ul{
 margin: 10px 0px 10px 15px!important; 
 padding: 10px !important;
 font-size: 0px;  
  display: inline-block;
}
.cardbox-base li {
  list-style: none;
  margin: 0px 0px 0px -8px !important;
  padding: 0px 0px 0px 0px !important;
  display: inline-block;
}

.cardbox-base li a{
  margin: 0px !important;
  padding: 0px !important;
}
.cardbox-base li a i{
 position: relative;
 top: 4px; 
 font-size: 16px;
 color: #8d8d8d;
 margin-right: 15px;
}
.cardbox-base li a span{
 font-family: 'Rokkitt', serif;
 font-size: 14px;
 color: #8d8d8d;
 margin-left: 20px;
 position: relative;
 top: 5px; 
}
.cardbox-base li a em{
 font-family: 'Rokkitt', serif;
 font-size: 14px;
 color: #8d8d8d;
 position: relative;
 top: 3px; 
}
.cardbox-base li a img{
  width: 25px;
  height: 25px;
  margin: 0px !important;
  border: 2px solid #fff;
}


/* ------------------------------- */
/* Cardbox Comments
---------------------------------- */
.cardbox-comments{
  padding: 10px 40px 20px 40px !important;
  font-size: 0px; 
  text-align: center;
  display: inline-block;
}
.cardbox-comments .comment-avatar img{
  margin-top: 1px;
  margin-right: 10px;
  position: relative;
  display: inline-block;
  text-align: center;
  width: 40px;
  height: 40px;
}
.cardbox-comments .comment-body {
  overflow: auto;
}
.search {
 position: relative;
 right: -60px;
 top: -40px;
 margin-bottom: -40px;
 border: 2px solid #f4f4f4; 
 width: 100%;
 overflow: hidden;
}
.search input[type="text"] {
 background-color: #fff;
 line-height: 10px;
 padding: 15px 60px 20px 10px;
 border: none;
 border-radius: 4px;
 width: 350px;
 font-family: 'Rokkitt', serif;
 font-size: 14px;
 color: #8d8d8d;
 height: inherit;
 font-weight: 700;
}
.search button {
 position: absolute;
 right: 0;
 top: 0px;
 border: none;
 background-color: transparent;
 color: #bbbbbb;
 padding: 15px 25px;
 cursor: pointer;
 
 display: flex;
flex-direction: column;
justify-content: center;
align-items: center;
text-align: center;
}
.search button i {
 font-size: 20px;
 line-height: 30px;
 display: block;
}


/* ------------------------------- */
/* Author
---------------------------------- */
.author a{
 font-family: 'Rokkitt', serif;
 font-size: 16px;
 color: #00C4CF;
}
.author p{
 font-family: 'Rokkitt', serif;
 font-size: 16px;
 color: #8d8d8d;
}
</style>

