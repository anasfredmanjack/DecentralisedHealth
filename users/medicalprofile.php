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
					<li><h5 class="bc-title"><svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
										<path fill-rule="evenodd" clip-rule="evenodd" d="M2.87187 11.5983C1.79887 8.24832 3.05287 4.41932 6.56987 3.28632C8.41987 2.68932 10.4619 3.04132 11.9999 4.19832C13.4549 3.07332 15.5719 2.69332 17.4199 3.28632C20.9369 4.41932 22.1989 8.24832 21.1269 11.5983C19.4569 16.9083 11.9999 20.9983 11.9999 20.9983C11.9999 20.9983 4.59787 16.9703 2.87187 11.5983Z" stroke="#130F26" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"></path>
										<path d="M16 6.70001C17.07 7.04601 17.826 8.00101 17.917 9.12201" stroke="#130F26" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"></path>
										</svg> Medical Profile</h5></li>
					<li class="breadcrumb-item"><a href="dashboard.php">
						<svg width="17" height="17" viewBox="0 0 17 17" fill="none" xmlns="http://www.w3.org/2000/svg">
							<path d="M2.125 6.375L8.5 1.41667L14.875 6.375V14.1667C14.875 14.5424 14.7257 14.9027 14.4601 15.1684C14.1944 15.4341 13.8341 15.5833 13.4583 15.5833H3.54167C3.16594 15.5833 2.80561 15.4341 2.53993 15.1684C2.27426 14.9027 2.125 14.5424 2.125 14.1667V6.375Z" stroke="#2C2C2C" stroke-linecap="round" stroke-linejoin="round"/>
							<path d="M6.375 15.5833V8.5H10.625V15.5833" stroke="#2C2C2C" stroke-linecap="round" stroke-linejoin="round"/>
						</svg>
						Home </a>
					</li>
					<li class="breadcrumb-item active"><a href="javascript:void(0)">Medical Profile</a></li>
				</ol>
			</div>


                <div class="container-fluid">
                        <div class="row">
                            <div class="col-12">
                                <div id="loadmedicalprofile"></div>

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
            $("#loadmedicalprofile").html('<center><i style="color:white;" class="fa fa-spinner fa-spin"></i></center>');
            $.ajax({
                    url: '../scripts/loadmedicalprofile.php',
                    method:'POST',
                    data: 'userrid='+userrid,
                    success: function(data)
                    {
                    
                        $("#loadmedicalprofile").html(data);
                    }
                });


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