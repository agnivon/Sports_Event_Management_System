<?php
//header.php
include('header.php');
 ?>

 <?php
     if($_SERVER['REQUEST_METHOD'] == 'POST'){
         require ('NewEvent-process.php');
     }
 ?>

 <!-- dataentry area -->
<section id='NewEvent'>
  <div class="row m-0">
    <div class="col-md-6">
      <div class="text-center pb-5">
          <h1 class="login-title text-dark">Event</h1>

          <span class="font-ubuntu text-black-50">-Go <a href="Edit-Event.php">Back*</a></span>
        </div>

      <div class="d-flex justify-content-center" id="NewEntry">
    <form action="NewEvent.php" method="post" enctype="multipart/form-data" id="NewEvent-form">
      <div class="form-row my-4">
        <div class="col">
            <input type="text" maxlength="20" value="<?php if(isset($_POST['Event_Name'])) echo $_POST['Event_Name'];  ?>" required name="Event_Name" id="Event_Name" class="form-control" placeholder="Events's Name">
        </div>
      </div>

      <div class="form-row my-4">
        <div class="col">
            <input type="date" value="<?php if(isset($_POST['Event_Date'])) echo $_POST['Event_Date'];  ?>" required name="Event_Date" id="Event_Date" class="form-control" placeholder="Event Date">
        </div>
      </div>

      <div class="form-row my-4">
        <div class="col">
            <input type="text" maxlength="1" value="<?php if(isset($_POST['Event_Type'])) echo $_POST['Event_Type'];  ?>" required name="Event_Type" id="Event_Type" class="form-control" placeholder="Event Type">
        </div>
      </div>

      <div class="form-row my-4">
        <div class="col">
            <input type="text" maxlength="20" value="<?php if(isset($_POST['Venue'])) echo $_POST['Venue'];  ?>" required name="Venue" id="Venue" class="form-control" placeholder="Venue">
        </div>
      </div>


        <div class="form-row my-4">
          <div class="col">
              <input type="number" max="9999" value="<?php if(isset($_POST['Country_Code'])) echo $_POST['Country_Code'];  ?>" required name="Country_Code" id="Country_Code" class="form-control" placeholder="Country Code">
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
