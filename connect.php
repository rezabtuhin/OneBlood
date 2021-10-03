<?php
    $firstname = $_POST['firstname'];
    $lastname = $_POST['lastname'];
    $phone = $_POST['phone'];
    $email = $_POST['email'];


    $age = 2021 - $_POST['year'];


    $gender = $_POST['gender'];

    $b = $_POST['feet'];
    $c = $_POST['inches'];
    $d = ($b*12) + $c;
    $last = $d/39.3701;
    $height = number_format($last,2);



    $bloodgroup = $_POST['bloodgroup'];
    $zilla = $_POST['zilla'];
    $upazilla = $_POST['upazilla'];

    $x = $_POST['password'];
    $y = $_POST['conpass'];

    if($x == $y){
        $password = $_POST['password'];
    }
    else{
        echo "Passwords did not match";
    }



    //connection to database server
    $con = new mysqli('localhost','root','','oneblood');
    if($con->connect_error){
        die('Connection Faild');
    }
    else{
        $stmt = $con->prepare("INSERT INTO registration(firstname,lastname,phone,email,age,gender,height,bg,add_zilla,add_upazilla,password)
        values(?,?,?,?,?,?,?,?,?,?,?)");
        $stmt->bind_param("ssisissssss",$firstname,$lastname,$phone,$email,$age,$gender,$height,$bloodgroup,$zilla,$upazilla,$password);
        $stmt->execute();
        echo "Registered Succesfull";
        $stmt->close();
        $con->close();
        header("location:login.php");
    }
?>