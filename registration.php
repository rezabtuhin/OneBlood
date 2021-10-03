


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
    <title>Registration</title>
    <link rel="shortcut icon" href="images/oneblood.png">
    
</head> 
<body>
    <div  style="font-family: 'Poppins', sans-serif; font-weight:400">
        <header class="sticky-top">
            <nav class = "navbar navbar-expand-sm bg-dark">
                <a href="index.php" class = "navbar-brand" style="font-weight:700;">
                    ONEBLOOD
                </a>
            </nav>
        </header>

        <div class="su-inner-banner-area bg-primary">
            <div class="container">
                <div class="row text-center">
                    <div class="col-12 col-sm-6 col-lg-5 col-xl-4 m-auto">
                        <h3 class="text-left" style="font-size:30px;font-family: 'Poppins', sans-serif; font-weight:700; color:azure;"> Register New</h3>
                    </div>
                    <div class="col-12 col-sm-6 col-lg-5 col-xl-4 m-auto pt-4 pt-sm-0">
                        <div class="su-inner-banner-img"><img alt="image" class="img-fluid" src="images/new-user.png"></div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Banner -->

        <form action = "connect.php" method = "post" name = "myform" class = "form-group">
            <div class="row jumbotron">
                <div class="col-md-6">
                    <label for="inputname">First Name</label>
                    <input type="text" class="form-control" placeholder="First Name" id ="firstname" name="firstname" required>
                </div>
                <div class="col-md-6">
                    <label for="inputname">Last Name</label>
                    <input type="text" class="form-control" placeholder="Last Name" id ="lastname" name="lastname" required>
                </div>
                <div class="col-md-6">
                    <label for="inputname">Phone</label>
                    <input type="text" class="form-control" placeholder="eg: 17XXXXXXXX" id ="phone" name="phone" required>
                </div>
                <div class="col-md-6">
                    <label for="inputname">Email</label>
                    <input type="text" class="form-control" placeholder="Email" id ="email" name="email">
                </div>
                <div class="col-md-3">
                    <label for="inputname">Birthdate</label><br>
                    <input class = "col-md-4" type="text" class="form-control" placeholder="Day" id ="day" name="day" required>
                    <input class = "col-md-4" type="text" class="form-control" placeholder="Month" id ="month" name="month" required>
                    <input class = "col-md-3" type="text" class="form-control" placeholder="Year" id ="year" name="year" required>
                </div>
                <div class="col-md-3">
                    <label for="inputname">Gender</label><br>
                    <div class="form-check form-check-inline">
                        <input class="form-check-input" type="radio" name="gender" id="male" value="m">
                        <label class="form-check-label" for="inlineRadio1">Male</label>
                      </div>
                      <div class="form-check form-check-inline">
                        <input class="form-check-input" type="radio" name="gender" id="female" value="f">
                        <label class="form-check-label" for="inlineRadio2">Female</label>
                      </div>
                      <div class="form-check form-check-inline">
                        <input class="form-check-input" type="radio" name="gender" id="others" value="o" >
                        <label class="form-check-label" for="inlineRadio3">Others</label>
                      </div>
                    </div>
                    <div class="col-md-3">
                        <label for="inputname">Height</label><br>
                        <input class = "col-md-6" type="text" class="form-control" placeholder="Feet" id ="feet" name ="feet" required>
                        <input class = "col-md-5" type="text" class="form-control" placeholder="Inches" id = "inches" name = "inches"required>
                    </div>
                    <div class="col-md-3">
                        <label for="inputname">Blood Group</label><br>
                        <select class="form-select" aria-label="Default select example" name = "bloodgroup" required>
                            <option selected disabled>Open this select menu</option>
                            <option value="A+">A+</option>
                            <option value="A-">A-</option>
                            <option value="B+">B+</option>
                            <option value="B-">B-</option>
                            <option value="O+">O+</option>
                            <option value="O-">O-</option>
                            <option value="AB+">AB+</option>
                            <option value="AB-">AB-</option>
                        </select>
                        <!-- <input type="text" class="form-control" placeholder="Blood Group" id = "bloodgroup" name = "bloodgroup" required> -->
                    </div>
                    <div class="col-md-6">
                        <label for="inputname">Address 1</label>
                        <input type="text" class="form-control" placeholder="Zilla" id ="zilla" name = "zilla" required>
                    </div>
                    <div class="col-md-6">
                        <label for="inputname">Address 2</label>
                        <input type="text" class="form-control" placeholder="Upazilla" id ="upazilla" name = "upazilla" required>
                    </div>
                    <div class="col-md-6">
                        <label for="inputname">Password</label>
                        <input type="password" class="form-control" placeholder="Password" id ="password" name = "password" required>
                    </div>
                    <div class="col-md-6">
                        <label for="inputname">Confirm Password</label>
                        <input type="password" class="form-control" placeholder="Confirm Password" id ="conpass" name = "conpass" required>
                    </div>
                    <div class="col-md-12" style="text-align:center; margin-top: 20px;">
                        <button type="submit" class="w-100 btn btn-primary">Submit</button>
                        <p class="my-3 text-center">Already a Member? <a href="login.php">Log in now!</a> </p>
                    </div>
                    
                </div>
                
            </div>
        </form>
    </div>
    
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
</body>
</html>