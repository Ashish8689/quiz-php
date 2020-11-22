<html>
<head>
<title>Quiz</title>

  <link rel="stylesheet" href="css/style.css">
</head>
<body>
  
  <div class="end-container">
 
      <h1>End of the Quiz</h1> 

      <?php
        include "connection.php";
        session_start();

        if($_SESSION['name'] == ''){
          header('location:index.php');
       }
      ?>


      <h3>Congratulation <?php echo $_SESSION['name'] ?> you have completed the test successfully.</h3>

      <h2>Your score was :  <span> <?php echo $_SESSION['score'] ?> </span></h2>

      <form method="POST" action="">
        <input type="submit" class="button" name="submit" value="Restart">
      </form>

  </div>

</body>
</html>


<?php

  if(isset($_POST['submit'])){

    session_start();
    session_destroy();
    header('location:index.php');
  }
   
 ?>

