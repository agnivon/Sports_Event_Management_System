<?php

require ('helper.php');
// error variable.
$error = array();

$Sponsorer_Name = validate_input_text($_POST['Sponsorer_Name']);
if (empty($Sponsorer_Name)){
    $error[] = "You forgot to enter Athlete's Name";
}

$Athlete_Id = validate_input_text($_POST['Athlete_Id']);
if (empty($Athlete_Id)){
    $error[] = "You forgot to enter Athlete's Name";
}


$Sponsorship_Amount = validate_input_text($_POST['Sponsorship_Amount']);
if (empty($Sponsorship_Amount)){
    $error[] = "You forgot to enter the Country Code";
}



if(empty($error)){
  // register a new user
    require ('mysqli_connect.php');

    // make a query
    $query = "INSERT INTO sponsorer (Sponsorship_Id,Sponsorer_Name,Athlete_Id, Sponsorship_Amount)";
    $query .= "VALUES(' ',?, ?, ?)";

    // initialize a statement
    $q = mysqli_stmt_init($con);

    // prepare sql statement
    mysqli_stmt_prepare($q, $query);

    // bind values
    mysqli_stmt_bind_param($q, 'sss', $Sponsorer_Name,$Athlete_Id, $Sponsorship_Amount);

    // execute statement
    mysqli_stmt_execute($q);

    if(mysqli_stmt_affected_rows($q) == 1){

      // start a new session
        session_start();

        // create session variable
        $_SESSION['Sponsorship_Id'] = mysqli_insert_id($con);

        header('location: Edit-Sponsorer.php');
        exit();

}
}else{
    print "Error while Editting Data...!";
}
