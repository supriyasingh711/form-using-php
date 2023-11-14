<?php
$firstName=$_POST['firstName'];
$lastName=$_POST['lastName'];
$gender=$_POST['Gender'];
$email=$_POST['email'];
$languages=$_POST["languages"];
$language="";
$dob=$_POST["dob"];
foreach($languages as $row){
    $language .= $row . ",";
}

//Database Connection

$severname = "localhost";
$username = "root";
$password = "";
$dbname = "test5";
function getAge($dob){
    $bday=new DateTime($dob);
    $today=new DateTime(date('m.d.y'));
    if($bday>$today){
        return "you are not born yet!";

    }
    $diff=$today->diff($bday);
    return $diff->y;
    // return 'your current age is:'. $diff->y .'years ,'.  $diff->m. ' , months' .$diff->d .' , days';
}
// echo getAge($dob);
$age=getAge($dob);

$conn = mysqli_connect($severname,$username,$password,$dbname);
if($firstName=="supriya"){
    echo "youu are an authorised user.";
}
else{
    echo "not an authoirized user.";
}
if($conn)
{
  
}
else
{
    echo "conection Failed ".mysqli_connect_error();
}

$sql="INSERT INTO `registration`(`firstName`,`lastName`,`gender`,`email`,`languages`,`age`) VALUES ('$firstName','$lastName','$gender','$email','$language','$age')";
$result=mysqli_query($conn,$sql);
if($result){
    echo "data submitted";
} else{
    echo "error";
}

?>
