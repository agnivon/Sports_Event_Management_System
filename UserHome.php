<?php
//header.php
  include('header.php');
  session_start();
  if(!isset($_SESSION['ADMIN'])){
    $_SESSION['ADMIN'] = "false";
  }
 ?>

 <!-- regestration area -->

<nav class="navbar navbar-expand-md navbar-dark bg-dark">
  <a class="navbar-brand" href="#">Olympics</a>
  <?php
    if ($_SESSION['ADMIN'] == "true"){
      echo '<a href="index.php" class="pl-2 ml-auto">Log Out</a>';
    }
  ?>
    </nav>

<section id='UserHome'>
  <div class="row m-0">
    <div class="col-md-6">
      <div class="text-center pb-5">
        <h1 class="login-title text-dark">Olympics Database</h1>
        <p class="p-1 m-0 font-ubuntu text-black-50">Your one stop for everything Olympic</p>
        <p class="p-1 m-0 font-ubuntu text-black-50">View the database</p>
        <?php
            if($_SESSION["ADMIN"] == "true"){
              echo '<p class="p-1 m-0 font-ubuntu text-black-50">View & modify the database</p>';
            }
        ?>
      </div>
      <div class="d-flex justify-content-center">
        <div class="form-row">
          <div class="col">
            <form action="./ViewData.php" enctype="multipart/form-data" id="ViewAthlete">
              <div class="submit-btn text-center my-5">
                    <button type="submit" class="btn btn-warning rounded-pill text-dark px-5" name="tablename" value="athlete">
                      Athletes
                    </button>
              </div>
            </form>
          </div>
          <div class="col">
            <form action="./ViewData.php" enctype="multipart/form-data" id="ViewEvent">
              <div class="submit-btn text-center my-5">
                    <button type="submit" class="btn btn-warning rounded-pill text-dark px-5" name="tablename" value="event">
                      Events
                    </button>
              </div>
            </form>
          </div>
          <div class="col">
            <form action="./ViewData.php" enctype="multipart/form-data" id="ViewResult">
              <div class="submit-btn text-center my-5">
                    <button type="submit" class="btn btn-warning rounded-pill text-dark px-5" name="tablename" value="result">
                      Results
                    </button>
              </div>
            </form>
          </div>
          <div class="col">
            <form action="./ViewData.php" enctype="multipart/form-data" id="ViewSponsorers">
              <div class="submit-btn text-center my-5">
                    <button type="submit" class="btn btn-warning rounded-pill text-dark px-5" name="tablename" value="sponsor">
                      Sponsors 
                    </button>
              </div>
            </form>
          </div>
          <div class="col">
              <form action="./ViewData.php" enctype="multipart/form-data" id="ViewCountry">
                <div class="submit-btn text-center my-5">
                    <button type="submit" class="btn btn-warning rounded-pill text-dark px-5" name="tablename" value="country">
                      Countries
                    </button>
                </div>
              </form>
            </div>
          <div class="col">
            <form action="./ViewData.php" enctype="multipart/form-data" id="ViewRecord">
                <div class="submit-btn text-center my-5">
                    <button type="submit" class="btn btn-warning rounded-pill text-dark px-5" name="tablename" value="record">
                      Records
                    </button>
                </div>
            </form>
          </div>
        </div>
     </div>
    </div>
    <div class="col-md-6 ">
      <img src= "./assets/HomePage.jpg" width="339" height="500"
      alt="Backgroundimage"
      align="right"
      style="width=100%;height=100%;border-radius:4%;">
    </div>
  </div>
</section>
<!-- //regestration area -->
<?php
//footer.php
include("footer.php");
?>
