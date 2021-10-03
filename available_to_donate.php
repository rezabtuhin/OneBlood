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
    <title>Available to Donate</title>
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
                        <h3 class="text-left" style="font-size:30px;font-family: 'Poppins', sans-serif; font-weight:700; color:azure;"> Available To Donate</h3>
                    </div>
                    <div class="col-12 col-sm-6 col-lg-5 col-xl-4 m-auto pt-4 pt-sm-0">
                        <div class="su-inner-banner-img"><img alt="image" class="img-fluid" src="images/bloo_drop.png"></div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Banner -->

        <section class="container-fluid">
            <?php

            $qu1 = "SELECT * FROM registration WHERE phone = '$user'";
            $con = new mysqli('localhost', 'root', '', 'oneblood');
            $values = mysqli_query($con, $qu1);
            $bg = "";
            $gender = "";
            while ($row = mysqli_fetch_assoc($values)) {
                $bg = $row['bg'];
                $gender = $row['gender'];
            }
            ?>
            <table class="table my-3">
                <thead class="thead-dark">
                    <th>First Name</th>
                    <th>Last Name</th>
                    <th>Phone Number</th>
                    <th>Zilla</th>
                    <th>Upazilla</th>
                    <th>Blood Group</th>
                    <th>Quatity</th>
                    <th>Ruqest Type</th>
                    <th>Action</th>
                </thead>
                <?php
                $qu2 = "SELECT req_id,firstname,lastname,phone_n,zilla,upazilla,bloodGroup,quantity,requestType
                    FROM blood_requests
                    RIGHT JOIN registration
                    ON blood_requests.id = registration.id
                    WHERE bloodGroup = '$bg';";
                $val2 = mysqli_query($con, $qu2);
                while ($row = mysqli_fetch_assoc($val2)) {
                    $req_id = $row['req_id'];
                    $firstname = $row['firstname'];
                    $lastname = $row['lastname'];
                    $phone_n = $row['phone_n'];
                    $zilla = $row['zilla'];
                    $upazilla = $row['upazilla'];
                    $bloodGroup = $row['bloodGroup'];
                    $quantity = $row['quantity'];
                    $requestType = $row['requestType'];
                ?>
                    <tbody>
                        <tr>
                            <td><?php echo $firstname; ?></td>
                            <td><?php echo $lastname; ?></td>
                            <td><?php echo $phone_n; ?></td>
                            <td><?php echo $zilla; ?></td>
                            <td><?php echo $upazilla; ?></td>
                            <td><?php echo $bloodGroup; ?></td>
                            <td><?php echo $quantity; ?></td>
                            <td><?php echo $requestType; ?></td>
                            <?php
                            if ($gender == 'm') {
                            ?>
                                <td><a href="blood_don_reg_M.php?phone=<?php echo $user ?>&blodr=<?php echo $req_id ?>">Donate</a></td>
                            <?php
                            } else {
                            ?>
                                <td><a href="blood_don_req_F.php?phone=<?php echo $user ?>&blodr=<?php echo $req_id ?>">Donate</a></td>
                            <?php

                            }
                            ?>


                        </tr>
                    </tbody>
                <?php
                }
                ?>
            </table>

        </section>

    </div>
    <script src="js/bootstrap.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
</body>

</html>