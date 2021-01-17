<?php
    //header.php
    include('header.php');
    $tablename = $_GET['tablename'];
    $data = unserialize(urldecode($_GET['tabledata']));
    $sql = 'describe '.$tablename;
    require ('mysqli_connect.php');
    $result = $con->query($sql);
 ?>

 <!-- dataentry area -->
<section id='UpdateData'>
  <div class="row m-0">
    <div class="col-md-6">
      <div class="text-center pb-5">
          <?php
            echo '<h1 class="login-title text-dark">Update '.ucfirst($tablename).'</h1>';
            ?>
        </div>

      <div class="d-flex justify-content-center" id="NewEntry">
    <form action="ProcessUpdateData.php" method="post" enctype="multipart/form-data" id="UpdateData-form">
      <?php
        while($row = $result->fetch_array()) {
            $fieldname = $row['Field'];
            $fieldvalue = $data[$fieldname];
            $fieldkey = $row['Key'];
            $type = $row['Type'];
            $m = preg_match('/\w+/', $type, $matches);
            $typename = $matches[0];
            $m = preg_match('/\d+/', $type, $matches);
            if ($m == 1){
                $typewidth = $matches[0];
            }
            if($fieldkey != "PRI"){
              $inputmode = "required";
            }else{
              $inputmode = "readonly";
            }
            if($typename == "varchar" or $typename == "char"){
                $inputtype = 'text';
                echo sprintf('<div class="form-row my-4">
                    <div class="col">
                        <input type="%s" maxlength="%s" value="%s" %s name="%s" id="%s" class="form-control" placeholder="%s">
                    </div>
                </div>',$inputtype, $typewidth, $fieldvalue, $inputmode, $fieldname,  $fieldname, $fieldvalue);
            }
            else if($typename == "int"){
                $inputtype = 'number';
                echo sprintf('<div class="form-row my-4">
                <div class="col">
                    <input type="%s" max="%s" min="1" value="%s" %s name="%s" id="%s" class="form-control" placeholder="%s">
                </div>
                </div>',$inputtype, 10**$typewidth, $fieldvalue, $inputmode, $fieldname,  $fieldname, $fieldvalue);
            }
            else if($typename == "date"){
                $inputtype = "date";
                echo sprintf('<div class="form-row my-4">
                <div class="col">
                    <input type="%s" value="%s" required name="%s" id="%s" class="form-control" placeholder="%s">
                </div>
              </div>',$inputtype, $fieldvalue, $fieldname, $fieldname, $fieldvalue);
            }
        }
     ?>
      <div class="submit-btn text-center my-5">
        <?php
            echo sprintf('<button type="submit" class="btn btn-warning rounded-pill text-dark px-5" name="tablename" value="%s">
                Submit
            </button>', $tablename);
            ?>      
      </div>
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
