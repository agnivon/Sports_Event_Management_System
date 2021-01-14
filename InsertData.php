<?php
    //header.php
    include('header.php');
    if($_SERVER['REQUEST_METHOD'] == 'POST'){
        require ('NewAthlete-process.php');
    }else{
    $tablename = $_GET['tablename'];
    $sql = 'describe '.$tablename;
    $con=mysqli_connect("localhost","root","","olympic");
    $result = $con->query($sql);
    }
 ?>

 <!-- dataentry area -->
<section id='NewAthlete'>
  <div class="row m-0">
    <div class="col-md-6">
      <div class="text-center pb-5">
          <?php
            echo '<h1 class="login-title text-dark"> New '.ucfirst($tablename).'</h1>';
            ?>
        </div>

      <div class="d-flex justify-content-center" id="NewEntry">
    <form action="ProcessInsertData.php" method="post" enctype="multipart/form-data" id="NewAthlete-form">
      <?php
        while($row = $result->fetch_array()) {
            $fieldname = $row['Field'];
            $fieldvalue = "";
            $fieldkey = $row['Key'];
            $type = $row['Type'];
            $m = preg_match('/\w+/', $type, $matches);
            $typename = $matches[0];
            $m = preg_match('/\d+/', $type, $matches);
            if ($m == 1){
                $typewidth = $matches[0];
            }
            if($fieldkey != "PRI"){
                if($typename == "varchar" or $typename == "char"){
                    $inputtype = 'text';
                    echo sprintf('<div class="form-row my-4">
                        <div class="col">
                            <span class="font-ubuntu text-black-50">Enter %s</span>
                            <input type="%s" maxlength="%s" value="%s" required name="%s" id="%s" class="form-control" placeholder="%s">
                        </div>
                    </div>',$fieldname,$inputtype, $typewidth, $fieldvalue, $fieldname, $fieldname, $fieldname);
                }
                else if($typename == "int"){
                    $inputtype = 'number';
                    echo sprintf('<div class="form-row my-4">
                    <div class="col">
                        <span class="font-ubuntu text-black-50">Enter %s</span>
                        <input type="%s" max="%s" min="1" value="%s" required name="%s" id="%s" class="form-control" placeholder="%s">
                    </div>
                  </div>',$fieldname, $inputtype, 10**$typewidth-1, $fieldvalue, $fieldname, $fieldname, $fieldname);    
                }
                else if($typename == "date"){
                    $inputtype = "date";
                    echo sprintf('<div class="form-row my-4">
                    <div class="col"> 
                        <span class="font-ubuntu text-black-50">Enter %s</span>
                        <input type="%s" value="%s" required name="%s" id="%s" class="form-control" placeholder="%s">
                    </div>
                  </div>',$fieldname, $inputtype, $fieldvalue, $fieldname, $fieldname, $fieldname);
                }
            }
        }
        echo sprintf('<button type="submit" class="btn btn-warning rounded-pill text-dark px-5" name="tablename" value="%s">
            Submit
        </button>', $tablename);
        ?> 
    </form>
</div>
    </div>
    <div class="col-md-6 ">
      <img src= "./assets/NewAthlete.jpg" width="339" height="500"
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
