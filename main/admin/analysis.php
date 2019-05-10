<?php
  
  require_once '../../class/project.php';

	session_start();

  if(!(isset($_SESSION['username'])))
    {
         header("Location: ../index.php");
    }
  else{
    if ($_SESSION['username']!='admin') {
        header("Location: ../user/product.php?sub=1");
    }
  }
?>

<!DOCTYPE html>
<html lang="en">
  <head>
   <title>IT Tutorials</title>
    <meta http-equiv="content-type" content="text/html; charset=utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta http-equiv="X-UA-Compatible" content="IE=11, chorme=1">
   <link rel="stylesheet" href="../../assets/css/font-awesome.min.css" />
<link href="../../assets/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
<link href="../../assets/css/style.css" rel="stylesheet" id="bootstrap-css">
 </head>
  <body>

  	<style type="text/css">
  		#err3,#err4,#err5{
  			display: none;
  		}
  	</style>

<!-- Top navigation -->
<nav class="navbar navbar-expand-md fixed-top top-nav">
	<div class="container">
		  <a class="navbar-brand" href="../index.php"><strong>IT Tutorials</strong></a>
		  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
		    <span class="navbar-toggler-icon"><i class="fa fa-bars" aria-hidden="true"></i></span>
		  </button>

		  <div class="collapse navbar-collapse" id="navbarSupportedContent">
		    <ul class="navbar-nav ml-auto">
		      <li class="nav-item">
		        <a class="nav-link" href="../index.php">Home</a>
		      </li>
		      <li class="nav-item">
		        <a class="nav-link" href="../../simple-php-quiz-master/add.php">Test</a>
		      </li>
		      <li class="nav-item  active">
		        <a class="nav-link" href="#">Product  <span class="sr-only">(current)</span>	</a>
		      </li>
          <li class="nav-item">
            <a class="nav-link" href="analysis.php">Analysis</a>
          </li>
		      <li class="nav-item dropdown">
                <a class="nav-link dropdown-toggle" data-toggle="dropdown" href="#">Admin</a>
                <div class="dropdown-menu">
                  <a class="dropdown-item" href="../logout.php">Logout</a>
                </div>
              </li>
		     
		    </ul>
		  </div>	
	</div>
</nav>

<!-- Intro Banner -->

  <div class="block-30 block-30-sm item" style="background-image: url('../../assets/images/banner.jpg');" data-stellar-background-ratio="0.5">
    <div class="container">
      <div class="row align-items-center">
        <div class="col-md-10">
           <span class="subheading-sm">Admin Panel</span>
        </div>
      </div>
    </div>
  </div>

<!--End Intro Banner -->

<!-- Middle -->

<section class="middle-container">
<div class="container">
  <table class="table table-striped">
    <thead>
      <tr>
        <th>Username</th>
        <th>No of tests taken</th>
      </tr>
    </thead>
    <tbody>
      <?php

            $rows = $objproject->select("user,number", "test", "1=1");
            // pre($rows);
            $rows = json_decode($rows, true);

            foreach ($rows as $row) {
             
          
      ?>

      <tr>
        <td><?php echo $row['user'];?></td>
        <td><?php echo $row['number'];?></td>
      </tr>
      <?php
    }
    ?>
    </tbody>
  </table>
</div>
</section>

<!-- Middle -->

     <!-- < Footer  -> -->
<footer>
  <div class="container">
	<div class="row">		
		<div class=" col-md-12 text-center">
          Copyright &copy; 2019 reserved by IT Tutorials. 
       </div>
   </div>
  </div>
</footer>


<script src="../../assets/js/jquery.min.js"></script>
 <script src="../../assets/js/bootstrap.min.js"></script>
 <script src="../../assets/js/main.js"></script>   
 <script src="../../assets/js/adminupload.js"></script>

</script>
  </body>
</html> 