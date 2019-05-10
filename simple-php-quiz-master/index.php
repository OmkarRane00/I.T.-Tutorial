 <?php include "database.php";
    require_once '../class/project.php';
  ?>

<?php
  session_start();
  if(!(isset($_SESSION['username'])))
    { 
         header("Location: ../index.php");
    }

    $q1 = "Select number from test where user = 'user2'";
    $res1 = $mysqli->query($q1) or die ($mysqli->error.__LINE__);
    
  //Get the total questions
	$query="select * from questions";
	//Get Results
	$results = $mysqli->query($query) or die ($mysqli->error.__LINE__);
	$total = $results->num_rows;

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
          <h1>Semester I Test</h1>
     <?php
      foreach ($res1 as $res) {
      $count=$res['number'];
      $count=$count+1;
      }
      $q2 = "Update test set number = $count";
      $res1 = $mysqli->query($q2) or die ($mysqli->error.__LINE__);
    
      ?>
	</div>
      </header>


      <main>
      <div class="container">
        <h2>Test for Sem I Syllabus.</h2>
	<p>This is a multiple choice quiz to test your knowledge of semester I topics.</p>
	<ul>
		<li><strong>Number of Questions: </strong><?php echo $total; ?></ul>
		<li><strong>Type: </strong>Multiple Choice</ul>
		<li><strong>Estimatd Time: </strong><?php echo $total*0.5; ?> minutes</ul>
	</ul>
	<a href="question.php?n=1" class="start">Start Quiz</a>
      </div>
    </div>
    </main>


    <footer>
      <div class="container">
      	   Copyright &copy; 2019, IT Solutions
      </div>
    </footer>
  </body>
</html>