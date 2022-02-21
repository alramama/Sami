<?php

/* Database credentials. Assuming you are running MySQL
server with default setting (user 'root' with no password) */
define('DB_SERVER', 'localhost');
define('DB_USERNAME', 'id18369801_root');
define('DB_PASSWORD', '10Mu32r4****');
define('DB_NAME', 'id18369801_naizak');
 
/* Attempt to connect to MySQL database */
$link = mysqli_connect(DB_SERVER, DB_USERNAME, DB_PASSWORD, DB_NAME);
 
// Check connection
if($link === false){
    die("ERROR: Could not connect. " . mysqli_connect_error());
}
 
$NAME = mysqli_real_escape_string($link, $_REQUEST['NAME']);
$Emp_No = mysqli_real_escape_string($link, $_REQUEST['Emp_No']);
$Date = mysqli_real_escape_string($link, $_REQUEST['Date']);
$Amount_Received = mysqli_real_escape_string($link, $_REQUEST['Amount_Received']);
$Project = mysqli_real_escape_string($link, $_REQUEST['ID_No']);
$Contract_no = mysqli_real_escape_string($link, $_REQUEST['Contract_no']);

// Attempt insert query execution
$sql = "INSERT INTO Cash_Advance (NAME,Emp_No,Date, Amount_Received,Project) VALUES ('$NAME', '$Emp_No','$Date','$Amount_Received','$Project')";
if(mysqli_query($link, $sql)){
    header("location: cash_advance/index.php");
    exit();
} else{
    echo "ERROR: Could not able to execute $sql. " . mysqli_error($link);
}
 
// Close connection
mysqli_close($link);
?>

