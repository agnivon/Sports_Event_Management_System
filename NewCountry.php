<?php
//header.php
include('header.php');
 ?>

 <?php
     if($_SERVER['REQUEST_METHOD'] == 'POST'){
         require ('NewCountry-process.php');
     }
 ?>

 <!-- dataentry area -->
<section id='NewCountry'>
  <div class="row m-0">
    <div class="col-md-6">
      <div class="text-center pb-5">
          <h1 class="login-title text-dark">Country</h1>

          <span class="font-ubuntu text-black-50">Go <a href="Edit-Country.php">Back*</a></span>
        </div>

      <div class="d-flex justify-content-center" id="NewEntry">
    <form action="NewCountry.php" method="post" enctype="multipart/form-data" id="NewCountry-form">
      <div class="form-row my-4">
        <div class="col">
            <input type="text" maxlength="20" value="<?php if(isset($_POST['Country_Name'])) echo $_POST['Country_Name'];  ?>" required name="Country_Name" id="Country_Name" class="form-control" placeholder="Country's Name">
        </div>

        <div class="submit-btn text-center my-5">
            <button type="submit" class="btn btn-warning rounded-pill text-dark px-5 ">Submit</button>
        </div>
          </div>
    </form>
</div>
    </div>
    <div class="col-md-6 ">
      <img src= "./assets./Rio2016.png" width="339" height="500"
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
