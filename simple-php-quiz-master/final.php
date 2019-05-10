 <?php include "database.php"; ?>
<?php session_start();
 if(!(isset($_SESSION['username'])))
    {
         header("Location: ../index.php");
    }
 ?>
<?php
	//Create Select Query
	// $query="select * from shouts order by time desc limit 100";
	// $shouts = mysqli_query($con,$query);

 ?>
<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8" />
    <title>Online test</title>
    <link rel="stylesheet" href="css/style.css" type="text/css" />
  </head>
  <body>
    <div id="container">
      <header>
        <div class="container">
          <h1>Semester I test</h1>
	</div>
      </header>


      <main>
	<div class="container">
	     <h2>You are Done!</h2>
	     <p>Congrats! You have completed the test</p>
	     <p>Final score: <?php echo $_SESSION['score']; ?></p>
       <?php $_SESSION['score']=0;?>
	     <a href="question.php?n=1" class="start">Take Test Again</a>
       <a href="../main/user/product.php?sub=1">Return to Dashboard</a>
	     
	</div>
      </main>


    <footer>
      <div class="container">
      	   Copyright &copy; 2019, It Tutorials
      </div>
    </footer>
  </body>
</html>