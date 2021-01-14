<?php
    //header.php
    include('header.php');
    $tablename = $_GET['tablename'];
    $data = unserialize(urldecode($_GET['tabledata']));
    $sql = 'describe '.$tablename;
    require ('mysqli_connect.php');
    $result = $con->query($sql);
    while($row = $result->fetch_array()){
        if($row["Key"] == "PRI"){
            $pkfield = $row['Field'];
            if(strpos($row['Type'], 'char') != false){
                $pkvalue = "'".$data[$pkfield]."'";
            }else{
                $pkvalue = $data[$pkfield];
            }
            break;
        }
    }
    $sql = sprintf("delete from %s where %s=%s", $tablename, $pkfield, $pkvalue);
    echo $sql;
    if(mysqli_query($con, $sql)){
        echo "<script>alert('Successfully deleted')</script>";
        header(sprintf('location: ViewData.php?tablename=%s', $tablename));
    }
    else{
         echo '<script>alert("Error while deleting data...!")</script>';
    }
 ?>