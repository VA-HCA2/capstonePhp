<!doctype html>
<html lang="en">

<?php
    $title = "Add";
  ?>
  <?php include("inc/head.php"); ?>

<body>
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
        <section class="container col-md-5 formBorder mt-2">
            <h1 class="mb-3 text-center filterTitle">Add New Team</h1>
            <hr class="mb-4">
            <div class="row">
                <div class="col-md-12">
                    <!--Form-->
                    <form class="form " method="GET" id="newTeam" autocomplete="off">
                        <!--Dropdown to leagues-->
                        <div class="form-group row">
                            <label for="leaguesddl" class="col-sm-4 col-form-label font-weight-bold">Select League
                            </label>
                            <div class="col-sm-8">
                                <select class="custom-select " id="leaguesddl" name="leaguecode" autofocus>
                                    <option value="select a Location" selected disabled>Choose one</option>
                                </select>
                            </div>
                        </div>
                        <!-- End of dropdown-->
                        <!--Input fields-->
                        <div class="form-group row">
                            <label for="teamName" class="col-sm-4 col-form-label font-weight-bold">Team Name:</label>
                            <div class="col-sm-8">
                                <input type="text" class="form-control" id="teamName" name="teamname"
                                    placeholder="Enter Team Name">
                            </div>
                        </div>
                        <div class="form-group row">
                            <label for="managername" class="col-sm-4 col-form-label font-weight-bold"> Manager
                                Name:</label>
                            <div class="col-sm-8">
                                <input type="text" class="form-control" id="managername" name="managername" required
                                    autocomplete="off" placeholder="Enter Manager Name">
                            </div>
                        </div>
                        <div class="form-group row">
                            <label for="managerphone" class="col-sm-4 col-form-label font-weight-bold">Manager
                                Phone:</label>
                            <div class="col-sm-8">
                                <input type="text" class="form-control" id="managerphone" name="managerphone"
                                    autocomplete="off" placeholder="999-999-9999">
                            </div>
                        </div>
                        <div class="form-group row">
                            <label for="manageremail" class="col-sm-4 col-form-label font-weight-bold">Manager E-mail:
                            </label>
                            <div class="col-sm-8">
                                <input type="text" class="form-control" id="manageremail" name='manageremail'
                                    placeholder="email@email.com">
                            </div>
                        </div>
                        <div class="form-group row">
                            <label for="teammembers" class="col-sm-4 col-form-label font-weight-bold">Number of
                                Players:</label>
                            <div class="col-sm-8">
                                <input type="text" class="form-control" id="teammembers" name="maxteammembers"
                                    autocomplete="off" placeholder="Enter Number of Players">
                            </div>
                        </div>
                        <div class="form-group row">
                            <label for="minmemberage" class="col-sm-4 col-form-label font-weight-bold"> Minimum
                                Age:</label>
                            <div class="col-sm-8">
                                <input type="text" class="form-control" id="minmemberage" name="minmemberage"
                                    autocomplete="off" placeholder="Enter Minimum Age">
                            </div>
                        </div>
                        <div class="form-group row">
                            <label for="maxmemberage" class="col-sm-4 col-form-label font-weight-bold"> Maximum
                                Age:</label>
                            <div class="col-sm-8">
                                <input type="text" class="form-control" id="maxmemberage" name="maxmemberage"
                                    autocomplete="off" placeholder="Enter Maximum Age">
                            </div>
                        </div>
                        <div class="form-group row">
                            <label class="col-sm-4 col-form-label font-weight-bold">Team Gender:</label>
                            <!-- Radio Buttons for Gender-->
                            <div class="d-block">
                                <div class="custom-control custom-radio malediv">
                                    <div class="col-sm-8">
                                        <input class="custom-control-input" type="radio" name="teamgender" id="male"
                                            value="Male" checked>
                                        <label class="custom-control-label" for="male">Male</label>
                                    </div>
                                </div>
                                <div class="custom-control custom-radio femalediv">
                                    <div class="col-sm-8">
                                        <input class="custom-control-input" type="radio" name="teamgender" id="female"
                                            value="Female">
                                        <label class="custom-control-label" for="female">Female</label>
                                    </div>
                                </div>
                                <div class="custom-control custom-radio anydiv">
                                    <div class="col-sm-8">
                                        <input class="custom-control-input" type="radio" name="teamgender" id="any"
                                            value="Any">
                                        <label class="custom-control-label" for="any">Any</label>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!--Buttons-->
                        <div class="text-center">
                            <button id="addBtn" class="btn btn btn-primary" type="button">Add New Team</button>
                            <a href="leagues.php" class="btn btn-info active" role="button" aria-pressed="true">Go
                                Back</a>
                            <button type="reset" class="btn btn-danger" id="resetBtn">Reset</button>
                        </div>
                        <ul class="alert alert-danger my-2 text-center" id="errorTeam"></ul>
                    </form>
                </div>
            </div>
        </section>
    </main>
    <?php include("inc/footer.php"); ?>
    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <?php include("inc/scripts.php"); ?>
    <script src="scripts/addteam.js"></script>
    <script src="scripts/data.js"></script>
</body>

</html>