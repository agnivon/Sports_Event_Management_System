<?php
    require ('helper.php');
    $tablename = $_POST['tablename'];
    // error variable.
    $error = array();
    $sql = "describe ".$tablename;
    require ('mysqli_connect.php');
    $result = $con->query($sql);
    $csfieldnames = "";
    $csfieldvalues = "";
    while ($row = $result->fetch_array()){
        if($row["Key"] != "PRI"){
            $fieldname = $row['Field'];
            $fieldvalue = validate_input_text($_POST[$fieldname]);
            $fieldtype = $row['Type'];
            $m = preg_match('/\w+/', $fieldtype, $matches);
            $typename = $matches[0];
            if (empty($fieldvalue)){
                $error[] = "You forgot to enter ".$fieldname;
            }else{
                $csfieldnames .= $fieldname.", ";
                if ($typename == "int"){
                    $csfieldvalues .= $fieldvalue.", ";
                }else{
                    $csfieldvalues .= "'".$fieldvalue."', ";
                }
            }
        }
    }
    if(empty($error)){
    // register a new user
        $csfieldnames = substr($csfieldnames, 0, -2);
        $csfieldvalues = substr($csfieldvalues, 0, -2);
        // make a query
        $sql = sprintf("insert into %s (%s) values(%s)",$tablename, $csfieldnames, $csfieldvalues);
        echo $sql;
        if(mysqli_query($con, $sql)){
            echo "<script>alert('Successfully inserted')</script>";
            header(sprintf('location: ViewData.php?tablename=%s', $tablename));
        }
    }else{
        print "Error while inserting data...!";
    }
?>