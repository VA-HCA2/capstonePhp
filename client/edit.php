<!doctype html>
<html lang="en">

<?php
    $title = "Edit";
  ?>
  <head>
  <?php include("inc/head.php"); ?>
</head>
<body>
    <!-- Navbar -->
    <?php include("inc/nav.php"); ?>
    <!-- End of navbar-->
    <main>
        <section class="container col-md-5 formBorder mt-2">
            <h1 class="mb-3 text-center filterTitle">Edit Team</h1>
            <hr class="mb-4">
            <div class="row">
                <div class="col-md-12">
                    <!-- Start of Form-->
                    <form class="form " method="GET" id="editTeam" autocomplete="off">
                        <div class="form-group row">
                            <label for="teamid" class="col-sm-4 col-form-label font-weight-bold">Team ID:</label>
                            <div class="col-sm-8">
                                <input type="text" class="form-control" id="teamid" name="teamid" readonly>
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="leaguecode" class="col-sm-4 col-form-label font-weight-bold">League:</label>
                            <div class="col-sm-8">
                                <input type="text" class="form-control" id="leaguecode" name="leaguecode" readonly>
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="teamName" class="col-sm-4 col-form-label font-weight-bold">Team Name:</label>
                            <div class="col-sm-8">
                                <input type="text" class="form-control" id="teamName" name="teamname" autofocus>
                            </div>
                        </div>
                        <div class="form-group row">
                            <label for="managername" class="col-sm-4 col-form-label font-weight-bold"> Manager
                                Name:</label>
                            <div class="col-sm-8">
                                <input type="text" class="form-control" id="managername" name="managername" required
                                    autocomplete="off">
                            </div>
                        </div>
                        <div class="form-group row">
                            <label for="managerphone" class="col-sm-4 col-form-label font-weight-bold">Manager
                                Phone:</label>
                            <div class="col-sm-8">
                                <input type="text" class="form-control" id="managerphone" name="managerphone"
                                    autocomplete="off">
                            </div>
                        </div>
                        <div class="form-group row">
                            <label for="manageremail" class="col-sm-4 col-form-label font-weight-bold">Manager E-mail:
                            </label>
                            <div class="col-sm-8">
                                <input type="text" class="form-control" id="manageremail" name='manageremail'>
                            </div>
                        </div>
                        <div class="form-group row">
                            <label for="teammembers" class="col-sm-4 col-form-label font-weight-bold">Number of
                                Players:</label>
                            <div class="col-sm-8">
                                <input type="text" class="form-control" id="teammembers" name="maxteammembers"
                                    autocomplete="off">
                            </div>
                        </div>
                        <div class="form-group row">
                            <label for="minmemberage" class="col-sm-4 col-form-label font-weight-bold"> Minimum
                                Age:</label>
                            <div class="col-sm-8">
                                <input type="text" class="form-control" id="minmemberage" name="minmemberage"
                                    autocomplete="off">
                            </div>
                        </div>
                        <div class="form-group row">
                            <label for="maxmemberage" class="col-sm-4 col-form-label font-weight-bold"> Maximum
                                Age:</label>
                            <div class="col-sm-8">
                                <input type="text" class="form-control" id="maxmemberage" name="maxmemberage"
                                    autocomplete="off">
                            </div>
                        </div>
                        <div class="form-group row">
                            <label for="teamgender" class="col-sm-4 col-form-label font-weight-bold">Gender: </label>
                            <div class="col-sm-8">
                                <input type="text" class="form-control" id="teamgender" name="teamgender"
                                    autocomplete="off" readonly>
                            </div>
                        </div>
                        <!--Buttons-->
                        <div class="text-center">
                            <button id="editBttn" class="btn btn btn-primary" type="button">Save Changes</button>
                            <a href="#" class="btn btn-info active" role="button" aria-pressed="true" id="returnBtn">Go
                                Back</a>
                            <button type="button" class="btn btn-danger" id="resetBtn">Reset</button>
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
    <script src="scripts/edit.js"></script>
</body>

</html>