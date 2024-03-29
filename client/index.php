<!doctype html>
<html lang="en">
<?php
    $title = "Home";
  ?>
  <head>
  <?php include("inc/head.php"); ?>
</head>
<body>
    <!-- Navbar-->
<?php include("inc/nav.php"); ?>
    <main>
        <section class="home">
            <!-- Carousel-->
            <div id="myCarousel" class="carousel slide home" data-ride="carousel">
                <ol class="carousel-indicators">
                    <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
                    <li data-target="#myCarousel" data-slide-to="1"></li>
                    <li data-target="#myCarousel" data-slide-to="2"></li>
                    <li data-target="#myCarousel" data-slide-to="3"></li>
                </ol>
                <div class="carousel-inner">
                    <div class="carousel-item active">
                        <img class="first-slide" src="images/socceracademy.jpg" alt="player cover">
                        <div class="container">
                            <div class="carousel-caption text-left">
                                <h1 class="leaguePara">Inside our hearts, the passion of a champion.</h1>
                            </div>
                        </div>
                    </div>
                    <div class="carousel-item">
                        <img class="second-slide imgs" src="images/girlssoccer.jpg" alt="girls soccer">
                        <div class="container">
                            <div class="carousel-caption text-left">
                                <h2 class="leaguePara2">Teams </h2>
                            </div>
                        </div>
                    </div>
                    <div class="carousel-item">
                        <img class="third-slide imgs" src="images/boyssoccer.jpg" alt="boys soccer">
                        <div class="container">
                            <div class="carousel-caption text-left">
                                <h3 class="leaguePara2"> Teams</h3>
                            </div>
                        </div>
                    </div>
                    <div class="carousel-item">
                        <img class="fourth-slide imgs" src="images/banner.jpg" alt="marketing banner soccer">
                        <div class="container ">
                            <div class="carousel-caption text-left">
                                <p><a class="btn btn-lg btn-primary" href="leagues.php" role="button">Sign up today</a>
                                </p>
                            </div>
                        </div>
                    </div>
                </div>

                <a class="carousel-control-prev" href="#myCarousel" role="button" data-slide="prev">
                    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                    <span class="sr-only">Previous</span>
                </a>
                <a class="carousel-control-next" href="#myCarousel" role="button" data-slide="next">
                    <span class="carousel-control-next-icon" aria-hidden="true"></span>
                    <span class="sr-only">Next</span>
                </a>
            </div>

            <!--end carousel -->
            <!-- Parallax-->
            <div>
                <h4 class="text-center filterTitle mb-5">Leagues Information</h4>
            </div>

            <div class="bgimg-1">
                <div class="caption">
                    <span class="border font-weight-bold" id="parallaxTitle">Connecticut Junior League</span>
                </div>
            </div>

            <div>
                <div class="para font-weight-bold">
                    <p> This league is designated for male all ages.If you have a team already, you can sign up your
                        team for a league or
                        if you are an individual looking to play you can sign up for multi sessions or drop in, paying a
                        single play fee and we
                        will get you on a team.</p>
                    <a class="btn btn-primary" href="leagues.php" role="button">Sign up today</a>
                </div>
            </div>

            <div class="bgimg-2">
                <div class="caption">
                    <span class="border font-weight-bold" id="parallaxTitle2">Women Texas Soccer League</span>
                </div>
            </div>

            <div>
                <div class="para font-weight-bold">
                    <p>This league is designated for female all ages.This is a great way to meet new people, get fit,
                        have fun and dust off your soccer skiills, whether
                        you played in your youth, teen years or at college.</p>
                    <a class="btn btn-primary" href="league.php" role="button">Sign up today</a>
                </div>
            </div>

            <div class="bgimg-3">
                <div class="caption">
                    <span class="border font-weight-bold" id="parallaxTitle3">International Soccer League</span>
                </div>
            </div>

            <div>
                <div class="para font-weight-bold">
                    <p> This league is designated for male and female of all ages. The morning sessions are dedicated to
                        improving
                        individual technical skills, including dribbling, passing, receiving, shooting, heading,
                        tackling and throw-ins, as well as individual decision making. The afternoon sessions are
                        dedicated to enhancing tactical awareness.</p>
                    <a class="btn btn-primary" href="leagues.php" role="button">Sign up today</a>
                </div>
            </div>
        </section>
    </main>
    <?php include("inc/footer.php"); ?>
    <!-- Optional JavaScript -->
    <?php include("inc/scripts.php"); ?>
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
</body>

</html>