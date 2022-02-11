<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Dashboard</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
    <script src="https://code.jquery.com/jquery-3.5.1.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
    <style>
        .wrapper{
            width: 1700px;
            margin: 0 auto;
        }
        table tr td:last-child{
            width: 120px;
        }
    </style>
    <script>
        $(document).ready(function(){
            $('[data-toggle="tooltip"]').tooltip();   
        });
    </script>
</head>
<body>
    <div class="wrapper">
        <div class="container-fluid">
            <div class="row">
                <div class="col-md-12">
                    <div class="mt-5 mb-3 clearfix">
                    </div>
                    <div class="container mt-3">
                    <h2>WELCOME TO NPS MANAGEMENT SYSTEM</h2>
                    <br>
                    <a href="Add_Emp.php" class="btn btn-success">Add New Employee</a>
                    <a href="index_EXPENSE_CLAIM.php" class="btn btn-success">Expense Claim</a>
                    <a href="index_SEC_id.php" class="btn btn-success">Sec Id </a>
                    <a href="index_cash_advance.php" class="btn btn-success">Cash Advanced </a>
                    </div>
                    <br>
                    <?php
                    // Include config file
                    require_once "config.php";
                    
                    // Attempt select query execution
                    $sql = "SELECT * FROM NPS_Employee";
                    if($result = mysqli_query($link, $sql)){
                        if(mysqli_num_rows($result) > 0){
                            echo '<table class="table table-bordered table-striped">';
                                echo "<thead>";
                                    echo "<tr>";
                                        echo "<th>NAME</th>";
                                        echo "<th>Nationality</th>";
                                        echo "<th>Eqama_no</th>";
                                        echo "<th>Birth_Day</th>";
                                        echo "<th>Blood_Group</th>";
                                        echo "<th>Job_title</th>";
                                        echo "<th>Mobail_no</th>";
                                    echo "</tr>";
                                echo "</thead>";
                                echo "<tbody>";
                                while($row = mysqli_fetch_array($result)){
                                    echo "<tr>";
                                        echo "<td>" . $row['NAME'] . "</td>";
                                        echo "<td>" . $row['Nationality'] . "</td>";
                                        echo "<td>" . $row['Eqama_no'] . "</td>";
                                        echo "<td>" . $row['Birth_Day'] . "</td>";
                                        echo "<td>" . $row['Blood_Group'] . "</td>";
                                        echo "<td>" . $row['Job_title'] . "</td>";
                                        echo "<td>" . $row['Mobail_no'] . "</td>";
                                        echo "<td>";
                                            echo '<a href="read.php?id='. $row['id'] .'" class="mr-3" title="View Record" data-toggle="tooltip"><span class="fa fa-eye"></span></a>';
                                            echo '<a href="update.php?id='. $row['id'] .'" class="mr-3" title="Update Record" data-toggle="tooltip"><span class="fa fa-pencil"></span></a>';
                                            echo '<a href="delete.php?id='. $row['id'] .'" title="Delete Record" data-toggle="tooltip"><span class="fa fa-trash"></span></a>';
                                        echo "</td>";
                                    echo "</tr>";
                                }
                                echo "</tbody>";                            
                            echo "</table>";
                            // Free result set
                            mysqli_free_result($result);
                        } else{
                            echo '<div class="alert alert-danger"><em>No records were found.</em></div>';
                        }
                    } else{
                        echo "Oops! Something went wrong. Please try again later.";
                    }
 
                    // Close connection
                    mysqli_close($link);
                    ?>
                </div>
            </div>        
        </div>
    </div>
</body>
</html>
