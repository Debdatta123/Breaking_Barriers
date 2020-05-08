

<!DOCTYPE html>
<html lang="en">
<head>
	<title>Student Sign up</title>
	<meta charset="UTF-8">
	<meta name="description" content="WebUni Education Template">
	<meta name="keywords" content="webuni, education, creative, html">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<!-- Favicon -->   
	<link href="img/favicon.ico" rel="shortcut icon"/>

	<!-- Google Fonts -->
	<link href="https://fonts.googleapis.com/css?family=Raleway:400,400i,500,500i,600,600i,700,700i,800,800i" rel="stylesheet">

	<!-- Stylesheets -->
	<link rel="stylesheet" href="css/bootstrap.min.css"/>
	<link rel="stylesheet" href="css/font-awesome.min.css"/>
	<link rel="stylesheet" href="css/owl.carousel.css"/>
	<link rel="stylesheet" href="css/style.css"/>
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">


	<!--[if lt IE 9]>
	  <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
	  <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
	<![endif]-->

</head>
<body>
	<!-- Page Preloder -->
	<div id="preloder">
		<div class="loader"></div>
	</div>

	<!-- Header section -->
	<header class="header-section">
		<div class="container">
			<div class="row">
				<div class="col-lg-3 col-md-3">
					<div class="site-logo">
						<img src="img/mainlogo.png" alt="">
					</div>
					<div class="nav-switch">
						<i class="fa fa-bars"></i>
					</div>
				</div>
				<div class="col-lg-9 col-md-9">
					
					<nav class="main-menu">
						<ul>
							<li><a href="index.html">Home</a></li>
							<li><a href="aboutus.html">About us</a></li>
							<li><a href="courses.html">Courses</a></li>
							<!-- <li><a href="feedback.html">Feedback</a></li> -->
							<li><a href="contact.html">Contact</a></li>
						</ul>
					</nav>
				</div>
			</div>
		</div>
	</header>
    <!-- Header section end -->
    <!-- Page info -->
	<div class="page-info-section set-bg" data-setbg="img/page-bg/1.jpg">
		<div class="container">
			<div class="site-breadcrumb">
               			
            </div>
        <div>
			<h2 style="color:white; text-align: center;">Login/Sign Up as Student</h2><br>
		 <p ><h6 style="color:white; text-align: center;">Find Out What is New In Your Field<br><br>
            Start Learning Something New Today !
            <!-- .<br><br> The students can access this material based on the course they wish to explore -->
             </h6>
        </div>
		</div>
	</div>
<div class="row">
    <div class="col-lg-6">
       
        <div class="signup-warp">            
            <!-- signup form -->
            <form action="authenticate.php" method="post" class="signup-form"> 
                <h3>Sign up</h3><br>
                <input type="text" placeholder="Your Username" name="user" required>
                <input type="email" placeholder="Your E-mail" name="email" required>
                <input type="password" placeholder="Your Password" name="password" required>
                <button type="submit" name="s_sign" class="site-btn">Sign Up as Student</button>
              </form>
        </div>
    </div>
  
    <div class="col-lg-6">
        <div class="signup-warp">            
            <!-- signup form -->
            <form action="validation.php" method="post" class="signup-form">
                <h3>Login</h3><br>
                <!-- <input type="text" placeholder="Your Name"> -->
                <input type="email" placeholder="Your E-mail" name="email" required>
                <input type="password" placeholder="Your Password" name="password" required>
                <button type="submit" name="s_log" class="site-btn">Login as Student</button>
              </form>
        </div>
    </div>
</div>
    <!-- footer section -->
	<div class=footer>
        <div class="copyright"><!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
            Copyright &copy; BB <script>document.write(new Date().getFullYear());</script> | All rights reserved
            <!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. --></div>
                        </div>
                    </div>
                </footer> 
            </div>
                <!-- footer section end -->
        <!--====== Javascripts & Jquery ======-->
        <script src="js/jquery-3.2.1.min.js"></script>
        <script src="js/bootstrap.min.js"></script>
        <script src="js/mixitup.min.js"></script>
        <script src="js/circle-progress.min.js"></script>
        <script src="js/owl.carousel.min.js"></script>
        <script src="js/main.js"></script>
    </body>
</html>