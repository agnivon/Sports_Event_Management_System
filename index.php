<?php
//header.php
include('header.php');
session_start();
    $_SESSION["ADMIN"] = "false";
 ?>
 <!-- regestration area -->
<nav class="navbar navbar-expand-md navbar-dark bg-dark">
   <a class="navbar-brand" href="#">Olympics</a>
</nav>
<section id='Viewindex'>
  <div class="row m-0">
    <div class="col-md-6">
      <div class="text-center pb-5">
          <h1 class="login-title text-dark">Olympics</h1>
          <p class="p-1 m-0 font-ubuntu text-black-50">The modern Olympic Games or Olympics are leading international sporting events featuring summer and winter sports competitions in which thousands of athletes from around the world participate in a variety of competitions</p>
      </div>
      <div class="d-flex justify-content-center">
        <div class="form-row">
          <div class="col">
            <form action="UserHome.php" enctype="multipart/form-data" id="ViewAthlete">
              <div class="submit-btn text-center my-5">
                   <button type="submit" class="btn btn-warning rounded-pill text-dark px-5">User</button>
              </div>
            </form>
          </div>
          <br>
          <br>
          <br>
          <div class="col">
            <form action="login.php" enctype="multipart/form-data" id="ViewEvent">
              <div class="submit-btn text-center my-5">
                <button type="submit" class="btn btn-warning rounded-pill text-dark px-5">Admin</button>
              </div>
            </form>
          </div>
        </div>
      </div>
    </div>
    <div class="col-md-6 ">
      <img src= "./assets/Torch.jpg" width="339" height="500"
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
