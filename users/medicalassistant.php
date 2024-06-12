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
					<li><h5 class="bc-title">Medical Assistant</h5></li>
					<li class="breadcrumb-item"><a href="dashboard.php">
						<svg width="17" height="17" viewBox="0 0 17 17" fill="none" xmlns="http://www.w3.org/2000/svg">
							<path d="M2.125 6.375L8.5 1.41667L14.875 6.375V14.1667C14.875 14.5424 14.7257 14.9027 14.4601 15.1684C14.1944 15.4341 13.8341 15.5833 13.4583 15.5833H3.54167C3.16594 15.5833 2.80561 15.4341 2.53993 15.1684C2.27426 14.9027 2.125 14.5424 2.125 14.1667V6.375Z" stroke="#2C2C2C" stroke-linecap="round" stroke-linejoin="round"/>
							<path d="M6.375 15.5833V8.5H10.625V15.5833" stroke="#2C2C2C" stroke-linecap="round" stroke-linejoin="round"/>
						</svg>
						Home </a>
					</li>
					<li class="breadcrumb-item active"><a href="javascript:void(0)">Medical Assistant</a></li>
				</ol>
			</div>
			<div class="container-fluid">
					<div class="row">
						<div class="col-md-12">
							<div id="medassinotresp"></div>
						</div>
					</div>

							<div class="row align-items-center">
								<div id="chatcontainer" style="margin-bottom:-130px;"></div>
							</div>
					


							<div class="medassistantdiv" style="margin-bottom:0%; margin-top:20%;">
							
								<div class="row">
									<div class="col-2">
										<img class="img-fluid" src="images/login.png" alt="image"> 
									</div>


										<div class="col-10">
											<div class="card box-hover">
												<div class="card-header">
													<p>
													<small> Hello i am Likyta your medical assistant</small>
													<br>
													<small>Greetings from Likyta! Tell me how is your health today ?</small>
												</p>
												</div>

												<div class="card-body">
													<div class="message-send style-2">
														<div class="type-massage style-1">
															<div class="input-group">
																<textarea rows="1" class="form-control" placeholder="How can i help..." id="userinput"></textarea>
															</div>
														</div>
														<button type="button" id="submitbtn" class="btn btn-primary p-2">
															Talk to me
															<svg width="16" height="16" viewBox="0 0 16 16" fill="none" xmlns="http://www.w3.org/2000/svg">
																<path d="M10.555 5.44976L6.73936 9.30612L2.39962 6.59178C1.77783 6.20276 1.90718 5.25829 2.61048 5.05262L12.9142 2.03518C13.5582 1.84642 14.155 2.44855 13.9637 3.09466L10.9154 13.3912C10.7066 14.0955 9.76747 14.2213 9.38214 13.5968L6.73734 9.3068" stroke="white" stroke-linecap="round" stroke-linejoin="round"></path>
															</svg>
														</button>
													</div>						
								
												</div>

											</div>
										</div>


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
    $("body").on("click","#submitbtn",function(){
        $("#submitbtn").html('<i style="color:white;" class="fa fa-spinner fa-spin"></i>');
        var userinput = $("#userinput").val();
         var userrid = "<?php echo $userrid; ?>";
        if (userinput == "") {
        $("#medassinotresp").html('<div class="alert alert-warning alert-dismissible fade show" role="alert"><button type="button" class="close" aria-label="Close" data-dismiss="alert"><span aria-hidden="true">×</span></button><center>Fill all fields in order to proceed</center></div>');
        $("#submitbtn").html('Talk to me <i class="pe-7s-paper-plane" style="font-size:100%;"> </i>');
        }
        else
        {
             const para = document.createElement("div");
             para.setAttribute ('class', 'row');
                para.innerHTML = "<div class='col-12'><div class='card-hover-shadow card-border mb-3 card'><div class='card-body'><div class='row align-items-center'><div class='col-lg-12 col-md-12 text-center'><strong>Patient:</strong> "+userinput+"</div></div></div>";
                // Append to another element:
                document.getElementById("chatcontainer").appendChild(para);
                
            $.ajax({
                    url: '../scripts/rungpt.php',
                    method:'POST',
                    data: 'userinput='+userinput+'&userrid='+userrid,
                    success: function(data)
                    {
                    
                        $("#chatcontainer").append(data);
                        $("#submitbtn").html('Talk to me <i class="pe-7s-paper-plane" style="font-size:100%;"> </i>');
                    }
                });

        } 
          
    });
</script>
	
	
</body>
</html>