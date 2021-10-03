<?php
    $user = $_REQUEST['phone'];
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link rel="stylesheet" href="css/bootstrap.css">
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;500;600;700;800&display=swap" rel="stylesheet">
    <title>Request For Blood</title>
    <link rel="shortcut icon" href="images/oneblood.png">

</head>

<body>
    <div style="font-family: 'Poppins', sans-serif; font-weight:400">
        <header class="sticky-top">
        <nav class="navbar navbar-expand-sm bg-dark justify-content-between">
                <a href="logged_in.php?phone=<?php echo $user ?>" class="navbar-brand" style="font-weight:700;">
                    ONEBLOOD
                </a>
                <a class="btn btn-danger" href="index.php" role="button">Log out</a>

            </nav>
        </header>

        <div class="su-inner-banner-area bg-primary">
            <div class="container">
                <div class="row text-center">
                    <div class="col-12 col-sm-6 col-lg-5 col-xl-4 m-auto">
                        <h3 class="text-left" style="font-size:30px;font-family: 'Poppins', sans-serif; font-weight:700; color:azure;"> Request For Blood</h3>
                    </div>
                    <div class="col-12 col-sm-6 col-lg-5 col-xl-4 m-auto pt-4 pt-sm-0">
                        <div class="su-inner-banner-img"><img alt="image" class="img-fluid" src="images/bloo_drop.png"></div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Banner -->

        <section class="container-fluid">
            <section class="row jumbotron justify-content-center">
                <section class="col-l4 col-sm-6">


                    <?php
                        $phone_nu = '0'."".$user; 
                        $qu1 = "SELECT * FROM registration WHERE phone = '$user'";
                        $con = new mysqli('localhost', 'root', '', 'oneblood');
                        $values = mysqli_query($con, $qu1);
                        $id = "";
                        while ($row = mysqli_fetch_assoc($values)) {
                            $id = $row['id'];
                        }

                        if(isset($_POST['submit'])){
                            $zilla = $_POST['Zilla'];
                            $upazilla = $_POST['Upazilla'];
                            $bloodgroup = $_POST['bloodgroup'];
                            $bloodtype = $_POST['bloodtype'];
                            $quantity = $_POST['quantity'];
                            $emergency = $_POST['emergency'];
                            $con = new mysqli('localhost','root','','oneblood');
                            $stmt = $con->prepare("INSERT INTO blood_requests(id,phone_n,zilla,upazilla,bloodGroup,requestType,quantity,reason)
                            values(?,?,?,?,?,?,?,?)");
                            $stmt->bind_param("isssssss",$id,$phone_nu,$zilla,$upazilla,$bloodgroup,$bloodtype,$quantity,$emergency);
                            $stmt->execute();
                            // echo "Registered Succesfull";
                            $stmt->close();
                            $con->close();
                            ?>
                            <div class="alert alert-success" role="alert">
                                            Your request has been Added successfully.
                                        </div>
                            <?php
                        }
                            
                        ?>

                    <form action="" method="post" name="myform">
                        <div class="mb-4">
                            <label for="exampleInputEmail1" class="form-label">Address</label>
                            <input type="text" class="form-control" placeholder="Zilla" name="Zilla">
                        </div>
                        <div class="mb-4">
                            <label for="exampleInputPassword1" class="form-label">Address</label>
                            <input type="text" class="form-control" placeholder="Upazilla" name="Upazilla">
                        </div>
                        <div class="mb-4">
                            <label for="exampleInputPassword1" class="form-label">Blood Group</label>
                            <div>
                                <select class="form-select" aria-label="Default select example" name = "bloodgroup">
                                    <option selected disabled>---Select Group---</option>
                                    <option value="A+">A+</option>
                                    <option value="A-">A-</option>
                                    <option value="B+">B+</option>
                                    <option value="B-">B-</option>
                                    <option value="AB+">AB+</option>
                                    <option value="AB-">AB-</option>
                                    <option value="O+">O+</option>
                                    <option value="O-">O-</option>
                                </select>
                            </div>

                        </div>
                        <div class="mb-4">
                            <label for="exampleInputPassword1" class="form-label">Type</label>
                            <div>
                                <select class="form-select" aria-label="Default select example" name="bloodtype">
                                    <option selected disabled>---Select Type---</option>
                                    <option value="Blood">Blood</option>
                                    <option value="Platelets">Platelets</option>
                                    <option value="Plasma">Plasma</option>
                                </select>
                            </div>
                            
                            <label for="exampleInputPassword1" class="form-label">Quantity</label>
                            <div>
                                <select class="form-select" aria-label="Default select example" name = "quantity">
                                    <option selected disabled>---Select Quantity (Bag(s))---</option>
                                    <option value="1">1</option>
                                    <option value="2">2</option>
                                    <option value="3">3</option>
                                    <option value="4">4</option>
                                    <option value="5">5</option>
                                    <option value="6">6</option>
                                    <option value="7">7</option>
                                    <option value="8">8</option>
                                    <option value="9">9</option>
                                </select>
                            </div>
                    
                            
                        </div>

                        <div class="mb-4">
                            <label for="exampleInputPassword1" class="form-label">Reason (optional): </label>
                            <div class="form-floating">
                                <textarea class="form-control" placeholder="Reason For Ergency..." id="floatingTextarea" name = "emergency"></textarea>
                            </div>
                        </div>
                        <button class="w-100 btn btn-lg btn-primary" type="submit" name = "submit">Submit</button>

                    </form>
                </section>
            </section>
    </div>
    <script src="js/bootstrap.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
</body>

</html>