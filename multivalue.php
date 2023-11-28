$lan=$_POST['languages'];
$lans="";
foreach($lan as $row){
$lans.=$row.",";

}

fucntion getAge($dob){
$bday=new Date($dob);
$today=new Date(date('m.d.y'));
if($bday>$today){
return "you are not born yet";
}
$diff=$today->diff($bday);
return $diff->y;


}
