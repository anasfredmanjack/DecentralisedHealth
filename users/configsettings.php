<?php
 ob_start();
 session_start();
if(!isset($_SESSION['meduserid']))
{
header("Location: ../login.html");
}
include('../scripts/config/config.php');
 $userrid = $_SESSION['meduserid'];
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="keywords" content="">
	<meta name="author" content="">
	<meta name="robots" content="">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<meta name="description" content="Likyta:Bridging Medical Gaps">
	<meta property="og:title" content="Likyta:Bridging Medical Gaps">
	<meta property="og:description" content="Likyta:Bridging Medical Gaps">
	<meta property="og:image" content="images/logo-white.png">
	<meta name="format-detection" content="telephone=no">
	
	<!-- PAGE TITLE HERE -->
	<title>Likyta - Bridging medical gaps</title>
	<!-- FAVICONS ICON -->
	<link rel="shortcut icon" type="image/png" href="images/favicon.png">
	
	<link href="vendor/bootstrap-select/dist/css/bootstrap-select.min.css" rel="stylesheet">
	<link href="vendor/swiper/css/swiper-bundle.min.css" rel="stylesheet">
	<link href="https://fonts.googleapis.com/css2?family=Material+Icons" rel="stylesheet">
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/noUiSlider/14.6.4/nouislider.min.css">
	<link href="vendor/datatables/css/jquery.dataTables.min.css" rel="stylesheet">
	<link href="vendor/jvmap/jquery-jvectormap.css" rel="stylesheet">
	<link href="https://cdn.datatables.net/buttons/1.6.4/css/buttons.dataTables.min.css" rel="stylesheet">
	<link href="vendor/bootstrap-datetimepicker/css/bootstrap-datetimepicker.min.css" rel="stylesheet">
	
	<!-- tagify-css -->
	<link href="vendor/tagify/dist/tagify.css" rel="stylesheet">
    
	
	<!-- Style css -->
   <link href="css/style.css" rel="stylesheet">
	
</head>
<body data-typography="poppins" data-theme-version="light" data-layout="vertical" data-nav-headerbg="color_3" data-headerbg="color_3">

    <!--*******************
        Preloader start
    ********************-->
    <div id="preloader">
		<div class="lds-ripple">
			<div></div>
			<div></div>
		</div>
    </div>
    <!--*******************
        Preloader end
    ********************-->

    <!--**********************************
        Main wrapper start
    ***********************************-->
    <div id="main-wrapper">
		
	<?php include('includes/header.php');  ?>


        <!--**********************************
            Sidebar start
        ***********************************-->
		<?php include('includes/sidebar.php');  ?>
        <!--**********************************
            Sidebar end
        ***********************************-->
	
		<!--**********************************
            Content body start
        ***********************************-->
        <div class="content-body">
            <!-- row -->	
			<div class="page-titles">
				<ol class="breadcrumb">
					<li><h5 class="bc-title">
                    <svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
							<path fill-rule="evenodd" clip-rule="evenodd" d="M20.8064 7.62355L20.184 6.54346C19.6574 5.62954 18.4905 5.31426 17.5753 5.83866V5.83866C17.1397 6.09528 16.6198 6.16809 16.1305 6.04103C15.6411 5.91396 15.2224 5.59746 14.9666 5.16131C14.8021 4.88409 14.7137 4.56833 14.7103 4.24598V4.24598C14.7251 3.72916 14.5302 3.22834 14.1698 2.85761C13.8094 2.48688 13.3143 2.2778 12.7973 2.27802H11.5433C11.0367 2.27801 10.5511 2.47985 10.1938 2.83888C9.83644 3.19791 9.63693 3.68453 9.63937 4.19106V4.19106C9.62435 5.23686 8.77224 6.07675 7.72632 6.07664C7.40397 6.07329 7.08821 5.98488 6.81099 5.82035V5.82035C5.89582 5.29595 4.72887 5.61123 4.20229 6.52516L3.5341 7.62355C3.00817 8.53633 3.31916 9.70255 4.22975 10.2322V10.2322C4.82166 10.574 5.18629 11.2055 5.18629 11.889C5.18629 12.5725 4.82166 13.204 4.22975 13.5457V13.5457C3.32031 14.0719 3.00898 15.2353 3.5341 16.1453V16.1453L4.16568 17.2345C4.4124 17.6797 4.82636 18.0082 5.31595 18.1474C5.80554 18.2865 6.3304 18.2248 6.77438 17.976V17.976C7.21084 17.7213 7.73094 17.6515 8.2191 17.7821C8.70725 17.9128 9.12299 18.233 9.37392 18.6716C9.53845 18.9488 9.62686 19.2646 9.63021 19.5869V19.5869C9.63021 20.6435 10.4867 21.5 11.5433 21.5H12.7973C13.8502 21.5 14.7053 20.6491 14.7103 19.5961V19.5961C14.7079 19.088 14.9086 18.6 15.2679 18.2407C15.6272 17.8814 16.1152 17.6806 16.6233 17.6831C16.9449 17.6917 17.2594 17.7797 17.5387 17.9393V17.9393C18.4515 18.4653 19.6177 18.1543 20.1474 17.2437V17.2437L20.8064 16.1453C21.0615 15.7074 21.1315 15.1859 21.001 14.6963C20.8704 14.2067 20.55 13.7893 20.1108 13.5366V13.5366C19.6715 13.2839 19.3511 12.8665 19.2206 12.3769C19.09 11.8872 19.16 11.3658 19.4151 10.9279C19.581 10.6383 19.8211 10.3981 20.1108 10.2322V10.2322C21.0159 9.70283 21.3262 8.54343 20.8064 7.63271V7.63271V7.62355Z" stroke="#888888" stroke-width="1" stroke-linecap="round" stroke-linejoin="round"/>
							<circle cx="12.1747" cy="11.889" r="2.63616" stroke="#888888" stroke-width="1" stroke-linecap="round" stroke-linejoin="round"/>
							</svg>
                    Settings</h5></li>
					<li class="breadcrumb-item"><a href="dashboard.php">
						<svg width="17" height="17" viewBox="0 0 17 17" fill="none" xmlns="http://www.w3.org/2000/svg">
							<path d="M2.125 6.375L8.5 1.41667L14.875 6.375V14.1667C14.875 14.5424 14.7257 14.9027 14.4601 15.1684C14.1944 15.4341 13.8341 15.5833 13.4583 15.5833H3.54167C3.16594 15.5833 2.80561 15.4341 2.53993 15.1684C2.27426 14.9027 2.125 14.5424 2.125 14.1667V6.375Z" stroke="#2C2C2C" stroke-linecap="round" stroke-linejoin="round"/>
							<path d="M6.375 15.5833V8.5H10.625V15.5833" stroke="#2C2C2C" stroke-linecap="round" stroke-linejoin="round"/>
						</svg>
						Home </a>
					</li>
					<li class="breadcrumb-item active"><a href="javascript:void(0)">Settings</a></li>
				</ol>
			</div>


                <div class="container-fluid">
                        <div class="row">
                            <div class="col-12">
                            <div class="card ">
								<div class="card-body">
									<div class="p-5">
										<div class="author-profile">
											<div class="author-media">
												<img src="images/unknownuser.png" alt="">
												<div class="upload-link" title="" data-toggle="tooltip" data-placement="right" data-original-title="update">
													<input type="file" class="update-flie">
													<i class="fa fa-camera"></i>
												</div>
											</div>

											<div class="author-info">
												<h6 class="title">Nella Vita</h6>
                                            </div>

										</div>
									</div>
                                    <div class="row">
                                        <div class="col-12">
                                        <label>Full Name: </label>
                                         <input type="text" class="form-control mb-3" id="dateofbirth" value="'.$fetch['dateofbirth'].'" placeholder="number">
                                        </div>
                                        <div class="col-12">
                                        <label>Country: </label>
                                         <input type="text" class="form-control mb-3" id="dateofbirth" value="'.$fetch['dateofbirth'].'" placeholder="number">
                                        </div>
                                        <div class="col-6">
                                        <label>State/City:</label>
                                         <input type="text" class="form-control mb-3" id="dateofbirth" value="'.$fetch['dateofbirth'].'" placeholder="number">
                                        </div>
                                        <div class="col-6">
                                        <label>Street:</label>
                                         <input type="text" class="form-control mb-3" id="dateofbirth" value="'.$fetch['dateofbirth'].'" placeholder="number">
                                        </div>
                                    </div>
								</div>
								<div class="card-footer">
                                <div class="d-flex mt-4 justify-content-end">
                                    <button type="button" class=" btn btn-primary btn-sm  ms-2 " id="updaatemedicalprofilebtn">
                                        <i class="fa-solid fa-pen-to-square me-1"></i>
                                        <span>Update Profile </span>
                                    </button>
                                </div>
								</div>
							</div>

                            </div>
                        </div>


                        <div class="row">
                            <div class="col-12">
                            <div class="card ">
                            <div class="card-header">
                                <h4>Change Password</h4>
                            </div>
								<div class="card-body">
									<div class="row">
                                        <div class="col-12">
                                        <label>Old Password</label>
                                         <input type="date" class="form-control mb-3" id="dateofbirth" value="'.$fetch['dateofbirth'].'" placeholder="number">
                                        </div>
                                        <div class="col-12">
                                        <label>New Password</label>
                                         <input type="date" class="form-control mb-3" id="dateofbirth" value="'.$fetch['dateofbirth'].'" placeholder="number">
                                        </div>
                                        <div class="col-12">
                                        <label>Confirm New Password</label>
                                         <input type="date" class="form-control mb-3" id="dateofbirth" value="'.$fetch['dateofbirth'].'" placeholder="number">
                                        </div>
                                    </div>
								</div>
                                
								<div class="card-footer">
                                <div class="d-flex mt-4 justify-content-end">
                                    <button type="button" class=" btn btn-primary btn-sm  ms-2 " id="updaatemedicalprofilebtn">
                                        <i class="fa-solid fa-pen-to-square me-1"></i>
                                        <span>Update Profile </span>
                                    </button>
                                </div>
								</div>
							</div>

                            </div>
                        </div>



                
                </div>

        </div>
        <div class="modal fade" id="exampleModal3" tabindex="-1"  aria-hidden="true">
			<div class="modal-dialog modal-dialog-centered">
				<div class="modal-content">
						<div class="modal-header ">
						<h5 class="modal-title">Edit Your Medical Profile</h5>
						<button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
						</div>
						<div class="modal-body">

							<div class="row">
								<div class="col-md-12">
									<div id="updatemedprofileresponse"></div>
								</div>
							</div>

							<div id="editmedprofilebody"></div>
						</div>
				
				</div>
			</div>
		  </div>
		
        <!--**********************************
            Content body end
        ***********************************-->
	
		
        <!--**********************************
            Footer start
        ***********************************-->
        <div class="footer">
            <div class="copyright">
               <p>Copyright © <a href="https://dexignzone.com/" target="_blank">Likyta</a></p>
            </div>
        </div>
        <!--**********************************
            Footer end
        ***********************************-->

		<!--**********************************
           Support ticket button start
        ***********************************-->
		
        <!--**********************************
           Support ticket button end
        ***********************************-->


	</div>
    <!--**********************************
        Main wrapper end
    ***********************************-->

    <!--**********************************
        Scripts
    ***********************************-->
    <!-- Required vendors -->
     <script src="vendor/global/global.min.js"></script>
	<script src="vendor/chart.js/Chart.bundle.min.js"></script>
	<script src="vendor/bootstrap-select/dist/js/bootstrap-select.min.js"></script>
	<script src="vendor/apexchart/apexchart.js"></script>
		<!-- Chart sparkline plugin files -->
        <script src="vendor/jquery-sparkline/jquery.sparkline.min.js"></script>
	<script src="js/plugins-init/sparkline-init.js"></script>
	<!-- Dashboard 1 -->
	<script src="js/dashboard/dashboard-1.js"></script>
	<script src="vendor/draggable/draggable.js"></script>
	
	
	<!-- tagify -->
	<script src="vendor/tagify/dist/tagify.js"></script>
	 
	<script src="vendor/datatables/js/jquery.dataTables.min.js"></script>
	<script src="vendor/datatables/js/dataTables.buttons.min.js"></script>
	<script src="vendor/datatables/js/buttons.html5.min.js"></script>
	<script src="vendor/datatables/js/jszip.min.js"></script>
	<script src="js/plugins-init/datatables.init.js"></script>
   
	<!-- Apex Chart -->
	
	<script src="vendor/bootstrap-datetimepicker/js/moment.js"></script>
	<script src="vendor/bootstrap-datetimepicker/js/bootstrap-datetimepicker.min.js"></script>
	

	<!-- Vectormap -->
    <script src="vendor/jqvmap/js/jquery.vmap.min.js"></script>
    <script src="vendor/jqvmap/js/jquery.vmap.world.js"></script>
    <script src="vendor/jqvmap/js/jquery.vmap.usa.js"></script>
     <script src="js/custom.js"></script>
	<script src="js/deznav-init.js"></script>
    <script>
        $(document).ready(function(){
            var userrid = "<?php echo $userrid; ?>";
        


				//========load edit medical profile======//
				$("#editmedprofilebody").html('<center><i style="color:white;" class="fa fa-spinner fa-spin"></i></center>');
            $.ajax({
                    url: '../scripts/loadeditmedicalprofile.php',
                    method:'POST',
                    data: 'userrid='+userrid,
                    success: function(data)
                    {
                    
                        $("#editmedprofilebody").html(data);
                    }
                });

					//========load edit medical profile end======//

        });

					//========update medical profile======//
					$("body").on("click","#updaatemedicalprofilebtn", function(){
						$("#updaatemedicalprofilebtn").html('<center><i style="color:white;" class="fa fa-spinner fa-spin"></i></center>');
									var dateofbirth = $("#dateofbirth").val();
									var weight = $("#weight").val();
									var bloodgroup = $("#bloodgroup").val();
									var genotype = $("#genotype").val();
									var pmedicalhistory = $("#pmedicalhistory").val();
									var fammedicalhistory = $("#fammedicalhistory").val();
									var allergies = $("#allergies").val();
									var othermedinfo = $("#othermedinfo").val();
									var userid = "<?php echo $userrid; ?>";
									
									if(dateofbirth == '' || weight == '' || genotype == ''  || bloodgroup == '')
									{
										$("#updatemedprofileresponse").html('<div class="alert alert-warning" role="alert"><center><i class="fa fa-warning"></i>  Fill all fields to proceed!!</center></div>');
										$("#updaatemedicalprofilebtn").html("Create Profile");
										$("html, #updatemedprofileresponse").animate({ scrollTop: 0 }, "slow"); 
									}
									else
									{
										$.ajax({
													type : 'post',
													url : "../scripts/updateusermedicalprofile.php", //Here you will fetch records 
													data:  'userid='+userid+'&dateofbirth='+dateofbirth+'&weight='+weight+'&bloodgroup='+bloodgroup+'&genotype='+genotype+'&pmedicalhistory='+pmedicalhistory+'&fammedicalhistory='+fammedicalhistory+'&allergies='+allergies+'&othermedinfo='+othermedinfo,
													success : function(data)
													{
													$("#updatemedprofileresponse").html(data);	
													$("#updaatemedicalprofilebtn").html('<i class="fa-solid fa-pen-to-square me-1"></i><span>Update Profile </span>');
													location.reload();
														
															
													}
													
												});
									}

					});
					//========End update medical profile======//
    </script>
	
	
</body>
</html>