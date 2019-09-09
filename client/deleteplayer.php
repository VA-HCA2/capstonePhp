<!doctype html>
<html lang="en">
<?php $title = "Delete";?>
<head>
  <?php include("inc/head.php"); ?>
</head>
<body>
    <!-- Navbar -->
    <?php include("inc/nav.php"); ?>
    <!-- End of navbar-->
    <main>
        <section class="container col-md-5 formBorder mt-2">
            <h1 class="mb-3 text-center filterTitle">Delete Player</h1>
            <hr class="mb-4">
            <div class="row">
                <div class="col-md-12">
                    <!-- Start of my Form-->
                    <form class="form " method="GET" id="deletePlayer" autocomplete="off">
                        <div class="form-group row">
                            <label for="teamid" class="col-sm-4 col-form-label font-weight-bold hide">Team Id:</label>
                            <div class="col-sm-8">
                                <input type="text" class="form-control hide" id="teamid" name="teamid" readonly>
                            </div>
                        </div>
                        <div class="form-group row">
                            <label for="memberid" class="col-sm-4 col-form-label font-weight-bold hide">Player
                                Id:</label>
                            <div class="col-sm-8">
                                <input type="text" class="form-control hide" id="memberid" name="memberid" readonly>
                            </div>
                        </div>
                        <div class="form-group row">
                            <label for="teamName" class="col-sm-4 col-form-label font-weight-bold">Team Name:</label>
                            <div class="col-sm-8">
                                <input type="text" class="form-control" id="teamName" name="teamname" readonly>
                            </div>
                        </div>
                        <div class="form-group row">
                            <label for="memberName" class="col-sm-4 col-form-label font-weight-bold">Name:</label>
                            <div class="col-sm-8">
                                <input type="text" class="form-control" id="memberName" name="membername"
                                    autocomplete="off" readonly>
                            </div>
                        </div>
                        <div class="form-group row">
                            <label for="email" class="col-sm-4 col-form-label font-weight-bold">Email Address: </label>
                            <div class="col-sm-8">
                                <input type="text" class="form-control" id="email" name='email' readonly>
                            </div>
                        </div>
                        <!--end of form-->
                        <!-- Buttons-->
                        <div class="text-center">
                            <button id="deleteBtn" class="btn btn btn-danger" type="button">Delete</button>
                            <a href="#" class="btn btn-info active" role="button" aria-pressed="true" id="returnBtn">Go
                                Back</a>
                        </div>
                    </form>
                </div>
            </div>
        </section>
    </main>
    <?php include("inc/footer.php"); ?>
    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <?php include("inc/scripts.php"); ?>
    <script src="scripts/deleteplayer.js"></script>
</body>

</html>