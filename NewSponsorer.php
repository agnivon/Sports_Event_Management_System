<?php
//header.php
include('header.php');
 ?>

 <?php
     if($_SERVER['REQUEST_METHOD'] == 'POST'){
         require ('NewSponsorer-process.php');
     }
 ?>

 <!-- dataentry area -->
<section id='NewSponsorer'>
  <div class="row m-0">
    <div class="col-md-6">
      <div class="text-center pb-5">
          <h1 class="login-title text-dark">Sponsorer</h1>

          <span class="font-ubuntu text-black-50">Go <a href="Edit-Sponsorer.php">Back*</a></span>
        </div>

      <div class="d-flex justify-content-center" id="NewEntry">
    <form action="NewSponsorer.php" method="post" enctype="multipart/form-data" id="NewSponsorer-form">
      <div class="form-row my-4">
        <div class="col">
            <input type="text" maxlength="20" value="<?php if(isset($_POST['Sponsorer_Name'])) echo $_POST['Sponsorer_Name'];  ?>" required name="Sponsorer_Name" id="Sponsorer_Name" class="form-control" placeholder="Sponsorer's Name">
        </div>
      </div>
      <div class="form-row my-4">
        <div class="col">
            <input type="number" max="9999" value="<?php if(isset($_POST['Athlete_Id'])) echo $_POST['Athlete_Id'];  ?>" required name="Athlete_Id" id="Athlete_Id" class="form-control" placeholder="Athlete_Id">
        </div>
      </div>

        <div class="form-row my-4">
          <div class="col">
              <input type="number" max="99999999" value="<?php if(isset($_POST['Sponsorship_Amount'])) echo $_POST['Sponsorship_Amount'];  ?>" required name="Sponsorship_Amount" id="Sponsorship_Amount" class="form-control" placeholder="Sponsorship Amount">
          </div>
        </div>
        <div class="submit-btn text-center my-5">
            <button type="submit" class="btn btn-warning rounded-pill text-dark px-5">Submit</button>
        </div>


    </form>
</div>
    </div>
    <div class="col-md-6 ">
      <img src= "./assets./OlympicGold.jpg"
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
