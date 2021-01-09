<?php
//header.php
include('header.php');
 ?>

 <?php
     if($_SERVER['REQUEST_METHOD'] == 'POST'){
         require ('NewResult-process.php');
     }
 ?>

 <!-- dataentry area -->
<section id='NewResult'>
  <div class="row m-0">
    <div class="col-md-6">
      <div class="text-center pb-5">
          <h1 class="login-title text-dark">Result</h1>

          <span class="font-ubuntu text-black-50">Go <a href="Edit-Result.php">Back*</a></span>
        </div>

      <div class="d-flex justify-content-center" id="NewEntry">
    <form action="NewResult.php" method="post" enctype="multipart/form-data" id="NewResult-form">

      <div class="form-row my-4">
        <div class="col">
            <input type="number" max="9999" value="<?php if(isset($_POST['Event_Id'])) echo $_POST['Event_Id'];  ?>" required name="Event_Id" id="Event_Id" class="form-control" placeholder="Event Id">
        </div>
      </div>
      <div class="form-row my-4">
        <div class="col">
            <input type="text" maxlength="20" value="<?php if(isset($_POST['Event_Name'])) echo $_POST['Event_Name'];  ?>" required name="Event_Name" id="Event_Name" class="form-control" placeholder="Event Name">
        </div>
      </div>
      <div class="form-row my-4">
        <div class="col">
            <input type="number" max="9999" value="<?php if(isset($_POST['Athlete_Id'])) echo $_POST['Athlete_Id'];  ?>" required name="Athlete_Id" id="Athlete_Id" class="form-control" placeholder="Athlete_Id">
        </div>
      </div>
      <div class="form-row my-4">
        <div class="col">
            <input type="text" maxlength="6" value="<?php if(isset($_POST['Medal_Type'])) echo $_POST['Medal_Type'];  ?>" required name="Medal_Type" id="Medal_Type" class="form-control" placeholder="Medal_Type">
        </div>
      </div>

      <div class="form-row my-4">
        <div class="col">
            <input type="number" max="99999999" value="<?php if(isset($_POST['Total_Time'])) echo $_POST['Total_Time'];  ?>" required name="Total_Time" id="Total_Time" class="form-control" placeholder="Total_Time">
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
