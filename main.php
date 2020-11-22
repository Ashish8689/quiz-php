<html>
<head>
<title>Quiz</title>

 <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css">
 <link rel="stylesheet" href="css/style.css">
</head>
<body>
 
  <div class="container">
      <div class="main-container">

         <h3 class="header ">This is a multiple choice Quiz to test your Web development knowledge</h3>
         
         <h4 class="description">Number of question :<strong>10</strong></h4>
         <h4 class="description mb-5">Type :<strong> Multiple choice</strong></h4>

         <a class="start-button button" href="question.php?n=1">Start</a>
      </div>
  </div>


   <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js"></script>
   <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js"></script>
   <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"></script>

</body>
</html>

<?php

  session_start();

  if($_SESSION['name'] == ''){
     header('location:index.php');
  }

?>