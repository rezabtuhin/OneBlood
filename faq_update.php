<?php
    $connection = mysqli_connect('localhost','root','','oneblood');
    $r = $_REQUEST['fullname'];
    $qu = "DELETE FROM faqs WHERE fullname = '$r'";
    $run_delete_query = mysqli_query($connection,$qu);
    if($run_delete_query){
        header("location:dashboard.php?deleted");
    }
?>