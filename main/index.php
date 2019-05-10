<!DOCTYPE html>
<html lang="en">
  <head>
    <title>IT Tutorials</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
<link href="../assets/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
<link href="../assets/css/style.css" rel="stylesheet" id="bootstrap-css">
 </head>
 <style type="text/css">
 	#err2,#err1{
	display: none;
	}
 </style>
  <body>

<!-- Top navigation -->
<nav class="navbar navbar-expand-md fixed-top top-nav">
	<div class="container">
		  <a class="navbar-brand" href="#"><strong>IT Tutorials</strong></a>		 
		   <a class="hm-login-link"  data-toggle="modal" href="#myModal">Login</a>		  
	</div>
</nav>

<!-- Intro Banner -->
<section class="intro carousel slide bg-overlay-light h-auto" id="carouselExampleCaptions">
    <ol class="carousel-indicators">
      <li data-target="#carouselExampleCaptions" data-slide-to="0" class="active"></li>
      <li data-target="#carouselExampleCaptions" data-slide-to="1" class=""></li>
       <li data-target="#carouselExampleCaptions" data-slide-to="2" class=""></li>
    </ol>
    <div class="carousel-inner" role="listbox">
      <div class="carousel-item active">
        <img class="d-block img-fluid" alt="First slide" src="../assets/images/bg_1.jpg">
        <div class="carousel-caption ">
        <h2 class="display-4 text-white mb-2 mt-4">Learn At Your Own Pace</h2>
		
        </div>
      </div>
      <div class="carousel-item">
        <img class="d-block img-fluid" alt="Second slide" src="../assets/images/bg_2.jpg">
        <div class="carousel-caption ">
          	<h2 class="display-4 text-white mb-2 mt-4">Easy To Understand</h2>
			
        </div>
      </div>
      <div class="carousel-item">
        <img class="d-block img-fluid" alt="Third slide" src="../assets/images/bg_3.jpg">
        <div class="carousel-caption ">
          	<h2 class="display-4 text-white mb-2 mt-4">Quick Test Support</h2>			
			
        </div>
      </div>
    </div>
    <a class="carousel-control-prev" href="#carouselExampleCaptions" role="button" data-slide="prev">
      <span class="carousel-control-prev-icon" aria-hidden="true"></span>
      <span class="sr-only">Previous</span>
    </a>
    <a class="carousel-control-next" href="#carouselExampleCaptions" role="button" data-slide="next">
      <span class="carousel-control-next-icon" aria-hidden="true"></span>
      <span class="sr-only">Next</span>
    </a>
</section>
<!--End Intro Banner -->

<!-- Middle -->
<section class="info-section">
	<div class="container">
		<div class="head-box text-center mb-5">
			<h2>We Give You</h2>
			<h6 class="text-underline-primary">Loads of content to refer from and various video tutorials.</h6>
		</div>
		<div class="three-panel-block mt-8">
			<div class="row">
				<div class="col-lg-3 col-md-6 col-sm-6" >
					<a href="user/snippets.php?sub=1">
					<div class="service-block-overlay text-center mb-5 p-lg-3 hm-box1" >					
						<h3>Snippets</h3>						
					</div>
				</a>
				</div>
				<div class="col-lg-3 col-md-6 col-sm-6">
					<a href="user/product.php?sub=1">
					<div class="service-block-overlay text-center mb-5 p-lg-3 hm-box2">
					<h3>Video Tutorials</h3>
					</div>
				</a>
				</div>
				<div class="col-lg-3 col-md-6 col-sm-6">
					<a href="user/docs.php?sub=1">
					<div class="service-block-overlay text-center mb-5 p-lg-3 hm-box3">
						<h3>Ebooks</h3>
					</div>
				</a>
				</div>
				<div class="col-lg-3 col-md-6 col-sm-6">
					<a href="../simple-php-quiz-master/index.php">
					<div class="service-block-overlay text-center mb-5 p-lg-3 hm-box2">
					<h3>Online Test</h3>
					</div>
				</a>
				</div>
				
			</div>
		</div>
	</div>
</section>
<!-- Middle -->

      <!--- Footer  --->
      <footer>
      	<div class="container">
	<div class="row">
		
		<div class=" col-md-12 text-center">
Copyright &copy; 2019 reserved by It Tutorials. 
</div>
	</div>
      	</div>
      </footer>

<!--- Model Popup Box --->
      <div class="modal" id="myModal">
      	<form id="login-form" name="login-form" method="post" role="form" style="display: block;">
  <div class="modal-dialog">
    <div class="modal-content ">

      <!-- Modal Header -->
      <div class="modal-header">
        <h4 class="modal-title">Login</h4>
        <button type="button" class="close" data-dismiss="modal">&times;</button>
      </div>

      <!-- Modal body -->
      <div class="modal-body">
      <div class="panel">
				
					<div class="panel-body">
						<div class="row">
							<div class="col-lg-12">
								
									<div class="form-group">
										<input type="text" name="username1" id="username1" tabindex="1" class="form-control" placeholder="Username" value="">
									</div>
									<div class="form-group">
										<input type="password" name="password" id="password" tabindex="2" class="form-control" placeholder="Password">
									</div>
									
									<div class="form-group  text-center">
										
									<button type="button" name="btnlogin" id="btnlogin"  class="form-control btn btn-login">Log in</button>
									
									<div class="alert alert-danger" id="err1"></div>


									</div>
									

									<div class="form-group text-center">
									 <a href="#" class="model-link" id="register-form-link">Register</a>
									</div>
								
								
							</div>
						</div>
					</div>
				</div>
      </div>

     

    </div>
  </div>
  </form>

  <form id="register-form" name="register-form" method="post" role="form" style="display: none;">
<div class="modal-dialog">
    <div class="modal-content ">

      <!-- Modal Header -->
      <div class="modal-header">
        <h4 class="modal-title">Sign Up</h4>
        <button type="button" class="close" data-dismiss="modal">&times;</button>
      </div>

      <!-- Modal body -->
      <div class="modal-body">
      <div class="panel">
				
					<div class="panel-body">
						
						<div class="row">
							<div class="col-lg-12">
															
									<div class="form-group">
										<input type="text" name="username" id="username" tabindex="1" class="form-control" placeholder="Username" value="">
									</div>						

									<div class="form-group">
										<input type="email" name="email" id="email" tabindex="2" class="form-control" placeholder="Email Address" value="">
									</div>

									<div class="form-group">
										<input type="text" name="phoneno" id="phoneno" tabindex="3" class="form-control" placeholder="Phone Number" value="">
									</div>
									
									<div class="form-group">
										<input type="password" name="password" id="password" tabindex="6" class="form-control" placeholder="Password">
									</div>
									<div class="form-group">
										<input type="password" name="cpassword" id="cpassword" tabindex="7" class="form-control" placeholder="Confirm Password">
									</div>

									<div class="form-group text-center">	
									<input type="button" name="btnregister" id="btnregister" tabindex="4" class="form-control btn btn-register" value="Register Now">	
									</div>
									
									<br>
									<div class="alert alert-danger" id="err2"></div>								
									

									<div class="form-group text-center">											
										<a href="#" class="model-link" id="login-form-link">Login</a>
									</div>
						</div>
					</div>
					
				</div>
      </div>

     

    </div>
  </div>
  	</form>
</div>
 <!--- Model Popup Box --->

<script src="../assets/js/jquery.min.js"></script>
 <script src="../assets/js/bootstrap.min.js"></script>
 <script src="../assets/js/main.js"></script>   
 <script src="../assets/js/index.js"></script>
  </body>
</html>