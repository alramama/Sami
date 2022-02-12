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
 
// Escape user inputs for security
$username = mysqli_real_escape_string($link, $_REQUEST['username']);
$email = mysqli_real_escape_string($link, $_REQUEST['email']);
$NAME = mysqli_real_escape_string($link, $_REQUEST['NAME']);
$Eqama_no = mysqli_real_escape_string($link, $_REQUEST['Eqama_no']);
$Eqama_Expire_date = mysqli_real_escape_string($link, $_REQUEST['Eqama_Expire_date']);
$Birthday = mysqli_real_escape_string($link, $_REQUEST['Birthday']);
$Blood_Group = mysqli_real_escape_string($link, $_REQUEST['Blood_Group']);
$job_title_Iqama = mysqli_real_escape_string($link, $_REQUEST['job_title_Iqama']);
$job_title_office = mysqli_real_escape_string($link, $_REQUEST['job_title_office']);
$mob = mysqli_real_escape_string($link, $_REQUEST['mob']);

// Attempt insert query execution
$sql = "INSERT INTO users (username, email,password,NAME,Eqama_no,Birthday,Blood_Group,$job_title_Iqama,job_title_office,mob) VALUES ('$username', '$email','$password','$NAME','$Eqama_no','$Eqama_Expire_date','$Birthday','$Blood_Group','$job_title_Iqama','$job_title_office','$mob')";
if(mysqli_query($link, $sql))
{
        header("location: index.php");
        exit();

    
} else{
    echo "ERROR: Could not able to execute $sql. " . mysqli_error($link);
}
 
// Close connection
mysqli_close($link);
?>
