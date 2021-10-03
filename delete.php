<?php
    $connection = mysqli_connect('localhost','root','','oneblood');
    $recv = $_REQUEST['id'];
    $queryB_req = "DELETE FROM blood_requests WHERE id = $recv";
    $querydonors = "DELETE FROM donors WHERE id = $recv";
    $querypersonal_inventory = "DELETE FROM personal_inventory WHERE id = $recv";
    $query = "DELETE FROM registration WHERE id = $recv";
    mysqli_query($connection,$queryB_req);
    mysqli_query($connection,$querydonors);
    mysqli_query($connection,$querypersonal_inventory);

    $run_delete_query = mysqli_query($connection,$query);
    if($run_delete_query){
        header("location:dashboard.php?deleted");
    }


?>