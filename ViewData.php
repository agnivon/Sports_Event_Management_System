<!DOCTYPE html>
<?php
    include('header.php');
    session_start();
    if(!isset($_SESSION['ADMIN'])){
        $_SESSION['ADMIN'] = "false";
    }
?>
<html lang="en">
   <body>
   <?php
        function mysqli_field_name($result, $field_offset)
                        {
                            $properties = mysqli_fetch_field_direct($result, $field_offset);
                            return is_object($properties) ? $properties->name : null;
                        }
        if (isset($_POST['submit']))
        {
            $str=$_POST['drop'];
            $str1 = $_POST['search'];
            $tablename = strtolower($_POST['submit']);
            $sql = sprintf("select * from %s where %s like '%s'",$tablename, $str, $str1);
        }else{
            $tablename = strtolower($_GET['tablename']);
            $sql = "select * from ".$tablename;
        }
        require ('mysqli_connect.php');
        $result = $con->query($sql);
    ?>
   <nav class="navbar navbar-expand-md navbar-dark bg-dark">
         <a class="navbar-brand" href="./UserHome.php">Olympics</a>
         <div class="collapse navbar-collapse" id="navbarSupportedContent">

           <form class="form-inline ml-auto" action="./ViewData.php" method="post">
                <select class="select mr-sm-2" name="drop" required >
                    <option disabled selected>Category</option>
                    <?php
                        if ($result){
                            if ($result->num_rows>0){
                                //loop thru the field names to print the correct headers
                                $i = 0;
                                while ($i < mysqli_num_fields($result)){
                                    $fieldname = mysqli_field_name($result, $i);
                                    echo sprintf('<option value="%s">%s</option>', $fieldname, $fieldname);
                                    $i++;
                                }
                            }
                        }
                    ?>
                </select>
                <input class="form-control  mr-sm-2" required type="text" placeholder="Search" name="search">
                <?php
                    echo sprintf('<button class="btn btn-light  my-sm-0" type="submit" name="submit" value="%s">Search</button>',$tablename)
                ?>        
                </form>
        </div>
       </nav>
     <table class=" customTable table table-striped table-hover table-active align-middle; " >
        <?php
            if ($result){
                if ($result->num_rows>0){
                    //loop thru the field names to print the correct headers
                    $i = 0;
                    while ($i < mysqli_num_fields($result)){
                        echo "<th>". mysqli_field_name($result, $i) . "</th>";
                        $i++;
                    }
                    if($_SESSION["ADMIN"] == "true"){
                        echo "<th>". "Update" . "</th>";
                        echo "<th>". "Delete" . "</th>";
                    }
                echo "</tr>";
                }
            }
            if($result->num_rows>0){
                while ($row=$result->fetch_assoc())
                {
                  echo "<tr>";
                  foreach ($row as $data)
                  {
                    echo "<td>". $data . "</td>";
                  }
                  if($_SESSION["ADMIN"] == "true"){
                    echo sprintf('<td><a href= \'UpdateData.php?tablename=%s&tabledata=%s\'>Edit</a></td>', $tablename, urlencode(serialize($row)));
                    echo sprintf('<td><a href= \'DeleteData.php?tablename=%s&tabledata=%s\'>Delete</a></td>',$tablename, urlencode(serialize($row)));
                  }
                  echo "</tr>";
                }
              }else{
                echo "<tr><td>No Results found!</td></tr>";
              }
        ?>
     </table>
     <?php
          if($tablename == "sponsor"){
            echo '<table class="table table-striped table-hover table-active align-middle; ">
            <tr>
              <th>Money Invested</th>';
             $sql="CALL TSponAmt()";
             $result=$con->query($sql);
             if($result->num_rows>0){
               while($row=$result->fetch_assoc()){
                 echo"<th>".$row["SUM(Sponsorship_Amount)"]."</th></tr>";
               }
             }
             else{
               echo "Table is empty";
             }
            echo '</table>';
          }
        ?>
     <form action="InsertData.php" enctype="multipart/form-data" >
       <div class="submit-btn text-right my-5">
              <?php
                if($_SESSION["ADMIN"] == "true"){
                  echo sprintf('<button type="submit" class="btn btn-warning rounded-pill text-dark px-5" name="tablename" value="%s">
                      New Entry
                  </button>', $tablename);
                }
              ?>
       </div>
     </form>
   </body>
 </html>