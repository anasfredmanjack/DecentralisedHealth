<?php
 ob_start();
 session_start();
if(!isset($_SESSION['meduserid']))
{
header("Location: login.html");
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
	<title> Likyta - Bridging medical gaps</title>
	<!-- FAVICONS ICON -->
	<link rel="shortcut icon" type="image/png" href="images/favicon.png">
	    <!-- Form step -->
<!-- CSS -->
    <!-- Daterange picker -->
    <link href="vendor/bootstrap-daterangepicker/daterangepicker.css" rel="stylesheet">
    <!-- Material color picker -->
    <link href="vendor/bootstrap-material-datetimepicker/css/bootstrap-material-datetimepicker.css" rel="stylesheet">
	
    <!-- Pick date -->
    <link rel="stylesheet" href="vendor/pickadate/themes/default.css">
    <link rel="stylesheet" href="vendor/pickadate/themes/default.date.css">
<link href="https://cdn.jsdelivr.net/npm/smartwizard@6/dist/css/smart_wizard_all.min.css" rel="stylesheet" type="text/css" />
	<link href="https://fonts.googleapis.com/css2?family=Material+Icons" rel="stylesheet">
	    <!-- Clockpicker -->
		<link href="vendor/clockpicker/css/bootstrap-clockpicker.min.css" rel="stylesheet">
	<!-- Style css -->
   <link href="css/style.css" rel="stylesheet">
</head>
<body data-typography="poppins" data-theme-version="light" data-layout="vertical" data-nav-headerbg="color_3" data-headerbg="color_3">

    <!-- Modal -->
<div class="modal fade" id="staticBackdrop"  data-bs-backdrop="static" 
            data-bs-keyboard="false" 
            tabindex="-1"
            aria-labelledby="staticBackdropLabel" 
            aria-hidden="true">
  <div class="modal-dialog modal-lg" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="staticBackdropLabel"> Urgent Verification Needed</h5>
      </div>
      <div class="modal-body">
		
	  		<div class="row">
				<div class="col-md-12">
					<div id="uploadresponse"></div>
				</div>
			</div>


	  <div id="smartwizard" dir="" class="sw sw-theme-square sw-justified">
        <ul class="nav nav-progress">
            <li class="nav-item">
              <a class="nav-link default active" href="#step-1">
                <div class="num">1</div>
                Welcome
              </a>
            </li>
            <li class="nav-item">
              <a class="nav-link default" href="#step-2" data-repo="jquery-smartwizard">
                <span class="num">2</span>
                Medical Profile Upload
              </a>
            </li>
      
        </ul>

        <div class="tab-content" style="height: 91.1875px;">
            <div id="step-1" class="tab-pane" role="tabpanel" aria-labelledby="step-1" style="display: block;">
              
			  <div class="row">
				<div class="col-12">
				<center><h3>Welcome</h3></center>
				</div>
			  <div class="col-12 " >
				
                <div class="alert alert-primary"  style="box-shadow: rgba(0, 0, 0, 0) 0px 3px 8px; padding:30px;">
                <center>
                    <small>
						
           <p><strong><bold>Greetings from Likyta!</bold></strong> We are delighted to welcome you aboard.</p>
           <p>Before gaining access to our comprehensive features, there is one essential step remaining.</p>
           <p>Kindly complete the final phase by uploading your medical profile. </p>
           <p>This ensures Likyta can provide you with accurate analyses tailored to your unique medical condition.</p>
           <p>Please be assured that your data is strictly utilized for the enhancement and optimization of Likyta's services. </p>
           <p>We want to emphasize that your information is not mined in any way but is employed solely to improve Likyta and make it a more effective and personalized platform for your healthcare needs.</p>
           <p>Thank you for entrusting us with your health journey. Your privacy and well-being are our top priorities.</p>
           <p>Feel free to proceed with the medical profile upload, and let Likyta usher in a new era of personalized healthcare excellence for you.</p>
                    </small>
                </center>
                </div>
            </div>
			</div>
            </div>
            <div id="step-2" class="tab-pane" role="tabpanel" aria-labelledby="step-2" style="display: none;">
			<div class="row">
						
												<div class="col-lg-6 mb-2">
													<div class="mb-3">
													<label class="form-label">Date Of Birth<span class="required">*</span></label>
														<input type="text" class="form-control" id="mdate" data-dtp="dtp_sw55P">
														
													</div>
												</div>
											
												<div class="col-lg-6 mb-2">
													<div class="mb-3">
														<label class="text-label form-label">Weight (Kg)<span class="required">*</span></label>
														<input type="text" name="weight" id="weight" class="form-control" placeholder="60" required>
													</div>
												</div>
												<div class="col-lg-6 mb-2">
													<div class="mb-3">
														<label class="text-label form-label">Blood group (E.g: O positive) <span class="required">*</span></label>
														<input type="text" class="form-control" id="bloodgroup" aria-describedby="bloodgroup" placeholder="O positive" required>
													</div>
												</div>
												<div class="col-lg-6 mb-2">
													<div class="mb-3">
														<label class="text-label form-label">Genotype<span class="required">*</span></label>
														<input type="text" name="Genotype" id="genotype" class="form-control" placeholder="AA" required>
													</div>
												</div>
							
												<div class="col-lg-12">
													<div class="mb-3">
													<label class="text-label form-label">Personal Medical History </label>
														<textarea class="form-txtarea form-control" rows="8" id="pmedicalhistory"></textarea>
													</div>
												</div>
												<div class="col-lg-12">
													<div class="mb-3">
													<label class="text-label form-label">Family Medical History </label>
														<textarea class="form-txtarea form-control" rows="8" id="fammedicalhistory"></textarea>
													</div>
												</div>
												<div class="col-lg-12">
													<div class="mb-3">
													<label class="text-label form-label">Allergies<small></label>
														<textarea class="form-txtarea form-control" rows="8" id="allergies"></textarea>
													</div>
												</div>
												<div class="col-lg-12 mb-3">
													<div class="mb-3">
														<label class="text-label form-label">Other medical information</label>
														<textarea class="form-txtarea form-control" rows="8" id="othermedinfo"></textarea>
													</div>
												</div>
												<div class="col-lg-12">
													<center>
													<button type="button" class="btn btn-primary" id="medprofileuploadbtn">Create Profile</button>
													</center>
												</div>
											</div>
            </div>
     
        </div><div class="sw-toolbar-elm toolbar toolbar-bottom" role="toolbar"><button class="btn sw-btn-prev sw-btn disabled" type="button">Previous</button><button class="btn sw-btn-next sw-btn" type="button">Finish !</button></div>

        <div class="progress">
          <div class="progress-bar" role="progressbar" style="width: 20%;" aria-valuenow="25" aria-valuemin="0" aria-valuemax="100"></div>
        </div>
    </div>
      </div>

    </div>
  </div>
</div>
<!--Modal-->
    

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
					<li><h5 class="bc-title">Dashboard</h5></li>
					<li class="breadcrumb-item"><a href="../index.html">
						<svg width="17" height="17" viewBox="0 0 17 17" fill="none" xmlns="http://www.w3.org/2000/svg">
							<path d="M2.125 6.375L8.5 1.41667L14.875 6.375V14.1667C14.875 14.5424 14.7257 14.9027 14.4601 15.1684C14.1944 15.4341 13.8341 15.5833 13.4583 15.5833H3.54167C3.16594 15.5833 2.80561 15.4341 2.53993 15.1684C2.27426 14.9027 2.125 14.5424 2.125 14.1667V6.375Z" stroke="#2C2C2C" stroke-linecap="round" stroke-linejoin="round"/>
							<path d="M6.375 15.5833V8.5H10.625V15.5833" stroke="#2C2C2C" stroke-linecap="round" stroke-linejoin="round"/>
						</svg>
						Home </a>
					</li>
					<li class="breadcrumb-item active"><a href="javascript:void(0)">Dashboard</a></li>
				</ol>
			</div>
			<div class="container-fluid">
				<div class="row">

				<div class="col-12">
        				<div class="card box-hover">
							<div class="card-body">
								<div class="d-flex align-items-center" style="height:100px;">
									<div class="icon-box icon-box-lg bg-success-light rounded-circle">
										<svg width="46" height="46" viewBox="0 0 46 46" fill="none" xmlns="http://www.w3.org/2000/svg">
											<path fill-rule="evenodd" clip-rule="evenodd" d="M22.9715 29.3168C15.7197 29.3168 9.52686 30.4132 9.52686 34.8043C9.52686 39.1953 15.6804 40.331 22.9715 40.331C30.2233 40.331 36.4144 39.2328 36.4144 34.8435C36.4144 30.4543 30.2626 29.3168 22.9715 29.3168Z" stroke="#3AC977" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"></path>
											<path fill-rule="evenodd" clip-rule="evenodd" d="M22.9714 23.0537C27.7304 23.0537 31.5875 19.1948 31.5875 14.4359C31.5875 9.67694 27.7304 5.81979 22.9714 5.81979C18.2125 5.81979 14.3536 9.67694 14.3536 14.4359C14.3375 19.1787 18.1696 23.0377 22.9107 23.0537H22.9714Z" stroke="#3AC977" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"></path>
										</svg>
									</div>
									<div class="total-projects ms-3">
										<h3 class="text-success count">24</h3> 
										<span>Login Streak</span>
									</div>
								</div>
							</div>
						</div>
   	 			</div>

						<div class=" col-lg-6 col-sm- 6">
							<div class="widget-stat card box-hover">
								<div class="card-body p-4">
									<div class="media ai-icon">
										<span class="me-3">
											<!-- <i class="ti-user"></i> -->
											<image src="images/login.png" height="130%" width="130%">
										</span>
										<div class="media-body">
											<p class="mb-1">Medical Assistant</p>
											<h6 class="mb-0">Utilize Likyta AI medical assistant for prompt and precise diagnoses customized to your symptoms and medical profile.</h6>
										
										</div>
									</div>
								</div>
							</div>
						</div>

						<div class=" col-lg-6 col-sm-6">
							<div class="widget-stat card box-hover">
								<div class="card-body p-4">
									<div class="media ai-icon">
										<span class="me-3">
										<svg width="40" height="40" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
											<path fill-rule="evenodd" clip-rule="evenodd" d="M17.2777 13.8891C17.9524 13.8891 18.5188 14.446 18.4156 15.1123C17.8103 19.0323 14.4545 21.9428 10.4072 21.9428C5.92928 21.9428 2.2998 18.3134 2.2998 13.8365C2.2998 10.1481 5.10191 6.7123 8.25665 5.93546C8.93454 5.76809 9.62928 6.24493 9.62928 6.94283C9.62928 11.6712 9.78823 12.8944 10.6861 13.5597C11.584 14.2249 12.6398 13.8891 17.2777 13.8891Z" stroke="#130F26" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/>
											<path fill-rule="evenodd" clip-rule="evenodd" d="M21.6921 9.95157C21.7458 6.91368 18.0142 2.01684 13.4669 2.10105C13.1132 2.10736 12.83 2.4021 12.8142 2.75473C12.6995 5.25263 12.8542 8.48947 12.9406 9.95684C12.9669 10.4137 13.3258 10.7726 13.7816 10.7989C15.29 10.8853 18.6448 11.0032 21.1069 10.6305C21.4416 10.58 21.6869 10.2895 21.6921 9.95157Z" stroke="#130F26" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/>
										</svg>
										</span>
										<div class="media-body">
											<p class="mb-1">Data of Disease</p>
											<h6 class="mb-0">Explore information on diseases and related symptoms with Likyta AI, providing credible and comprehensive details.</h6>
										
										</div>
									</div>
								</div>
							</div>
						</div>

						<div class=" col-lg-6 col-sm-6">
							<div class="widget-stat card box-hover">
								<div class="card-body p-4">
									<div class="media ai-icon">
										<span class="me-3">
											<!-- <i class="ti-user"></i> -->
											<image src="images/precriptionreminder.png" height="130%" width="140%">
										</span>
										<div class="media-body">
											<p class="mb-1">Prescription</p>
											<h6 class="mb-0">Click here to upload your prescription and receive personalized health tips and advice from Likyta AI. Enhance your well-being with tailored insights.</h6>
										
										</div>
									</div>
								</div>
							</div>
						</div>

						<div class=" col-lg-6 col-sm-6">
							<div class="widget-stat card box-hover">
								<div class="card-body p-4">
									<div class="media ai-icon">
										<span class="me-3">
											<!-- <i class="ti-user"></i> -->
											<image src="images/drugstore.png" height="150%" width="200%">
										</span>
										<div class="media-body">
											<p class="mb-1">Drug Store</p>
											<h6 class="mb-0">Upload your prescription details to Likyta AI and receive personalized health tips and dosage reminders. Enhancing your well-being with tailored insights for optimal medication management.</h6>
										
										</div>
									</div>
								</div>
							</div>
						</div>

						<div class=" col-lg-6 col-sm-6">
							<div class="widget-stat card box-hover">
								<div class="card-body p-4">
									<div class="media ai-icon">
										<span class="me-3">
											<!-- <i class="ti-user"></i> -->
											<image src="images/consultation.png" height="150%" width="180%">
										</span>
										<div class="media-body">
											<p class="mb-1">Medical Consultation</p>
											<h6 class="mb-0">Click here to connect with real-life doctors through Likyta AI for your health needs.</h6>
										
										</div>
									</div>
								</div>
							</div>
						</div>

						<div class=" col-lg-6 col-sm-6">
							<div class="widget-stat card box-hover">
								<div class="card-body p-4">
									<div class="media ai-icon">
										<span class="me-3">
											<!-- <i class="ti-user"></i> -->
											<image src="images/medicalprof.png" height="180%" width="180%">
										</span>
										<div class="media-body">
											<p class="mb-1">Medical Profile</p>
											<h6 class="mb-0">Explore and manage your comprehensive medical profile by clicking here. Access a wealth of information tailored to your health journey.</h6>
										
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
	<!-- JavaScript -->

     <script src="vendor/global/global.min.js"></script>
			<!-- Form Steps -->
			<script src="vendor/jquery-steps/build/jquery.steps.min.js"></script>
    <script src="vendor/jquery-validation/jquery.validate.min.js"></script>
    <!-- Form validate init -->
    <script src="js/plugins-init/jquery.validate-init.js"></script>

   <!-- Daterangepicker -->
    <!-- momment js is must -->
    <script src="vendor/moment/moment.min.js"></script>
    <script src="vendor/bootstrap-daterangepicker/daterangepicker.js"></script>
    <!-- clockpicker -->
    <script src="vendor/clockpicker/js/bootstrap-clockpicker.min.js"></script>
    <!-- asColorPicker -->
    <script src="vendor/jquery-asColor/jquery-asColor.min.js"></script>
    <script src="vendor/jquery-asGradient/jquery-asGradient.min.js"></script>
    <script src="vendor/jquery-asColorPicker/js/jquery-asColorPicker.min.js"></script>
    <!-- Material color picker -->
    <script src="vendor/bootstrap-material-datetimepicker/js/bootstrap-material-datetimepicker.js"></script>
    <!-- pickdate -->
    <script src="vendor/pickadate/picker.js"></script>
    <script src="vendor/pickadate/picker.time.js"></script>
    <script src="vendor/pickadate/picker.date.js"></script>



    <!-- Daterangepicker -->
    <script src="js/plugins-init/bs-daterange-picker-init.js"></script>
    <!-- Clockpicker init -->
    <script src="js/plugins-init/clock-picker-init.js"></script>
    <!-- asColorPicker init -->
    <script src="js/plugins-init/jquery-asColorPicker.init.js"></script>
    <!-- Material color picker init -->
    <script src="js/plugins-init/material-date-picker-init.js"></script>
    <!-- Pickdate -->
    <script src="js/plugins-init/pickadate-init.js"></script>


	<!-- Form Steps -->
	<script src="https://cdn.jsdelivr.net/npm/smartwizard@6/dist/js/jquery.smartWizard.min.js" type="text/javascript"></script>
	<script src="vendor/bootstrap-select/dist/js/bootstrap-select.min.js"></script>
	
	
	<script src="vendor/draggable/draggable.js"></script>
	
	
     <script src="js/custom.js"></script>
	<script src="js/deznav-init.js"></script>
	<script>
	      
	       $(document).ready(function(){
	
	                var userrid = "<?php echo $userrid; ?>";
               $.ajax({
									type : 'post',
									url : '../scripts/checkmedicalprofile.php', //Here you will fetch records 
									data: 'userrid='+userrid,
									success : function(data)
									{
									    var vendorverstats = (data);
									    if(vendorverstats == '1')
									    {
									       $('#staticBackdrop').modal('hide'); 
									    }else
									    {
									        $('#staticBackdrop').modal('show'); 
									    }
									        
									
									  
									    
									}
               });
               
	       });
	</script>
	<script>
		$(document).ready(function(){
			// SmartWizard initialize
			$('#smartwizard').smartWizard(); 
		});
	</script>
	<script>
		$("body").on("click","#medprofileuploadbtn", function(){
			$("#medprofileuploadbtn").html('<i style="color:white;" class="fa fa-spinner fa-spin"></i>');
			var dateofbirth = $("#mdate").val();
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
				$("#uploadresponse").html('<div class="alert alert-warning" role="alert"><center><i class="fa fa-warning"></i>  Fill all fields to proceed!!</center></div>');
				$("#medprofileuploadbtn").html("Create Profile");
				$("html, #uploadresponse").animate({ scrollTop: 0 }, "slow"); 
			}
			else
			{
				$.ajax({
							type : 'post',
							url : "../scripts/createusermedicalprofile.php", //Here you will fetch records 
							data:  'userid='+userid+'&dateofbirth='+dateofbirth+'&weight='+weight+'&bloodgroup='+bloodgroup+'&genotype='+genotype+'&pmedicalhistory='+pmedicalhistory+'&fammedicalhistory='+fammedicalhistory+'&allergies='+allergies+'&othermedinfo='+othermedinfo,
							success : function(data)
							{
							  $("#uploadresponse").html(data);	
							  $("#medprofileuploadbtn").html("Create Profile");
							  location.reload();
								
									   
							}
							 
						});
			}





		});
	</script>
	
</body>
</html>