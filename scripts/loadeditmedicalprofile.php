<?php
include('config/config.php');
$userrid = $_POST['userrid'];

$sql = mysqli_query($link,"SELECT * FROM `tbl_medicalprofile` WHERE `user_id`='$userrid'");
$fetch = mysqli_fetch_assoc($sql);
$profileimage = $fetch['userprofileimage'];
$allergies = $fetch['allergies'];
$pmedhistory = $fetch['pastmedicalhistory'];
$familymedicalhistory = $fetch['familymedicalhistory'];

if($profileimage == '')
{
    $profileimage = 'images/unknownuser.png';

}

if($allergies == '')
{
    $allergies = 'None';
}

if($pmedhistory == '')
{
    $pmedhistory = 'None';
}

if($familymedicalhistory == '')
{
    $familymedicalhistory = 'None';
}


$sqluserfullname = mysqli_query($link,"SELECT * FROM `user_tbl` WHERE `id`='$userrid'");
$fetchfullname = mysqli_fetch_assoc($sqluserfullname);

echo'
<div class="card">
<div class="card-header">
    <h4 class="card-title"><svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
        <path fill-rule="evenodd" clip-rule="evenodd" d="M2.87187 11.5983C1.79887 8.24832 3.05287 4.41932 6.56987 3.28632C8.41987 2.68932 10.4619 3.04132 11.9999 4.19832C13.4549 3.07332 15.5719 2.69332 17.4199 3.28632C20.9369 4.41932 22.1989 8.24832 21.1269 11.5983C19.4569 16.9083 11.9999 20.9983 11.9999 20.9983C11.9999 20.9983 4.59787 16.9703 2.87187 11.5983Z" stroke="#130F26" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"></path>
        <path d="M16 6.70001C17.07 7.04601 17.826 8.00101 17.917 9.12201" stroke="#130F26" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"></path>
        </svg> Medical Profile</h4>
</div>
<div class="card-body">
<div class="c-profile text-center">
    <img src="'.$profileimage.'" class="rounded-circle mb-2" alt="">
    <h4>'.$fetchfullname['name'].'</h4>
</div>
<div class="c-details">
    <ul>
        <li>
            <span>Date of Birth</span>
            <input type="date" class="form-control mb-3" id="dateofbirth" value="'.$fetch['dateofbirth'].'" placeholder="number">
            
        </li>
        <li>
            <span>Blood Group</span>
    
            <input type="text" name="bloodgroup" id="bloodgroup" value="'.$fetch['bloodgroup'].'"  class="form-control" placeholder="60" required>
        </li>
        <li>
            <span>Genotype</span>
            <input type="text" name="Genotype" id="genotype" value="'.$fetch['genotype'].'"  class="form-control" placeholder="AA" required>
        </li>
        <li>
            <span>Weight</span>
            <input type="text" name="weight" id="weight" value="'.$fetch['weight'].'" class="form-control" placeholder="60" required>
        </li>
        <li>
            <span>Allergies</span>
            <textarea class="form-txtarea form-control" rows="8" id="allergies">'.$allergies.'</textarea>
        </li>
        <li>
            <span>Personal Medical History</span>
            <textarea class="form-txtarea form-control" rows="8" id="pmedicalhistory">'.$pmedhistory.'</textarea>
          
        </li>
        <li>
            <span>Family Medical History</span>
            <textarea class="form-txtarea form-control" rows="8" id="fammedicalhistory">'.$familymedicalhistory.'</textarea>
        
        </li>
        <li>
        <span>Other Medical Information</span>
        <textarea class="form-txtarea form-control" rows="8" id="othermedinfo">'.$fetch['othermedicalinfo'].'</textarea>
        </li>
    </ul>
</div>

<div class="d-flex mt-4 justify-content-end">
    <button type="button" class=" btn btn-primary btn-sm  ms-2 " id="updaatemedicalprofilebtn">
        <i class="fa-solid fa-pen-to-square me-1"></i>
        <span>Update Profile </span>
    </button>
</div>
</div>
</div>
';



?>