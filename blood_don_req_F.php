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
    <title>Donor Registration</title>
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
                        <h3 class="text-left" style="font-size:30px;font-family: 'Poppins', sans-serif; font-weight:700; color:azure;"> Be A Donor</h3>
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
                    $user = $_REQUEST['phone'];
                    $req = $_REQUEST['blodr'];
                    $qu1 = "SELECT * FROM registration WHERE phone = '$user'";
                    $qu_req = "SELECT * FROM blood_requests WHERE req_id = $req";
                    $con = new mysqli('localhost', 'root', '', 'oneblood');
                    $values = mysqli_query($con, $qu1);
                    $values2 = mysqli_query($con, $qu_req);
                    $height = "";
                    $quantity = "";
                    while ($row = mysqli_fetch_assoc($values)) {
                        $height = $row['height'];
                        $id = $row['id'];
                        $age = $row['age'];
                    }
                    while ($row = mysqli_fetch_assoc($values2)) {
                        $quantity = $row['quantity'];
                    }
                    if (isset($_POST['submit'])) {
                        $weight = $_POST['weight'];
                        $curmonth = date('m');
                        $curyear = date('Y');
                        $day = $_POST['Day'];
                        $month = $_POST['month'];
                        $year = $_POST['year'];
                        $accident = $_POST['accident'];
                        $disease = $_POST['disease'];
                        $operation = $_POST['operation'];
                        $accident_kind = $_POST['accident_kind'];
                        $disease_kind = $_POST['disease_kind'];
                        $operation_kind = $_POST['operation_kind'];
                        $pregnant = $_POST['pregnant'];
                        $menstruation = $_POST['menstruation'];


                        $cur_dur = ($curyear - $year) * 12 + ($curmonth - $month);


                        $bmi = $weight / ($height * $height);
                        if($pregnant == 'yes'){
                            ?>
                                    <div class="alert alert-danger" role="alert">
                                        You can't donate blood during pregnancy period.
                                    </div>
                            <?php
                        }
                        else if($menstruation == 'yes'){
                            ?>
                                    <div class="alert alert-danger" role="alert">
                                        You can't donate blood during menstruation period.
                                    </div>
                            <?php
                        }
                        else if ($age > 17) {
                            if ($weight > 50) {
                                if ($cur_dur >= 2) {
                                    if ($accident != 'Major' && $disease != 'Major' && $operation != 'Major') {
                                        $quantity = $quantity - 1;
                                        if ($quantity == 0) {
                                            $del_qu = "DELETE FROM blood_requests WHERE req_id = $req";
                                            mysqli_query($con, $del_qu);
                                        } else {
                                            $update_quer = "UPDATE blood_requests SET quantity = $quantity WHERE req_id = $req";
                                            mysqli_query($con, $update_quer);
                                        }

                                        $stmt = $con->prepare("INSERT INTO donors(id,weight,bmi,had_accident,accident_kind,had_disease,disease_kind,had_operation,operation_type)
                                            values(?,?,?,?,?,?,?,?,?)");
                                        $stmt->bind_param("issssssss", $id, $weight, $bmi, $accident, $accident_kind, $disease, $disease_kind, $operation, $operation_kind);
                                        $stmt->execute();
                                        $stmt->close();
                                        $con->close();

                                    ?>
                                        <div class="alert alert-success" role="alert">
                                            Blood Donation Successful
                                        </div>
                                    <?php

                                    } else {
                                    ?>
                                        <div class="alert alert-danger" role="alert">
                                            You can't Donate Blood
                                        </div>
                                    <?php
                                    }
                                } else {
                                    ?>
                                    <div class="alert alert-danger" role="alert">
                                        Donation Gap must be at least 2 months or higher
                                    </div>
                                <?php
                                }
                            } else {
                                ?>
                                <div class="alert alert-danger" role="alert">
                                    You must be weigh at least 50kgs
                                </div>
                            <?php
                            }
                        } else {
                            ?>
                            <div class="alert alert-danger" role="alert">
                                You must be at least 17 years Old
                            </div>
                    <?php
                        }
                    }
                    ?>
                    <form action="" method="post" name="myform">
                        <div class="mb-4">
                            <label for="exampleInputEmail1" class="form-label">Weight</label>
                            <input type="text" class="form-control" placeholder="weight(kg's)" name="weight">
                        </div>
                        <div class="mb-4">
                            <label for="exampleInputEmail1" class="form-label">Are you pregnant?</label>
                            <div class="form-check">
                                <input class="form-check-input" type="radio" name="pregnant" id="exampleRadios1" value="yes">
                                <label class="form-check-label" for="exampleRadios1">
                                    Yes
                                </label>
                            </div>
                            <div class="form-check">
                                <input class="form-check-input" type="radio" name="pregnant" id="exampleRadios2" value="no">
                                <label class="form-check-label" for="exampleRadios2">
                                    No
                                </label>
                            </div>
                        </div>
                        <div class="mb-4">
                            <label for="exampleInputEmail1" class="form-label">Are you in menstruation?</label>
                            <div class="form-check">
                                <input class="form-check-input" type="radio" name="menstruation" id="exampleRadios1" value="yes">
                                <label class="form-check-label" for="exampleRadios1">
                                    Yes
                                </label>
                            </div>
                            <div class="form-check">
                                <input class="form-check-input" type="radio" name="menstruation" id="exampleRadios2" value="no">
                                <label class="form-check-label" for="exampleRadios2">
                                    No
                                </label>
                            </div>
                        </div>
                        <div class="mb-4">
                            <label for="exampleInputEmail1" class="form-label">Last Donation</label>
                            <input type="text" class="form-control mb-1" placeholder="Day" name="Day">
                            <input type="text" class="form-control mb-1" placeholder="Month" name="month">
                            <input type="text" class="form-control mb-1" placeholder="year" name="year">
                        </div>
                        <div class="mb-4">
                            <label for="exampleInputEmail1" class="form-label">Any Recent Accident?</label>
                            <div class="form-check">
                                <input class="form-check-input" type="radio" name="accident" id="exampleRadios1" value="None">
                                <label class="form-check-label" for="exampleRadios1">
                                    None
                                </label>
                            </div>
                            <div class="form-check">
                                <input class="form-check-input" type="radio" name="accident" id="exampleRadios2" value="Major">
                                <label class="form-check-label" for="exampleRadios2">
                                    Major
                                </label>
                            </div>
                            <div class="form-check">
                                <input class="form-check-input" type="radio" name="accident" id="exampleRadios3" value="Minor">
                                <label class="form-check-label" for="exampleRadios2">
                                    Minor
                                </label>
                            </div>
                            <input type="text" class="form-control mb-1" placeholder="What kind of accident?(if yes) (optional)" name="accident_kind">
                        </div>

                        <div class="mb-4">
                            <label for="exampleInputEmail1" class="form-label">Any Disease?</label>
                            <div class="form-check">
                                <input class="form-check-input" type="radio" name="disease" id="exampleRadios1" value="None">
                                <label class="form-check-label" for="exampleRadios1">
                                    None
                                </label>
                            </div>
                            <div class="form-check">
                                <input class="form-check-input" type="radio" name="disease" id="exampleRadios2" value="Major">
                                <label class="form-check-label" for="exampleRadios2">
                                    Major
                                </label>
                            </div>
                            <div class="form-check">
                                <input class="form-check-input" type="radio" name="disease" id="exampleRadios3" value="Minor">
                                <label class="form-check-label" for="exampleRadios2">
                                    Minor
                                </label>
                            </div>
                            <input type="text" class="form-control mb-1" placeholder="What kind of Disease?(if yes) (optional)" name="disease_kind">
                        </div>
                        <div class="mb-4">
                            <label for="exampleInputEmail1" class="form-label">Any Recent Operation?</label>
                            <div class="form-check">
                                <input class="form-check-input" type="radio" name="operation" id="exampleRadios1" value="None">
                                <label class="form-check-label" for="exampleRadios1">
                                    None
                                </label>
                            </div>
                            <div class="form-check">
                                <input class="form-check-input" type="radio" name="operation" id="exampleRadios2" value="Major">
                                <label class="form-check-label" for="exampleRadios2">
                                    Major
                                </label>
                            </div>
                            <div class="form-check">
                                <input class="form-check-input" type="radio" name="operation" id="exampleRadios3" value="Minor">
                                <label class="form-check-label" for="exampleRadios2">
                                    Minor
                                </label>
                            </div>
                            <input type="text" class="form-control mb-1" placeholder="What kind of Operation?(if yes) (optional)" name="operation_kind">
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