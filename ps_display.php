<?php
include "db_upload_ps.php";
?>

<!DOCTYPE html>
<html lang="en">
<head>
	<title>Photoshop</title>
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
				<div class="img1">
					
						<img src="img/mainlogo.png" alt="">
					
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
			<h2 style="color:white; text-align: center;">Photoshop</h2><br>
            <h4 style="color:white; text-align: center;">Welcome !!!</h4><br>
            <h5 style="color:white; text-align: center;">View Photoshop content here</h5>
        </div>       
       
		</div>
	</div>
	<!-- Page info end -->
    <!-- banner section -->
		<section class="banner-section spad">
			<div class="container">
                <h3 style="text-align:center">Uploaded files</h3><br><br>
                <?php
// Include the database configuration file
include "python_config.php";

// Get images from the database
$query = $db->query("SELECT * FROM photoshop ORDER BY uploaded_on DESC");

if($query->num_rows > 0){
    while($row = $query->fetch_assoc()){
        $imageURL = 'uploads/'.$row['filename'];
?>
<div class="gallery" id="gallery">
<div class="col-md-12 d-flex justify-content-center mb-5">
<a href="<?php echo $imageURL; ?>"><?php echo $row['filename']; ?></a>
    <!-- <img src="<?php echo $imageURL; ?>" alt="" style="height:100px; width=100px"/> -->
    </div>
    </div>
<?php }
}else{ ?>
    <h5 style="text-align:center">No files uploaded...</h5>
<?php } ?>
			</div>
		</section>
		<!-- banner section end -->
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