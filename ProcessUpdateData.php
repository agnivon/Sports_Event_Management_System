<?php
    require ('helper.php');
    $tablename = $_POST['tablename'];
    // error variable.
    $error = array();
    $sql = "describe ".$tablename;
    require ('mysqli_connect.php');
    $result = $con->query($sql);
    $setclause = "";
    while ($row = $result->fetch_array()){
        $fieldname = $row['Field'];
        $fieldtype = $row['Type'];
        if($row["Key"] != "PRI"){
            $m = preg_match('/\w+/', $fieldtype, $matches);
            $typename = $matches[0];
            $fieldvalue = validate_input_text($_POST[$fieldname]);
            if (empty($fieldvalue)){
                $error[] = "You forgot to enter ".$fieldname;
                break;
            }
            if ($typename == "int"){
                $setclause .= $fieldname."=".$fieldvalue.", ";
            }else{
                $setclause .= $fieldname."="."'".$fieldvalue."', ";
            }
        }else{
            $fieldvalue = $_POST[$fieldname];
            $pkwhereclause = $fieldname."=".$fieldvalue;
        }
    }
    if(empty($error)){
    // register a new user
        $setclause = substr($setclause, 0, -2);
        // make a query
        $sql = sprintf("update %s set %s where %s", $tablename, $setclause, $pkwhereclause);
        echo $sql;
        if(mysqli_query($con, $sql)){
            echo "<script>alert('Successfully updated')</script>";
            header(sprintf('location: ViewData.php?tablename=%s', $tablename));
        }
    }else{
        print "Error while updating data...!";
    }
?>