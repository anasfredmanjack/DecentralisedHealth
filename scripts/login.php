<?php
include('config/config.php');

$email = $_POST['useremail'];
$password = $_POST['userpassword'];
date_default_timezone_set("Africa/Lagos");
$DateCreated = date('Y-m-d H:i:s'); 


    $sql = mysqli_query($link,"SELECT * FROM `user_tbl` WHERE `emailaddress` ='$email' AND `password`='$password'");
    $count = mysqli_num_rows($sql);

    if($count > 0)
    {
        $fetch = mysqli_fetch_assoc($sql);
        $userrid = $fetch['id'];
        session_start();
        $usercreatedid = $userrid;
        $_SESSION['meduserid'] = $usercreatedid; 
        
        $sqltogetloginstreak = mysqli_query($link,"SELECT * FROM `userstats_tbl` WHERE `userid`='$userrid'");
        $countloginstreak = mysqli_num_rows($sqltogetloginstreak);
        if($countloginstreak == 0)
        {
            $sqlquerycheck = 
            mysqli_query($link, "INSERT INTO `userstats_tbl`( `login_streak`, `last_logindate`, `userid`)
             VALUES ('1','$DateCreated','$userrid')");
        }else
        {
            $fetchloginstreak = mysqli_fetch_assoc($sqltogetloginstreak);
            $lastloginstreak = $fetchloginstreak['login_streak'];
            $newloginstreak = $lastloginstreak+1;
            $sqlupdateloginstats = mysqli_query($link,"UPDATE `userstats_tbl` SET `login_streak`='$newloginstreak',`last_logindate`='$DateCreated' WHERE `userid`='$userrid'");

        }


        echo'1';
    
    }
    else
    {
        echo'2';
    
    }







?>