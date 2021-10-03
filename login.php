<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;500;600;700;800&display=swap" rel="stylesheet">
    <title>Log In</title>
    <link rel="shortcut icon" href="images/oneblood.png">
</head>

<body>
    <div style="font-family: 'Poppins', sans-serif; font-weight:400">
        <header class=" bg-dark">
            <nav class="navbar navbar-expand-sm">
                <a href="index.php" class="navbar-brand" style="font-weight:700;">
                    ONEBLOOD
                </a>
            </nav>
        </header>
        <div class="su-inner-banner-area bg-primary">
            <div class="container">
                <div class="row text-center">
                    <div class="col-12 col-sm-6 col-lg-5 col-xl-4 m-auto">
                        <h3 class="text-left" style="font-size:30px;font-family: 'Poppins', sans-serif; font-weight:700; color:azure;"> Log In</h3>
                    </div>
                    <div class="col-12 col-sm-6 col-lg-5 col-xl-4 m-auto pt-4 pt-sm-0">
                        <div class="su-inner-banner-img"><img alt="image" class="img-fluid" src="images/log in.png"></div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Banner -->
        <section class="container-fluid">
            <section class="row jumbotron justify-content-center">
                <section class="col-l4 col-sm-6 col-md-3">
                    <form action="connect_login.php" method="post" name="myform">
                        <div class="mb-4">
                            <label for="exampleInputEmail1" class="form-label">Phone Number</label>
                            <input type="text" class="form-control" placeholder="eg: 17XXXXXXXX" name="phone">
                        </div>
                        <div class="mb-4">
                            <label for="exampleInputPassword1" class="form-label">Password</label>
                            <input type="password" class="form-control" placeholder="password" name="password">
                        </div>
                        <button class="w-100 btn btn-lg btn-primary" type="submit" name="login" >Log in</button>
                        <p class="my-3 text-center">Not a Member? <a href="registration.php">Sign Up Here!</a> </p>
                    </form>
                </section>
            </section>
        </section>

    </div>

    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
</body>

</html>