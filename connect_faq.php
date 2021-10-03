<?php
    $fullname = $_POST['fullname'];
    $email = $_POST['email'];
    $questions = $_POST['questions'];


    //connection to database server
    $con = new mysqli('localhost','root','','oneblood');
    //connection to database server

    if($con->connect_error){
        die('Connection Faild');
    }
    else{
        $stmt = $con->prepare("INSERT INTO faqs(fullname,email,questions)
        values(?,?,?)");
        $stmt->bind_param("sss",$fullname,$email,$questions);
        $stmt->execute();
        $stmt->close();
        $con->close();
        header("location:FAQs.php");
    }
?>