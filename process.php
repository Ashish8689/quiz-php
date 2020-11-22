<?php
 
 include 'connection.php';
 session_start();

 if(!isset($_SESSION['score'])){
     $_SESSION['score'] = 0 ;
 } 

 $selectTotlaQuestion  = "select * from questions";
 $total_res = mysqli_query($con,$selectTotlaQuestion);
 $total_row = mysqli_num_rows($total_res);


 if($_POST){
     $answer = $_POST['choice'];
     $number = $_POST['number'];

    $next = $number + 1;

    if($answer == 1){   
        $_SESSION['score']++;
    }

    if($total_row == $number){
        header('location:end.php');
    }
    else{
        header('location:question.php?n='. $next);
    }

 }

?>