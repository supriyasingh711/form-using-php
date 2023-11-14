<?php
$conn=mysqli_connect('localhost','root','','kgec');
if($conn->connect_error){
    die("Connection failed:".$conn->connect_error);

}
// $sql="alter table ca_marks add ca5 tinyint(2)";
// mysqli_query($conn,$sql);
// $sql2="alter table pca_marks add pca5 tinyint(2)";
// mysqli_query($conn,$sql2);
// $sql3="alter table ca_marks drop column ca4";
// mysqli_query($conn,$sql3);
// $sql4="alter table pca_marks change pca5 pca3 tinyint(2)";
// mysqli_query($conn,$sql4);
// $sql="insert into `ca_marks`(`roll`,`ca1`,`ca2`,`ca3`) values(1,12,15,21)";
// $sql="insert into pca_marks select * from ca_marks";
// $sql="show tables from kgec";
$dbname='kgec';
$sql = "SHOW tables from $dbname";
$result = mysqli_query($conn,$sql);



print_r($result);



?>