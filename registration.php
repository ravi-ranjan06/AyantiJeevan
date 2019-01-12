<?php
require_once('util/class.register.php');

$register       = new Register();

$countryList    = $register->jd($register->getCountryList());
?>
<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="utf-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width, initial-scale=1">
<title>AyantiJeevan</title>
<meta content="" name="keywords">
<meta content="" name="description">
<!-- Favicons -->
<link href="<?php echo BASE_URL; ?>assets/img/ayantilogo.png" rel="icon">
<!-- morris -->
<link href="<?php echo BASE_URL; ?>assets/css/morris.css" rel="stylesheet">
<!-- Bootstrap -->
<link href="<?php echo BASE_URL; ?>assets/css/bootstrap.min.css" rel="stylesheet">
<link href="assets/css/bootstrap-datetimepicker.min.css" rel="stylesheet" media="screen">
<link rel="stylesheet" type="text/css" href="assets/css/daterangepicker.css" />
<!-- slimscroll -->
<link href="<?php echo BASE_URL; ?>assets/css/jquery.slimscroll.css" rel="stylesheet">
<!-- Fontes -->
<link href="<?php echo BASE_URL; ?>assets/css/font-awesome.min.css" rel="stylesheet">
<link href="<?php echo BASE_URL; ?>assets/css/simple-line-icons.css" rel="stylesheet">
<!-- all buttons css -->
<link href="<?php echo BASE_URL; ?>assets/css/buttons.css" rel="stylesheet">
<!-- animate css -->
<link href="<?php echo BASE_URL; ?>assets/css/animate.css" rel="stylesheet">
<!-- top nev css -->
<link href="<?php echo BASE_URL; ?>assets/css/page-header.css" rel="stylesheet">
<!-- adminui main css -->
<link href="<?php echo BASE_URL; ?>assets/css/main.css" rel="stylesheet">
<!-- green theme css -->
<link href="<?php echo BASE_URL; ?>assets/css/green.css" rel="stylesheet">
<!-- media css for responsive  -->
<link href="<?php echo BASE_URL; ?>assets/css/main.media.css" rel="stylesheet">
<!-- icheck -->
<link href="<?php echo BASE_URL; ?>assets/css/skins/all.css" rel="stylesheet">
<link href="<?php echo BASE_URL; ?>assets/lib/select2/css/select2.min.css" rel="stylesheet">
<!-- aj dragable alert css-->
<link href="<?php echo BASE_URL; ?>assets/js/plugins/jquery-confirm/jquery-confirm.min.css" rel="stylesheet">
</head>
<body class="page-footer-fixed" style="background-color:#44b6ae;">	
    <div class="page-header navbar navbar-fixed-top">
        <div class="page-header-inner">
                <div class="row wrapper border-bottom page-heading">
                    <div class="col-sm-12 col-md-12 col-lg-12 col-xl-12 text-center" style="background-color: #3ee1d6;">
                        <h2><img src="assets/img/ayantilogo.png" alt="" title="" height="80px" width="80px"/><b>REGISTER HERE !!!</b></h2>          
                    </div>
                </div>
            </div>
        </div>
	<div class="clearfix"> </div>
    <br><br><br><br><br><br><br><br>
	<div class="page-container">
    	<div class="page-content">
      		<div class="wrapper-content">
                <form name="register" id="register" action="registrationProcess" method="POST" enctype="multipart/form-data" onsubmit="return validateMe();">
                    <div class="row">
                        <div class="col-sm-4 col-md-4 col-lg-4 col-xl-4">
                            <div class="ibox float-e-margins">
                                <div class="ibox-title">
                                    <h5>Sponsor Details :</h5>
                                    <div class="ibox-tools"> <a class="collapse-link" data-toggle="collapse"  data-target="#tab1"> <i class="fa fa-chevron-up"></i> <i class="fa fa-chevron-down"></i> </a> <a href="#" data-toggle="dropdown" class="dropdown-toggle"></a><a class="close-link"> <i class="fa fa-times"></i> </a> </div>
                                </div>
                                <div class="ibox-content collapse in" id="tab1">
                                    <div class="widgets-container">
                                        <div class="form-group">
                                            <label for="sponsorid">Sponsor Id<font color='red'>*</font></label>
                                            <input class="form-control m-t-xxs" id="sponsorid" name="sponsorid" placeholder="Enter Sponsor Id" type="text">
                                        </div>
                                        <div class="form-group">
                                            <label for="sponsorname">Sponsor Name<font color='red'>*</font></label>
                                            <input name="sponsorname" class="form-control m-t-xxs" id="sponsorname" placeholder="Sponsor Name" type="text" readonly>
                                        </div>
                                        <div class="form-group">
                                            <label for="parentid">Parent Id<font color='red'>*</font></label>
                                            <input name="parentid" class="form-control m-t-xxs" id="parentid" placeholder="Enter Parent Id" type="text">
                                        </div>
                                        <div class="form-group">
                                            <label for="parentname">Parent Name<font color='red'>*</font></label>
                                            <input name="parentname" class="form-control m-t-xxs" id="parentname" placeholder="Parent Name" type="text" readonly>
                                        </div>
                                        <div class="form-group">
                                            <label for="select">Select Position<font color='red'>*</font></label>
                                            <select class="form-control" name="position" id="position">
                                                <option value="">Select One</option>
                                                <option value="left">Left</option>
                                                <option value="right">Right</option>
                                            </select>
                                        </div>
                                        <div class="form-group">
                                            &nbsp;
                                        </div>
                                        <div class="form-group">
                                            &nbsp;
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-sm-4 col-md-4 col-lg-4 col-xl-4">
                            <div class="ibox float-e-margins">
                                <div class="ibox-title">
                                    <h5>Personal Details :</h5>
                                    <div class="ibox-tools"> <a class="collapse-link" data-toggle="collapse"  data-target="#tab2"> <i class="fa fa-chevron-up"></i> <i class="fa fa-chevron-down"></i> </a> <a href="#" data-toggle="dropdown" class="dropdown-toggle"></a><a class="close-link"> <i class="fa fa-times"></i> </a> </div>
                                </div>
                                <div class="ibox-content collapse in" id="tab2">
                                    <div class="widgets-container">
                                        <div class="form-group">
                                            <label for="select">Select Title<font color='red'>*</font></label>
                                            <select class="form-control" name="title" id="title">
                                                <option value="">Select Title</option>
                                                <option value="Mr">Mr</option>
                                                <option value="Ms">Ms</option>
                                                <option value="Mrs">Mrs</option>
                                                <option value="M/S">M/S</option>
                                            </select>
                                        </div>
                                        <div class="form-group">
                                            <label for="firstname">First Name<font color='red'>*</font></label>
                                            <input name="firstname" class="form-control m-t-xxs" id="firstname" placeholder="Enter First Name" type="text">
                                        </div>
                                        <div class="form-group">
                                            <label for="lastname">Last Name<font color='red'>*</font></label>
                                            <input name="lastname" class="form-control m-t-xxs" id="lastname" placeholder="Enter Last Name" type="text">
                                        </div>
                                        <div class="form-group">
                                            <label for="dob">Date Of Birth<font color='red'>*</font></label>
                                            <div class="input-group date">
                                                <span class="input-group-addon"><i class="fa fa-calendar glyphicon glyphicon-calendar"></i></span>
                                                <input name="dob" class="form-control m-t-xxs" id="dob" placeholder="MM-DD-YY" type="date">
                                            </div>
                                            <!-- <label for="dob">Date Of Birth<font color='red'>*</font></label>
                                            <input name="dob" class="form-control m-t-xxs" id="dob" placeholder="MM-DD-YYYY" type="text"> -->
                                       </div>
                                        <div class="form-group">
                                            <label for="email">Email</label>
                                            <input name="email" class="form-control m-t-xxs" id="email" placeholder="Enter Email" type="email">
                                        </div>
                                        <div class="form-group">
                                            <label for="contactno">Contact No<font color='red'>*</font></label>
                                            <input name="contactno" class="form-control m-t-xxs" id="contactno" placeholder="Enter Phone NO" type="text" onkeypress="return numcheck(event);">
                                        </div>
                                        <!-- <div class="form-group">
                                            &nbsp;
                                        </div>
                                        <div class="form-group">
                                            &nbsp;
                                        </div> -->
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-sm-4 col-md-4 col-lg-4 col-xl-4">
                            <div class="ibox float-e-margins">
                                <div class="ibox-title">
                                    <h5>Address Details :</h5>
                                    <div class="ibox-tools"> <a class="collapse-link" data-toggle="collapse"  data-target="#tab3"> <i class="fa fa-chevron-up"></i> <i class="fa fa-chevron-down"></i> </a> <a href="#" data-toggle="dropdown" class="dropdown-toggle"></a><a class="close-link"> <i class="fa fa-times"></i> </a> </div>
                                </div>
                                <div class="ibox-content collapse in" id="tab3">
                                    <div class="widgets-container">
                                        <div class="form-group">
                                            <label for="address">Address<font color='red'>*</font></label>
                                            <textarea name="address" id="address" class="form-control m-t-xxs" placeholder="Enter Address"></textarea>
                                        </div>
                                        <div class="form-group">
                                            <label for="country">Country<font color='red'>*</font></label>
                                            <select class="form-control select-show-search" name="country" id="country" onchange="selectState(this.value);">
                                                <option value="">Select One</option>
                                                <?php
                                                for($i=0;$i<sizeof($countryList);$i++)
                                                {
                                                    ?>
                                                    <option value="<?=$countryList[$i]['country']?>"><?=$countryList[$i]['country']?></option>
                                                    <?php
                                                }
                                                ?>            
                                            </select>
                                        </div>
                                        <div class="form-group">
                                            <label for="state">State<font color='red'>*</font></label>
                                            <select class="form-control select-show-search2" name="state" id="state" onchange="selectCity(this.value);">
                                                <option>Select State</option>
                                            </select>
                                        </div>
                                        <div class="form-group">
                                            <label for="city">City<font color='red'>*</font></label>
                                            <select class="form-control select-show-search3" name="city" id="city">
                                                <option>Select City</option>
                                            </select>
                                        </div>
                                        <div class="form-group">
                                            <label for="pincode">PinCode</label>
                                            <input name="pincode" class="form-control m-t-xxs" id="pincode" placeholder="Enter PinCode" type="pincode">
                                        </div>
                                        <div class="form-group">
                                            &nbsp;
                                        </div>
                                        <div class="form-group">
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-sm-4 col-md-4 col-lg-4 col-xl-4">
                            <div class="ibox float-e-margins">
                                <div class="ibox-title">
                                    <h5>KYC Details :</h5>
                                    <div class="ibox-tools"> <a class="collapse-link" data-toggle="collapse"  data-target="#tab4"> <i class="fa fa-chevron-up"></i> <i class="fa fa-chevron-down"></i> </a> <a href="#" data-toggle="dropdown" class="dropdown-toggle"></a><a class="close-link"> <i class="fa fa-times"></i> </a> </div>
                                </div>
                                <div class="ibox-content collapse in" id="tab4">
                                    <div class="widgets-container">
                                        <div class="form-group">
                                            <label for="select">Select Doc Type<font color='red'>*</font></label>
                                            <select class="form-control" name="doctype" id="doctype">
                                                <option value="">Select One</option>
                                                <option value="pancard">PanCard</option>
                                                <option value="adharcard">AdharCard</option>
                                                <option value="voterid">VoterId</option>
                                                <option value="drivingliecense">Driving Liecense</option>
                                                <option value="passport">Passport</option>
                                            </select>
                                        </div>
                                        <div class="form-group">
                                            <label for="docid">Document Id<font color='red'>*</font></label>
                                            <input name="docid" class="form-control m-t-xxs" id="docid" placeholder="Enter Document Id" type="text" readonly>
                                        </div>
                                        <div class="form-group">
                                            &nbsp;
                                        </div>
                                        <div class="form-group">
                                            &nbsp;
                                        </div>
                                        <div class="form-group">
                                            &nbsp;
                                        </div>
                                        <div class="form-group">
                                            &nbsp;
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-sm-4 col-md-4 col-lg-4 col-xl-4">
                            <div class="ibox float-e-margins">
                                <div class="ibox-title">
                                    <h5>Bank Details :</h5>
                                    <div class="ibox-tools"> <a class="collapse-link" data-toggle="collapse"  data-target="#tab5"> <i class="fa fa-chevron-up"></i> <i class="fa fa-chevron-down"></i> </a> <a href="#" data-toggle="dropdown" class="dropdown-toggle"></a><a class="close-link"> <i class="fa fa-times"></i> </a> </div>
                                </div>
                                <div class="ibox-content collapse in" id="tab5">
                                    <div class="widgets-container">
                                        <div class="form-group">
                                            <label for="bankname">Bank Name<font color='red'>*</font></label>
                                            <input class="form-control m-t-xxs" id="bankname" name="bankname" placeholder="Enter Bank Name" type="text">
                                        </div>
                                        <div class="form-group">
                                            <label for="branchname">Branch Name<font color='red'>*</font></label>
                                            <input name="branchname" class="form-control m-t-xxs" id="branchname" placeholder="Enter Branch Name" type="text" readonly>
                                        </div>
                                        <div class="form-group">
                                            <label for="ifsccode">Branch IFSC Code<font color='red'>*</font></label>
                                            <input name="ifsccode" class="form-control m-t-xxs" id="ifsccode" placeholder="Enter IFSC Code Id" type="text">
                                        </div>
                                        <div class="form-group">
                                            <label for="accountno">Account No<font color='red'>*</font></label>
                                            <input name="accountno" class="form-control m-t-xxs" id="accountno" placeholder="Enetr Account No" type="text" readonly>
                                        </div>                                                                          
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-sm-4 col-md-4 col-lg-4 col-xl-4">
                            <div class="ibox float-e-margins">
                                <div class="ibox-title">
                                    <h5>User Details :</h5>
                                    <div class="ibox-tools"> <a class="collapse-link" data-toggle="collapse"  data-target="#tab6"> <i class="fa fa-chevron-up"></i> <i class="fa fa-chevron-down"></i> </a> <a href="#" data-toggle="dropdown" class="dropdown-toggle"></a><a class="close-link"> <i class="fa fa-times"></i> </a> </div>
                                </div>
                                <div class="ibox-content collapse in" id="tab6">
                                    <div class="widgets-container">
                                        <div class="form-group">
                                            <label for="userid">User Id</label>
                                            <input class="form-control m-t-xxs" id="userid" name="userid" placeholder="Enter User Id" type="text" readonly>
                                        </div>
                                        <div class="form-group">
                                            <label for="password">Password<font color='red'>*</font></label>
                                            <input name="password" class="password form-control m-t-xxs" id="password" placeholder="Enter Password" type="password">
                                        </div>
                                        <div class="form-group">
                                            <label for="cpassword">Confirm Password<font color='red'>*</font></label>
                                            <input name="cpassword" class="password form-control m-t-xxs" id="cpassword" placeholder="Enter Password" type="password">
                                        </div>  
                                        <div class="form-group">
                                            <a href="<?php echo BASE_URL; ?>strongpwdtip" target="_blank"><span class="text-danger"><b>Tip To Create Strong Password</b></span></a>
                                        </div>                                      
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-sm-12 col-md-12 col-lg-12 col-xl-12"><button class="btn green btn-block btn-rounded" type="submit"><i class="fa fa-check"></i>&nbsp;Submit</button></div>
                    </div>
                    <div class="row">
                        <div class="col-sm-12 col-md-12 col-lg-12 col-xl-12">
                            &nbsp;
                        </div>
                        <br>
                        <br>
                    </div>
                </form>               
                           
	           <!-- start footer -->
                <div class="footer">
                    <div class="pull-right">
                        <ul class="list-inline">
                            <li><a title="" href="index.html"><span class="text-info"><b>Home</b></span></a></li>
                            <li><a title="" href="mailbox.html"><span class="text-info"> <b>login</b> </span></a></li>
                            <!-- <li><a title="" href="blog.html">Contactus</a></li> -->
                        </ul>
                    </div>
                    <div> <strong>Copyright</strong> <a href="index"><span class="text-info">AyantiJeevan Software Services Pvt. Ltd </span></a>Company &copy; <?php echo date('Y', strtotime('-5 year'));?> </div>
                </div>
            </div>
        </div>
        <!-- </div> -->
    </div>
	<!-- Go top -->
	<a href="#" class="scrollup"><i class="fa fa-chevron-up"></i></a>
	<!-- Go top -->
	<!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
	<script src="<?php echo BASE_URL; ?>assets/js/vendor/jquery.min.js"></script>
	<script src="<?php echo BASE_URL; ?>assets/js/vendor/validator.js"></script>
	<!-- icheck -->
	<script src="<?php echo BASE_URL; ?>assets/js/vendor/icheck.js"></script>
	<!-- bootstrap js -->
	<script src="<?php echo BASE_URL; ?>assets/js/vendor/bootstrap.min.js"></script>
    <script type="text/javascript" src="<?php echo BASE_URL; ?>assets/js/vendor/bootstrap-datetimepicker.js" charset="UTF-8"></script>
    <script type="text/javascript" src="<?php echo BASE_URL; ?>assets/js/vendor/locales/bootstrap-datetimepicker.fr.js" charset="UTF-8"></script>
	<!-- slimscroll js -->
	<script src="<?php echo BASE_URL; ?>assets/js/vendor/jquery.slimscroll.js"></script>
    <script src="<?php echo BASE_URL; ?>assets/js/vendor/moment.js"></script>
    <script src="<?php echo BASE_URL; ?>assets/js/vendor/daterangepicker.js"></script>
	<!-- pace js -->
	<script src="<?php echo BASE_URL; ?>assets/js/vendor/pace/pace.min.js"></script>
	<!-- Sparkline -->
	<script src="<?php echo BASE_URL; ?>assets/js/vendor/jquery.sparkline.min.js"></script>
    <script src="<?php echo BASE_URL; ?>assets/lib/select2/js/select2.min.js"></script>
    <!-- dragable alert js -->
    <script src="<?php echo BASE_URL; ?>assets/js/plugins/jquery-confirm/jquery-confirm.min.js"></script>
	<!-- main js -->
	<script src="<?php echo BASE_URL; ?>assets/js/main.js"></script>

    <script type="text/javascript">
        var base_url = '<?php echo BASE_URL; ?>';
    </script>

    <script src="<?php echo BASE_URL; ?>assets/js/common.js"></script>
    <script src="<?php echo BASE_URL; ?>assets/js/register.js"></script>
    
</body>
</html>