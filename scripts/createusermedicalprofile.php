<?php
include('config/config.php');
 $dateofbirth = $_POST['dateofbirth'];
 $weight = $_POST['weight'];
 $allergies = $_POST['allergies'];
 $fammedicalhistory = $_POST['fammedicalhistory'];
 $othermedinfo = $_POST['othermedinfo'];
 $pmedicalhistory = $_POST['pmedicalhistory'];
 $userid = $_POST['userid'];
 $bloodgroup = $_POST['bloodgroup'];
 $genotype = $_POST['genotype'];

 $sql = mysqli_query($link,"INSERT INTO `tbl_medicalprofile`( `user_id`, `weight`, `allergies`, `familymedicalhistory`, `pastmedicalhistory`, `bloodtype`,
 `genotype`, `othermedicalinfo`, `dateofbirth`, `profileimage`) VALUES 
 ('$userid','$weight','$allergies','$fammedicalhistory','$pmedicalhistory','$bloodgroup','$genotype','$othermedinfo','$dateofbirth','')");
 if($sql){
    echo'<div class="alert alert-success"><center><small>Medical Profile Created Please wait </small> <i class="fa fa-spinner fa-spin"></i> </center></div>';
 }

?>