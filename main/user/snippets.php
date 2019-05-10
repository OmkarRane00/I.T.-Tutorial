<?php
    session_start();

    
    $subcode = $_GET['sub'];

    require_once '../../class/project.php';

?>
<!DOCTYPE html>
<html lang="en">
  <head>
   <title>It Tutorials</title>
      <meta http-equiv="content-type" content="text/html; charset=utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta http-equiv="X-UA-Compatible" content="IE=11, chorme=1">
    <link rel="stylesheet" href="css/font-awesome.min.css" />
<link href="../../assets/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
<link href="../../assets/css/style.css" rel="stylesheet" id="bootstrap-css">
 </head>
  <body>

<!-- Top navigation -->
<nav class="navbar navbar-expand-md fixed-top top-nav">
	<div class="container">
		  <a class="navbar-brand" href="../index.php"><strong>It Tutorials</strong></a>
		  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
		    <span class="navbar-toggler-icon"><i class="fa fa-bars" aria-hidden="true"></i></span>
		  </button>

		  <div class="collapse navbar-collapse" id="navbarSupportedContent">
		    <ul class="navbar-nav ml-auto">
		      <li class="nav-item">
		        <a class="nav-link" href="../index.php">Home</a>
		      </li>
          <?php
            if (isset($_SESSION['username'])) {
              echo '
              <li class="nav-item ">
                <a class="nav-link" href="../simple-php-quiz-master/">Test<span class="sr"></span>  </a>
              </li>
              ';
              
             }
          ?>
		           <li class="nav-item  active">
                <a class="nav-link" href="snippets.php?sub=1">Snippets<span class="sr-only">(current)</span>  </a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="docs.php?sub=1">Documents</a>
              </li>
		      <li class="nav-item">
		        <a class="nav-link" href="product.php?sub=1">Video</a>
		      </li>
          <?php
          if (isset($_SESSION['username'])) {
           echo "<li class='nav-item dropdown'>
                <a class='nav-link dropdown-toggle' data-toggle='dropdown' href='#'>$_SESSION[username]</a>
                <div class='dropdown-menu'>
                  <a class='dropdown-item' href='../logout.php'>Logout</a>
                </div>
              </li>";
          }

                
		      ?>
		    </ul>
		  </div>	
	</div>
</nav>

<!-- Intro Banner -->

  <div class="block-30 block-30-sm item" style="background-image: url('../../assets/images/bg_2.jpg');" data-stellar-background-ratio="0.5">
    <div class="container">
      <div class="row align-items-center">
        <div class="col-md-10">
           <span class="subheading-sm">Welcome &nbsp;&nbsp;&nbsp;<?php 
           if(isset($_SESSION['username']))
           {
            echo "$_SESSION[username]";
          }
          else
          {
            echo "Guest";
          }


           ?></span>
        </div>
      </div>
    </div>
  </div>

<!--End Intro Banner -->

<!-- Middle -->

<section class="middle-container">
	<div class="container">
		 <div class="row">
		<div class="col-md-3">
<div class="cat-list">
	<h3>SUBJECTS</h3>
	<ul>
		<li><a href="snippets.php?sub=1">Imperative Programing</a></li>
        <li><a href="snippets.php?sub=2">Digital Electronics</a></li>
        <li><a href="snippets.php?sub=3">Operating System</a></li>
        <li><a href="snippets.php?sub=4">Discrete Mathematics</a></li>
        
	</ul>
</div>
        </div>
        <div class="col-md-9 cat-products">
      <h3 class="cate-head">
        <?php 
        if($subcode==1){
            echo "Imperative Programing";
        }
        if($subcode==2){
            echo "Digital Electronics";
        }
        if($subcode==3){
            echo "Operating System";
        }
        if($subcode==4){
            echo "Discrete Mathematics";
        }
        ?>
          
      </h3>
    <hr/>
   
    <div class="row">

    <?php

            $rows = $objproject->select("title, code, description", "snippets", "subject=$subcode");
            // pre($rows);
            $rows = json_decode($rows, true);

            foreach ($rows as $row) {
             
             
        ?>            
        <div class="container" style="border-top: 2px solid #bbb; padding-top: 10px;">
        <h2><?php echo "$row[title]";?></h2>
        <p><?php echo "$row[description]"?></p>
        
        <div class="jumbotron">
          <pre><?php echo"$row[code]";?>
          </pre>
        </div>
        </div>
        


        <?php
         }
        ?>

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



<script src="../../assets/js/jquery.min.js"></script>
 <script src="../../assets/js/bootstrap.min.js"></script>
 <script src="../../assets/js/main.js"></script>   
  </body>
</html>