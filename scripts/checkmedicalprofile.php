<?php
include('config/config.php');
$userrid = $_POST['userrid'];

$sql = mysqli_query($link,"SELECT * FROM `tbl_medicalprofile` WHERE `user_id`='$userrid'");
$count = mysqli_num_rows($sql);
if($count > 0)
{
    echo'1';
    //this signifies that there is a medical profile already uploaded//
}else{
    //this signifies that the user medical profile is absent//
    echo'0';
}

?>