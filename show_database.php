<?php
require_once('db.php');
$q="select * from registration";
$r=mysqli_query($conn,$q);



?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Fetch Data From Database</title>
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <!-- Latest compiled and minified CSS -->
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">

<!-- jQuery library -->
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.7.1/jquery.min.js"></script>

<!-- Latest compiled JavaScript -->
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
</head>
<body class="bg-dark">
    <div class="container">
        <div class="row-mt-5">
            <div class="col">
                <div class="card-mt-5">
                    <div class="card-header">
                        <h2 class="display-6 text-center">fetch data from database</h2>


                    </div>
                    <div class="card-body">
                        <table class="table table-bordered text-center">
                            <tr class="bg-dark text-white">
                                <td>id</td>
                                <td>firstname</td>
                                <td>lastname</td>
                                <td>gender</td>
                                <td>age</td>


                            </tr>
                            <tr>
                                <?php
                                while($row=mysqli_fetch_assoc($r)){
                                    ?>
                                    <td><?php echo $row['id'];?></td>
                                    <td><?php echo $row['firstName'];?></td>
                                    <td><?php echo $row['lastName'];?></td>
                                    <td><?php echo $row['gender'];?></td>
                                    <td><?php echo $row['age'];?></td>

                                </tr>
                                <?php
                                }
                                ?>

                            

                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
    
</body>
</html>