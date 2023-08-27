<?php
session_start();

if (isset($_SESSION['info'])){

    //extract array so we an use its key as variable name
    extract($_SESSION['info']);
$con = mysqli_connect('localhost','root','','codealpha');

if(isset($_SESSION['opportunities'])) {
    $opportunities = $_SESSION['opportunities'];
    if($opportunities == " Strongly_Disagree"){$Strongly_Disagree='selected="selected"' ;} else {$Strongly_Disagree='' ;} 
    if($opportunities=="Disagree" ){$Disagree='selected="selected"' ;}   else {$Disagree='' ;}
     if($opportunities=="Neutral/Neither agree nor Disagree" ){$Neutral='selected="selected"' ;} else {$Neutral='' ;} 
     if($opportunities=="Agree" ){$Agree='selected="selected"' ;} else {$Agree='' ;} } 
     else { $Strongly_Disagree=$Disagree=$Neutral=$Agree='' ;} 

     
$sql = mysqli_query($con, "INSERT INTO surveyform VALUES ('$name','$email','$department','$age','$job_role',
'$work_in','$opportunities','$neg_conseq','$current_role','$res_teammates','$res_manager','$bal_work','$talent','$myself_as_person','$comment')");

if($sql){
    unset($_SESSION['info']);

    echo "Data has been saved successfully";
    echo '<a href="form1.php">Go Back</a>';
}
else{
    echo mysqli_error($con);
}
}
?>