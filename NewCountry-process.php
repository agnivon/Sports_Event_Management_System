<?php

require ('helper.php');
// error variable.
$error = array();

$Country_Name = validate_input_text($_POST['Country_Name']);
if (empty($Country_Name)){
    $error[] = "You forgot to enter Country's Name";
}

if(empty($error)){
  // register a new user
    require ('mysqli_connect.php');

    // make a query
    $query = "INSERT INTO country (Country_Code, Country_Name)";
    $query .= "VALUES(' ', ?)";

    // initialize a statement
    $q = mysqli_stmt_init($con);

    // prepare sql statement
    mysqli_stmt_prepare($q, $query);

    // bind values
    mysqli_stmt_bind_param($q, 's', $Country_Name);

    // execute statement
    mysqli_stmt_execute($q);

    if(mysqli_stmt_affected_rows($q) == 1){

      // start a new session
        session_start();

        // create session variable
        $_SESSION['Country_Code'] = mysqli_insert_id($con);

        header('location: Edit-Country.php');
        exit();

}
}else{
    print "Error while Editting Data...!";
}
