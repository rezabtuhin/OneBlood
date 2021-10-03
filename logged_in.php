<?php
    $phone = $_REQUEST['phone'];
?>

<!DOCTYPE html>
    <html lang="en" dir="ltr">

    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>OneBlood</title>
        <link rel="shortcut icon" href="images/oneblood.png">
        <link rel="stylesheet" href="css/style.css">
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.14.0/css/all.min.css">
    </head>

    <body>

        <header>
            <a href="#" class="brand">OneBlood</a>
            <div class="menu-btn"></div>
            <div class="navigation">
                <div class="navigation-items">
                    <a href="#">Home</a>
                    <a href="#">Our Vision</a>
                    <a href="available_to_donate.php?phone=<?php echo $phone?>">Donate Blood</a>
                    <a href="FAQs_ano.php?phone=<?php echo $phone?>">FAQ's</a>
                    <a href="#">Contact</a>
                </div>
            </div>
        </header>

        <section class="home">
            <video class="video-slide active" src="22.mp4" autoplay muted loop></video>
            <div class="overlay"></div>
            <video class="video-slide" src="main.mp4" autoplay muted loop></video>
            <video class="video-slide" src="33.mp4" autoplay muted loop></video>
            <div class="content active">
                <h1 style="color: black">ONE LIFE ONE BLOOD</h1>
                <p style="color: black; font-weight: 400;">
                </p>

            </div>
            <div class="content">
                <h1>EVERY BLOOD DONOR IS A HERO</h1>
                <p></p>

            </div>
            <div class="content">
                <h1>DONATE BLOOD.<br><span>Give life to Someone!</span></h1>
                <p></p>

            </div>

            <div class="media-icons">
                <a href="#"><i class="fab fa-facebook-f"></i></a>
                <a href="#"><i class="fab fa-instagram"></i></a>
                <a href="#"><i class="fab fa-twitter"></i></a>
            </div>
            <div class="slider-navigation">
                <div class="nav-btn active"></div>
                <div class="nav-btn"></div>
                <div class="nav-btn"></div>
            </div>
        </section>


        <section>
            <div class="html1">
                <div class="card">
                    <div class="card-image"></div>
                    <div class="card-text">
                        <h2>Request for blood</h2>

                    </div>
                    <div class="card-stats">
                        <div class="stat">
                            <div class="value"><a href="Blood_req.php?phone=<?php echo $phone?>" rel="noopener noreferrer">Submit</a></div>
                            <!-- <div class="type">read</div>
 -->
                        </div>
                        <!-- <div class="stat border">
          <div class="value">5123</div>
          <div class="type">views</div>
        </div>
        <div class="stat">
          <div class="value">32</div>
          <div class="type">comments</div>
        </div> -->
                    </div>
                </div>
                <div class="card">
                    <div class="card-image card2"></div>
                    <div class="card-text card2">
                        <h2>be a donor</h2>
                    </div>
                    <div class="card-stats card2">
                        <div class="stat">
                            <div class="value"><a href="available_to_donate.php?phone=<?php echo $phone?>" rel="noopener noreferrer">Submit</a></div>
                            <!-- <div class="type">read</div> -->
                        </div>
                        <!-- <div class="stat border">
          <div class="value">7152</div>
          <div class="type">views</div>
        </div>
        <div class="stat">
          <div class="value">21</div>
          <div class="type">comments</div>
        </div> -->
                    </div>
                </div>
                <div class="card">
                    <div class="card-image card3"></div>
                    <div class="card-text card3">
                        <h2>Create Blood Bank</h2>

                    </div>
                    <div class="card-stats card3">
                        <div class="stat">
                            <div class="value"><a href="personal_blood_bank.php?phone=<?php echo $phone ?>" rel="noopener noreferrer">Submit</a></div>
                            <!-- <div class="type">read</div> -->
                        </div>
                        <!-- <div class="stat border">
            <div class="value">3021</div>
            <div class="type">views</div>
          </div>
          <div class="stat">
            <div class="value">15</div>
            <div class="type">comments</div>
          </div> -->
                    </div>
                </div>
            </div>
            </div>

            <style>
                .html1 {
                    width: 100%;
                    height: 100vh;
                    display: flex;
                    align-items: center;
                    justify-content: center;
                    background: url("background.jpg");
                    overflow: hidden;
                }

                .html1 .card {
                    display: grid;
                    grid-template-columns: 300px;
                    grid-template-rows: 180px 150px 80px;
                    grid-template-areas: "image""text""stats";

                    border-radius: 18px;
                    background: white;
                    box-shadow: 5px 5px 15px rgba(0, 0, 0, 0.9);
                    font-family: roboto;
                    text-align: center;


                    transition: 0.5s ease;

                    margin: 30px;
                }

                .card-image {
                    grid-area: image;
                    background: url("img1.jpg");
                    border-top-left-radius: 15px;
                    border-top-right-radius: 15px;
                    background-size: cover;
                }

                .card-text {
                    grid-area: text;
                    margin: 25px;
                }

                .card-text .date {
                    color: rgb(255, 7, 110);
                    font-size: 13px;
                }

                .card-text p {
                    color: grey;
                    font-size: 10px;
                    font-weight: 300;
                }

                .card-text h2 {
                    margin-top: 0px;
                    font-size: 28px;
                }

                .card-stats {
                    grid-area: stats;
                    display: center;
                    /*grid-template-columns: 1fr 1fr 1fr;
  grid-template-rows: 1fr;*/
                    border-bottom-left-radius: 15px;
                    border-bottom-right-radius: 15px;
                    background: #fff;
                }

                .card-stats .stat {
                    padding: 10px;
                    display: flex;
                    align-items: center;
                    justify-content: center;
                    flex-direction: column;
                    color: rgb(24, 19, 19);
                }

                .card-stats .border {
                    border-left: 1px solid rgb(172, 26, 87);
                    border-right: 1px solid rgb(172, 26, 87);

                }

                .card-stats .value {
                    font-size: 22px;
                    font-weight: 500;

                    padding: 10px 20px;

                }

                .card-stats .value a {
                    background-color: rgb(199, 10, 10);
                    border-radius: 1px;

                    padding: 10px 20px;
                    text-decoration: none;
                    border-radius: 1px;
                    color: #fff;

                }

                .card-stats .value sup {
                    font-size: 12px;
                }

                .card-stats .type {
                    font-size: 11px;
                    font-weight: 300;
                    text-transform: uppercase;
                }

                /* .card:hover {
        transform: scale(1.15);
        box-shadow: 5px 5px 15px rgba(0, 0, 0, 0.6);
      } */

                /*card2*/
                .card-image.card2 {
                    background: url("img2.jpg");
                    background-size: cover;
                }

                .card-text.card2 .date {
                    color: rgb(255, 77, 7);
                }

                .card-stats.card2 .border {
                    border-left: 1px solid rgb(185, 67, 20);
                    border-right: 1px solid rgb(185, 67, 20);
                }

                .card-stats.card2 {
                    background: rgb(255, 255, 255);
                }

                /*card3*/
                .card-image.card3 {
                    background: url("img3.jpg");
                    background-size: cover;
                }

                .card-text.card3 .date {
                    color: rgb(0, 189, 63);
                }

                .card-stats.card3 .border {
                    border-left: 1px solid rgb(14, 122, 50);
                    border-right: 1px solid rgb(14, 122, 50);
                }

                .card-stats.card3 {
                    background: rgb(255, 255, 255);
                }
            </style>
        </section>

        <script type="text/javascript">
            //Javacript for responsive navigation menu
            const menuBtn = document.querySelector(".menu-btn");
            const navigation = document.querySelector(".navigation");

            menuBtn.addEventListener("click", () => {
                menuBtn.classList.toggle("active");
                navigation.classList.toggle("active");
            });

            //Javacript for video slider navigation
            const btns = document.querySelectorAll(".nav-btn");
            const slides = document.querySelectorAll(".video-slide");
            const contents = document.querySelectorAll(".content");

            var sliderNav = function(manual) {
                btns.forEach((btn) => {
                    btn.classList.remove("active");
                });

                slides.forEach((slide) => {
                    slide.classList.remove("active");
                });

                contents.forEach((content) => {
                    content.classList.remove("active");
                });

                btns[manual].classList.add("active");
                slides[manual].classList.add("active");
                contents[manual].classList.add("active");
            }

            btns.forEach((btn, i) => {
                btn.addEventListener("click", () => {
                    sliderNav(i);
                });
            });
        </script>

        <div class="footer">
            <div class="container">
                <div class="row">
                    <div class="footer-col1">
                        <h3>Download Our App</h3>
                        <p>Download App for Android and ios mobile phone</p>
                        <div class="app-logo">
                            <img src="images/play-store.png">
                            <img src="images/app-store.png">
                        </div>
                    </div>
                    <div class="footer-col2">
                        <img src="images/oneblood.png">
                        <!-- <p>Our purpose is to sustainbly Make the Pleasure and Benefits of Sports Accessible to the Many.</p> -->
                    </div>
                    <div class="footer-col3">
                        <h3>Useful Links</h3>
                        <ul>
                            <li>Coupons</li>
                            <li>Blog Post</li>
                            <li>Return Policy</li>
                            <li>Join Affiliate</li>
                        </ul>
                    </div>
                    <div class="footer-col4">
                        <h3>Follow us</h3>
                        <ul>
                            <li>Facebook</li>
                            <li>Twitter</li>
                            <li>Instragram</li>
                        </ul>
                    </div>
                </div>
                <hr>
                <p class="copyright">Developed by DedSec™</p>
                <a href="index.php">Log Out</a>
            </div>
        </div>

    </body>

    </html>