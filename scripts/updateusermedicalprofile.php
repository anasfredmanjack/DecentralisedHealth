<?php
include('config/config.php');
 $dateofbirth = $_POST['dateofbirth'];
 $weight = $_POST['weight'];
 $allergies = $_POST['allergies'];
 $fammedicalhistory = $_POST['fammedicalhistory'];
 $pmedicalhistory = $_POST['pmedicalhistory'];
 $userid = $_POST['userid'];
 $bloodgroup = $_POST['bloodgroup'];
 $genotype = $_POST['genotype'];
 $othermedinfo = $_POST['othermedinfo'];

 $sql = mysqli_query($link,"UPDATE `tbl_medicalprofile` SET `dateofbirth`='$dateofbirth',`weight`='$weight',`allergies`='$allergies',
 `familymedicalhistory`='$fammedicalhistory',`pastmedicalhistory`='$pmedicalhistory',`bloodgroup`='$bloodgroup',`genotype`='$genotype',`othermedicalinfo`='$othermedinfo' 
 WHERE `user_id` ='$userid'");
 if($sql){
    echo'<div class="alert alert-success"><center><small>Medical Profile Updated </small><i class="fa fa-warning fa-spin"></i> </center></div>';
 }

?>