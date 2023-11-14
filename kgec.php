<?php
create connection
$conn=new mysqli('localhost','root','');
if($conn->connect_error){
    die("Connection failed:".$conn->connect_error);
}
//Create Database
$sql="CREATE DATABASE kgec";
if(mysqli_query($conn,$sql)){
    echo "Database Created";

}else{
    echo "Error creating Database.".mysqli_error($conn);

}


mysqli_close($conn);
create connection
$servername='localhost';
$username='root';
$password='';
$dbname='kgec';
$conn=mysqli_connect($servername,$username,$password,$dbname);
if($conn->connect_error){
    die("Connection Failed:".$conn->connect_error);
}
//sql to create a table
$sql="CREATE TABLE students (firstname varchar(30) not null,roll tinyint(2) primary key not null,phone int(10),city varchar(30))";
if(mysqli_query($conn,$sql)===TRUE){
    echo "Table Created";

}else{
    echo "Error creating table";
}
sql to create table ca_marks
$sql="CREATE TABLE ca_marks(roll tinyint(2) primary key not null,ca1 tinyint(2),ca2 tinyint(2),ca3 tinyint(2),ca4 tinyint(2))";
if(mysqli_query($conn,$sql)==TRUE){
    echo "Table Created";
}else{
    echo "Table not Created";

}

copying struture of ca_marks table in pca_marks table
$sql="create table pca_marks like ca_marks ";
if(mysqli_query($conn,$sql)===TRUE){
    echo "Table Created";
}
else{
echo "Table Not Created";
}
$sql1="alter table pca_marks change ca1 pca1 tinyint(2)";
$sql2="alter table pca_marks change ca2 pca2 tinyint(2)";
$sql3="alter table pca_marks change ca4 pca4 tinyint(2)";
// mysqli_query($conn,$sql2);
mysqli_query($conn,$sql3);

// if(mysqli_query($conn,$sql2)===TRUE){
//         echo "renamed";
//     }
//     else{
//     echo "not renamed";
//     }
?>

