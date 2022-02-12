<?php 

define('DB_SERVER', 'localhost');
define('DB_USERNAME', 'id18369801_root');
define('DB_PASSWORD', '10Mu32r4****');
define('DB_NAME', 'id18369801_naizak');
 
/* Attempt to connect to MySQL database */
$con = mysqli_connect(DB_SERVER, DB_USERNAME, DB_PASSWORD, DB_NAME);
 
// Check connection
if($link === false){
    die("ERROR: Could not connect. " . mysqli_connect_error());
}

    $username = $_POST['username'];  
    $password = $_POST['password'];  
      
        //to prevent from mysqli injection  
        $username = stripcslashes($username);  
        $password = stripcslashes($password);  
        $username = mysqli_real_escape_string($con, $username);  
        $password = mysqli_real_escape_string($con, $password);  
      
        $sql = "select * from users where username = '$username' and password = '$password'";  
        $result = mysqli_query($con, $sql);  
        $row = mysqli_fetch_array($result, MYSQLI_ASSOC);  
        $count = mysqli_num_rows($result);  
          
        if($count == 1){  
            header("location: Emp_index_form.php ");
            exit();
  
        }  
        else{
            header("location: user_create_form.php");
            exit();

        }     
?>  
