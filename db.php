<?php
    require_once('conn.php');

    // get the form inputs
    $email = $_POST['email'];
    $gender= $_POST['gender'];
    $course = $_POST['course'];
    $pass= md5($_POST['pass']);

    // estbalish a connection to database
    $query = "INSERT INTO `student_reg` (`Email`,`Gender`,`Course`,`Password`) VALUES('$email','$gender','$course','$pass');";
    // check the status of the connection

    if(mysqli_query($conn,$query)){
        echo "Sign up successfull, kindly check your email" . "<br>";
    }else{
        echo "Something went wrong";
    }
    
?>