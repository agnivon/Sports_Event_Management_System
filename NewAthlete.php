<?php
//header.php
include('header.php');
 ?>

 <?php
     if($_SERVER['REQUEST_METHOD'] == 'POST'){
         require ('NewAthlete-process.php');
     }
 ?>

 <!-- dataentry area -->
<section id='NewAthlete'>
  <div class="row m-0">
    <div class="col-md-6">
      <div class="text-center pb-5">
          <h1 class="login-title text-dark">Athlete</h1>

          <span class="font-ubuntu text-black-50">Go <a href="Edit-Athlete.php">Back*</a></span>
        </div>

      <div class="d-flex justify-content-center" id="NewEntry">
    <form action="NewAthlete.php" method="post" enctype="multipart/form-data" id="NewAthlete-form">
      <div class="form-row my-4">
        <div class="col">
            <input type="text" maxlength="20" value="<?php if(isset($_POST['Athlete_Name'])) echo $_POST['Athlete_Name'];  ?>" required name="Athlete_Name" id="Athlete_Name" class="form-control" placeholder="Athlete's Name">
        </div>
      </div>
      <div class="form-row my-4">
        <div class="col">
            <input type="text" pattern="M|F|m|f" maxlength="1" value="<?php if(isset($_POST['Gender'])) echo $_POST['Gender'];  ?>" required name="Gender" id="Gender" class="form-control" placeholder="Gender">
        </div>
      </div>

        <div class="form-row my-4">
          <div class="col">
              <input type="date" value="<?php if(isset($_POST['DOB'])) echo $_POST['DOB'];  ?>" required name="DOB" id="DOB" class="form-control" placeholder="DOB">
          </div>
        </div>

        <div class="form-row my-4">
          <div class="col">
              <input type="number" max="999" min="1" value="<?php if(isset($_POST['Country_Code'])) echo $_POST['Country_Code'];  ?>" required name="Country_Code" id="Country_Code" class="form-control" placeholder="Country Code">
          </div>
        </div>
        <div class="submit-btn text-center my-5">
            <button type="submit" class="btn btn-warning rounded-pill text-dark px-5">Submit</button>
        </div>


    </form>
</div>
    </div>
    <div class="col-md-6 ">
      <img src= "./assets./NewAthlete.jpg" width="339" height="500"
      alt="Backgroundimage"
      align="right"
      style="width=100%;height=100%;border-radius:4%;">
    </div>
  </div>
</section>
<!-- //data entry area -->


<?php
//footer.php
include("footer.php");
?>
