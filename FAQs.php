<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <link rel="stylesheet" href="css/bootstrap.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;500;600;700;800&display=swap" rel="stylesheet">
    <title>FAQs</title>
    <link rel="shortcut icon" href="images/oneblood.png">

</head>

<body style="margin:0px; padding:0px;">
    <!-- Navigation Bar -->
    <header class="sticky-top">
        <nav class="navbar navbar-expand-sm bg-dark">
            <a href="index.php" class="navbar-brand text-danger" style="font-weight:700;">
                ONEBLOOD
            </a>
        </nav>
    </header>
    <!-- Navigation Bar -->
    <div style="font-family: 'Poppins', sans-serif; font-weight:400">




        <!-- Banner -->
        <div class="su-inner-banner-area bg-primary">
            <div class="container">
                <div class="row text-center">
                    <div class="col-12 col-sm-6 col-lg-5 col-xl-4 m-auto">
                        <h3 class="text-left" style="font-size:30px;font-family: 'Poppins', sans-serif; font-weight:700; color:azure;"> Frequently Asked Questions</h3>
                    </div>
                    <div class="col-12 col-sm-6 col-lg-5 col-xl-4 m-auto pt-4 pt-sm-0">
                        <div class="su-inner-banner-img"><img alt="image" class="img-fluid" src="new-faq-circle.172e4db5.png"></div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Banner -->

        <!-- About the page. What this page actually contains -->
        <div class="row align-items-center my-5">
            <div class="container">
                <div class="su-faq-page-header">
                    <p class="text-left">Various questions and answers related to registration, next steps, log in, donate blood, donation queries, health issues, donation prerequisites, blood donation side effects, drugs side effect etc. can be found in the following section.</p>
                </div>
            </div>
        </div>
        <!-- About the page. What this page actually contains -->


        <!-- Questions and answers portion caution -->
        <div class="container pb-5">
            <div class="su-faq-title mb-4">
                <h4>
                    <img src="bar.jpg" alt="" style="width: 0.6%; height: auto;">
                    Frequently Asked Questions about Blood Donation and Donation Services
                </h4>
                </h4>
            </div>
        </div>
        <!-- Questions and answers portion caution -->


        <!-- Data retreive from database php connection code -->
        <?php
        $connection = mysqli_connect('localhost', 'root', '', 'oneblood');
        $query = "SELECT * FROM faqs";
        $values = mysqli_query($connection, $query);
        ?>
        <!-- Data retreive from database php connection code -->




        <!-- Data storing inside variables and putting into cards -->
        <?php
        while ($row = mysqli_fetch_assoc($values)) {
            $fullname = $row['fullname'];
            $questions = $row['questions'];
            $answers = $row['answers'];
        ?>


            <!-- Cards with questions and answers directly from database -->
            <div class="container pb-5">
                <div class="row">
                    <div class="col-lg-8">
                        <div class="accordion" id="accordionExample">
                            <dic class="card">
                                <div class="card-header" id="headingOne">
                                    <h2 class="clearfix mb-0">
                                        <a class="btn btn-link collapsed" data-toggle="collapse" data-target="#collapseOne" aria-expanded="true" aria-controls="collapseOne"><?php echo $questions; ?></a>
                                    </h2>
                                </div>
                                <div class="card-body">
                                    <p style="font-weight:800;">
                                        Answer:
                                    </p>
                                    <?php echo $answers ?>
                                </div>
                                <div class="card-footer text-right" id="headingOne">
                                    <h6 style="font-size: 12px">
                                        Question By: <?php echo $fullname ?>
                                    </h6>
                                </div>
                            </dic>
                        </div>
                    </div>
                </div>
            </div>
            <!-- Cards with questions and answers directly from database -->



        <?php
        }
        ?>
        <!-- Data storing inside variables and putting into cards -->




        <div class="container pb-5">
            <div class="title text-center my-3">
                <h5 class="bg-primary text-white">
                    Send Us your Querries
                </h5>
            </div>
        </div>



        <!-- Requires external php file name: connect_faq.php -->
        <div class="container pb-5">
            <form action="connect_faq.php" method="post" name="myform">

                <div class="form-group">
                    <label for="fullname">Fullname</label>
                    <input type="text" class="form-control" placeholder="Fullname" id="fullname" name="fullname" required>
                </div>
                <div class="form-group">
                    <label for="email">Email</label>
                    <input type="email" class="form-control" placeholder="Email" id="email" name="email" required>
                </div>
                <div class="form-group">
                    <label for="Questions">Your Questions</label>
                    <textarea name="questions" class="form-control" placeholder="Questions" id="ques" cols="30" rows="5" name="questions" required></textarea>
                </div>
                <div class="form-group">
                    <button class="w-100 btn btn-lg btn-primary" type="submit">Send</button>
                </div>
            </form>
        </div>
        <!-- Requires external php file name: connect_faq.php -->

    </div>


    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
</body>

</html>