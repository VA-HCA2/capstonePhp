<!doctype html>
<html lang="en">
<?php
    $title = "Details";
  ?>
  <head>
  <?php include("inc/head.php"); ?>
  <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.0.8/css/all.css">
</head>
<body>
    <!-- Navbar -->
    <?php include("inc/nav.php"); ?>
    <main>
        <div class="text-center mt-5">
            <h1 class="filterTitle ">Team Details</h1>
        </div>

        <div class="container">
            <!--Form-->
            <form class="form " autocomplete="off" method="GET">
                <!--Table for Course Details-->
                <div>
                    <table class=" table-striped container table table-sm col-7 table-bordered mt-5">
                        <tbody id="detailsTable">
                        </tbody>
                    </table>
                </div>
                <!--Anchor tags for register and go back-->
                <div class="col-12 text-center">
                    <a href="" id="registerButton" class="btn btn-primary ">Register </a>
                    <a href="leagues.php" class="btn btn-info active " role="button" aria-pressed="true">Go Back</a>
                </div>
                <!--Div to hide if there are not students-->
                <div id="studentsHide">
                    <div class="  p-md-4 text-black ">
                        <div class="col-md-12 px-0">
                            <h2 class="font-italic text-center filterTitle mt-5"> Players Registered</h2>
                        </div>
                    </div>
                    <!--Table for Players-->
                    <div>
                        <table class=" table-striped container table table-sm col-7 table-bordered mt-2">
                            <thead id="playersHeader" class="font-weight-bold bg-dark text-white">
                            </thead>
                            <tbody id="playersTable">
                            </tbody>
                        </table>
                    </div>
                </div>
            </form>
        </div>
    </main>
    <?php include("inc/footer.php"); ?>
    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <?php include("inc/scripts.php"); ?>
    <script src="scripts/details.js"></script>
</body>

</html>