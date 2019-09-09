<!doctype html>
<html lang="en">

<?php
    $title = "Leagues";
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
        <div class="container col-md-7">
            <!--Start of Form-->
            <form class="form " autocomplete="off" method="GET">
                <!-- Radio buttons for search-->
                <section>
                    <div class="text-center formBorder col-md-12">
                        <label class="font-weight-bold  filterTitle">Filter Teams</label>
                        <!--Radio Buttons-->
                        <div class="custom-control custom-radio ">
                            <input type="radio" id="searchLeagues" name="optionBtn" class="custom-control-input">
                            <label class="custom-control-label " for="searchLeagues">Search by Leagues</label>
                        </div>
                        <div class="custom-control custom-radio ">
                            <input type="radio" id="searchTeams" name="optionBtn" class="custom-control-input">
                            <label class="custom-control-label" for="searchTeams">Search by Teams</label>
                        </div>
                        <div class="custom-control custom-radio ">
                            <input type="radio" id="searchGender" name="optionBtn" class="custom-control-input">
                            <label class="custom-control-label" for="searchGender">Search by Gender</label>
                        </div>
                        <br>
                        <!--Search Button-->
                        <button id="showAll" type="button" class="btn btn-primary mt-3 ">Show All </button>
                        <a href="addteam.php" class="btn btn-info active mt-3" role="button" aria-pressed="true">Add a
                            Team</a>
                    </div>
                </section>
                <!--  Search by Leagues dropdowns-->
                <section>
                    <div class=" col-md-5 mx-auto ">
                        <div class=" font-weight-bold select1 leaguesdiv hide mt-5">
                            <label for="leaguesddl">Select League</label>
                            <select class="custom-select d-block w-100 " id="leaguesddl" name="leaguesddl">
                                <option value="select a Location" selected disabled>Please select a League</option>
                            </select>
                        </div>
                    </div>

                    <!--  Search by Teams dropdowns-->
                    <div class=" col-md-5 mx-auto">
                        <div class=" font-weight-bold select1 teamsdiv hide mt-5">
                            <label for="teamddl">Select Teams</label>
                            <select class="custom-select d-block w-100 " id="teamddl" name="teamddl">
                                <option value="select a Team" selected disabled>Please select a Team</option>
                            </select>
                        </div>
                    </div>

                    <!--  Search by Gender dropdowns-->
                    <div class=" col-md-5 mx-auto">
                        <div class=" font-weight-bold select1 genderdiv hide mt-5">
                            <label for="genderddl">Select Gender</label>
                            <select class="custom-select d-block w-100 " id="genderddl" name="genderddl">
                                <option value="select a Gender" selected disabled>Please select one</option>
                                <option value="Male">Male</option>
                                <option value="Female">Female</option>
                                <option value="Any">Any</option>
                            </select>
                        </div>
                    </div>
                </section>
                <!--Table-->
                <section>
                    <table class=" table-striped container table table-sm col-12 table-bordered mt-5">
                        <thead id="teamHeader" class="font-weight-bold bg-dark text-white">
                        </thead>
                        <tbody id="teamTable">
                        </tbody>
                    </table>
                    <!--End of Table-->
                </section>
            </form>
        </div>
    </main>
    <?php include("inc/footer.php"); ?>
    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <?php include("inc/scripts.php"); ?>
    <script src="scripts/leagues.js"></script>
    <script src="scripts/data.js"></script>
</body>

</html>