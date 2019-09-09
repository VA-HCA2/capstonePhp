<!doctype html>
<html lang="en">

<?php
    $title = "Register";
  ?>
  <head>
  <?php include("inc/head.php"); ?>
</head>
<body class="background">
    <!-- Navbar -->
    <nav class=" font-weight-bold d-flex  align-items-center px-md-2 mb-4 bg-white border-bottom shadow-sm ">
        <img src="images/logo.jpg" alt="logo">
        <a class="title my-0 mr-md-auto font-weight-normal text-decoration-none title" href="index.php">Soccer
            Academy</a>
        <div class="my-2 my-md-0 mr-md ">
            <a class="p-3 navLinks" href="index.php">Home</a>
            <a class="p-3 navLinks" href="Leagues.php">Leagues</a>
        </div>
    </nav>
    <main>
        <!--Form-->
        <section class="container col-md-5 formBorder mt-2">
            <h1 class="mb-3 text-center filterTitle">Register</h1>
            <hr class="mb-4">
            <div class="row">
                <div class="col-md-12">
                    <form class="form " method="GET" id="newPlayer" autocomplete="off">
                        <div class="form-group row">
                            <label class="col-sm-4 col-form-label font-weight-bold">Team Name:</label>
                            <div class="col-sm-8">
                                <input type="text" class="form-control" id="teamName" name="teamName" readonly>
                            </div>
                        </div>
                        <div class="form-group row">
                            <label for="memberName" class="col-sm-4 col-form-label font-weight-bold">Name:</label>
                            <div class="col-sm-8">
                                <input type="text" class="form-control" id="memberName" name="membername"
                                    placeholder="Enter Member Name" required autocomplete="off" autofocus>
                            </div>
                        </div>
                        <div class="form-group row">
                            <label for="contactName" class="col-sm-4 col-form-label font-weight-bold">Contact
                                Name:</label>
                            <div class="col-sm-8">
                                <input type="text" class="form-control" id="contactName" name="contactname"
                                    autocomplete="off" placeholder="Enter Contact Name">
                            </div>
                        </div>
                        <div class="form-group row">
                            <label for="email" class="col-sm-4 col-form-label font-weight-bold">Email Address: </label>
                            <div class="col-sm-8">
                                <input type="text" class="form-control" id="email" name='email'
                                    placeholder="email@mail.com">
                            </div>
                        </div>
                        <div class="form-group row">
                            <label for="phone" class="col-sm-4 col-form-label font-weight-bold">Phone Number:</label>
                            <div class="col-sm-8">
                                <input type="text" class="form-control" id="phone" name="phone" autocomplete="off"
                                    placeholder="999-999-9999">
                            </div>
                        </div>
                        <div class="form-group row">
                            <label for="age" class="col-sm-4 col-form-label font-weight-bold">Age:</label>
                            <div class="col-sm-8">
                                <input type="text" class="form-control" id="age" name="age" autocomplete="off"
                                    placeholder="Enter Age">
                            </div>
                        </div>

                        <!-- Radio Buttons for Gender-->
                        <div class="form-group row">
                            <label class="col-sm-4 col-form-label font-weight-bold">Gender:</label>
                            <div class="d-block">
                                <div class="custom-control custom-radio">
                                    <div class="col-sm-8">
                                        <input class="custom-control-input" type="radio" name="gender" id="male"
                                            value="Male">
                                        <label class="custom-control-label" for="male">Male</label>
                                    </div>
                                </div>
                                <div class="custom-control custom-radio">
                                    <div class="col-sm-8">
                                        <input class="custom-control-input" type="radio" name="gender" id="female"
                                            value="Female">
                                        <label class="custom-control-label" for="female">Female</label>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="text-center">
                            <button id="registerBtn" class="btn btn btn-primary" type="button">Register to
                                Team</button>
                            <a href="#" class="btn btn-info active" role="button" aria-pressed="true" id="returnBtn">Go
                                Back</a>
                            <button type="reset" class="btn btn-danger" id="resetBtn">Reset</button>
                        </div>
                        <div class="alert alert-danger my-2 text-center hide" id="numOfPlayers" role="alert"></div>
                        <ul class="alert alert-danger my-2 text-center" id="error"></ul>
                    </form>
                </div>
            </div>
        </section>
    </main>
    <?php include("inc/footer.php"); ?>
    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <?php include("inc/scripts.php"); ?>
    <script src="scripts/register.js"></script>
    <script src="scripts/data.js"></script>
</body>

</html>