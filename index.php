<html>
<head>
<title>Quiz</title>

  <link rel="stylesheet" href="css/style.css">

</head>
<body>

   <div class="start-container">
      <div class="box-middle">
      
         <h1>Start the Quiz by enterning your name</h1>

         <form method="POST">
            <input type="text" name="name" autoComplete="off">
            <input type="submit" class="index-button button" name="submit">
         </form>

      </div>
   </div>

</body>
</html>

<?php
 
 include "connection.php";

   session_start();

  if(isset($_POST['submit'])){
     $name = $_POST['name'];

     if($name == ''){
        ?>
      <script> alert("Please Enter your Name to start.") </script>
      <?php
     }
     else{      
        $_SESSION['name'] = $name;
        header("location: main.php");
     }

    }

 ?>