<html>
<head>
<title>Quiz</title>
 
 <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css">
 <link rel="stylesheet" href="css/style.css">   
</head>
<body>

  <div class="question-container">  

  <div class="header-container">
     <h1>Web development questions</h1>
  </div>
    
  <div class="container">
    <div class="quiz-container">

      <form method="POST" action="process.php">

            <?php
               include "connection.php";

               session_start();

               if($_SESSION['name'] == ''){
                  header('location:index.php');
               }

               else{
                     $id = $_GET["n"];
                     
                  //   Get Questions from Database
                     $selectQuestionquery = "select * from questions where question_number='$id'";
                     $question_res = mysqli_query($con,$selectQuestionquery);
                     $row = mysqli_num_rows($question_res);

                  //  Getting Choice from Database
                     $selectOptionquery = "select * from options where question_number='$id'";
                     $option_res = mysqli_query($con,$selectOptionquery);

                     
                     while($arr = mysqli_fetch_array($question_res)){
                        ?>
                           <h2> <?php echo $id ?>. <?php echo $arr['question_text'] ?></h2>

                           <ul>
                              <?php
                                 while($opt = mysqli_fetch_array($option_res)){
                                       ?>
                                       <li><input type="radio" name="choice" value="<?php echo $opt['correct']; ?>" > <span> <?php echo $opt['choice']; ?></span> </li>
                                       <?php
                                 }     
                              ?>     
                           </ul>
                        <?php	
                  }
               }   
            ?>

         <input type="hidden" name="number" value="<?php echo $id ?>">
         <input class="button" type="submit" name="submit">

      </form> 
    </div>
 </div> 

 </div>


 <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js"></script>
 <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js"></script>
 <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"></script>

</body>
</html>
