<?php
include"../config/koneksi.php"; ?>
<!DOCTYPE html>
<html>
<head>
	<title>:: Alhamra | Admin Login ::</title>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, inital-scale=1, maxium-scale=1">
	<meta name="keywords" content="Alhamra booking hotel, resort murah Cianjur-Cipanas">
	<meta name="description" content="Alhamra resort Cianjur-Cipanas">
 <!-- Bootstrap core CSS -->
    <link href="assets/css/bootstrap.css" rel="stylesheet">
    <!--external css-->
    <link href="assets/font-awesome/css/font-awesome.css" rel="stylesheet" />
        
    <!-- Custom styles for this template -->
    <link href="assets/css/style.css" rel="stylesheet">
    <link href="assets/css/style-responsive.css" rel="stylesheet">

    <!-- HTML5 shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
      <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->
  </head>

  <body>

      <!-- **********************************************************************************************************************************************************
      MAIN CONTENT
      *********************************************************************************************************************************************************** -->

	  <div id="login-page">
	  	<div class="container">
	  	
		      <form class="form-login" action="admin_aksi_login.php" method="post">
		        <h2 class="form-login-heading">Login Admin</h2>
		        <div class="login-wrap">
		            <input name="username" id="password" type="text" class="form-control" placeholder="Username" autofocus required="">
		            <br>
		            <input name="password" id="password" type="password" required="" class="form-control" placeholder="Password">
		            <label class="checkbox">
		                <span class="pull-right">
		                    <a data-toggle="modal" href="#myModal"> Forgot Password?</a>
		
		                </span>
		            </label>
		            	<input type="submit" class="btn btn-theme btn-block" value="Login">
		            <hr>
		            
		            <div class="login-social-link centered">
		            <p>&copy; 2017 Alhamra | Designed by <a target="_new" href="http://www.dashgum.com/">DASHGUM</a></p>
		                
		            </div>
		            
		
		        </div>
		
		          <!-- Modal -->
		          <div aria-hidden="true" aria-labelledby="myModalLabel" role="dialog" tabindex="-1" id="myModal" class="modal fade">
		              <div class="modal-dialog">
		                  <div class="modal-content">
		                      <div class="modal-header">
		                          <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
		                          <h4 class="modal-title">Forgot Password ?</h4>
		                      </div>
		                      <div class="modal-body">
		                          <p>Enter your e-mail address below to reset your password.</p>
		                          <input type="text" name="email" placeholder="Email" autocomplete="off" class="form-control placeholder-no-fix">
		
		                      </div>
		                      <div class="modal-footer">
		                          <button data-dismiss="modal" class="btn btn-default" type="button">Cancel</button>
		                          <button class="btn btn-theme" type="button">Submit</button>
		                      </div>
		                  </div>
		              </div>
		          </div>
		          <!-- modal -->
		
		      </form>	  	
	  	
	  	</div>
	  </div>

    <!-- js placed at the end of the document so the pages load faster -->
    <script src="assets/js/jquery.js"></script>
    <script src="assets/js/bootstrap.min.js"></script>

    <!--BACKSTRETCH-->
    <!-- You can use an image of whatever size. This script will stretch to fit in any screen size.-->
    <script type="text/javascript" src="assets/js/jquery.backstretch.min.js"></script>
    <script>
        $.backstretch("assets/img/ny.jpg", {speed: 500});
    </script>


  </body>
</html>