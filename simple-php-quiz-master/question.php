<?php include "database.php"; ?>
<?php session_start(); 
 if(!(isset($_SESSION['username'])))
    {
         header("Location: ../index.html");
    }?>
<?php
	//Set question number
	$number = (int) $_GET['n'];

	//Get total number of questions
	$query = "select * from questions";
	$results = $mysqli->query($query) or die($mysqli->error.__LINE__);
	$total=$results->num_rows;

	// Get Question
	$query = "select * from `questions` where question_number = $number";

	//Get result
	$result = $mysqli->query($query) or die($mysqli->error.__LINE__);
	$question = $result->fetch_assoc();


	// Get Choices
	$query = "select * from `choices` where question_number = $number";

	//Get results
	$choices = $mysqli->query($query) or die($mysqli->error.__LINE__);

 ?>
<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8" />
    <title>Online Test</title>
    <link rel="stylesheet" href="css/style.css" type="text/css" />
  </head>
  <style type="text/css">
  	.timer{
  font-size: 2.5em;
  padding: 10px;
  text-align: center;
  margin: 0 auto;
  background: #ccc;
}
  </style>
<script type="text/javascript">
function explode(){
   $("#subm").trigger();
}
setTimeout(explode, 2000);
</script>

  <body>
    <div id="container">
      <header>
        <div class="container">
          <h1>Online test</h1>
	</div>
      </header>


      <main>
      <div class="container">
      	<div class="timer">10</div><span>Seconds</span>
        <div class="current">Question <?php echo $number; ?> of <?php echo $total; ?></div>
	<p class="question">
	   <?php echo $question['question'] ?>
	</p>
	<form method="post" action="process.php" id="subform">
	      <ul class="choices">
	        <?php while($row=$choices->fetch_assoc()): ?>
		<li><input name="choice" type="radio" value="<?php echo $row['id']; ?>" />
		  <?php echo $row['choice']; ?>
		</li>
		<?php endwhile; ?>
	      </ul>
	      <input type="submit" value="submit" id="subm" />
	      <input type="hidden" name="number" value="<?php echo $number; ?>" />
	</form>
      </div>
    </div>
    </main>


    <footer>
      <div class="container">
      	  Copyright &copy; 2019, It Tutorials
      </div>
    </footer>
  </body>
</html>