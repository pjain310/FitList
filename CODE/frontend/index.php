<!doctype html>
<html class="no-js" lang="zxx">

<head>
    <meta charset="utf-8">
    <!-- Title -->
    <title>Home</title>
    <!-- Place favicon.ico in the root directory -->
    <link rel="apple-touch-icon" href="images/apple-touch-icon.png">
    <link rel="shortcut icon" type="image/ico" href="images/favicon.ico" />
    <!-- Plugin-CSS -->
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <link rel="stylesheet" href="css/owl.carousel.min.css">
    <link rel="stylesheet" href="css/themify-icons.css">
    <link rel="stylesheet" href="css/magnific-popup.css">
    <link rel="stylesheet" href="css/animate.css">
    <!-- Main-Stylesheets -->
    <link rel="stylesheet" href="css/normalize.css">
    <link rel="stylesheet" href="style.css">
    <link rel="stylesheet" href="css/responsive.css">
    <script src="js/vendor/modernizr-2.8.3.min.js"></script>

    <!--[if lt IE 9]>
        <script src="//oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
        <script src="//oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
</head>

<body data-spy="scroll" data-target="#primary-menu">

<!--PHP code that's used to generate grocery lists-->
<!--DO NOT DELTE-->
<?php
// define variables and set to empty values
$anyErr = $heightFtErr = $heightInErr = $weightErr = $ageErr = $genderErr = $activityErr = "";
if ($_SERVER["REQUEST_METHOD"] == "POST") {
  if (empty($_POST["height_ft"]) || (empty($_POST["height_in"]) &&  $_POST["height_in"] != "0") ) {
    $heightErr = "* Height is required";
	$anyErr = "true";
  } else {
    $height_ft = test_input($_POST["height_ft"]);
    $height_in = test_input($_POST["height_in"]);
  }
  if (empty($_POST["weight"])) {
    $weightErr = "* Weight is required";
	$anyErr = "true";
  } else {
    $weight = test_input($_POST["weight"]);
  }
  if (empty($_POST["age"])) {
    $ageErr = "* Age is required";
	$anyErr = "true";
  } else {
    $age = test_input($_POST["age"]);
  }
  if (empty($_POST["gender"])) {
    $genderErr = "* Gender is required";
	$anyErr = "true";
  } else {
    $gender = test_input($_POST["gender"]);
  }
  if (empty($_POST["activity"])) {
    $activityErr = "* Exercise Level is required";
	$anyErr = "true";
  } else {
    $activity = test_input($_POST["activity"]);
  }
  //Optional Arguments
  if (empty($_POST["loseWeight"])) {
	$loseWeight = "false";
	$gainWeight = "false";
  } 
  else {
		if ($_POST["loseWeight"] == "loseWeight") {
			$loseWeight = "true";
			$gainWeight = "false";
		} else {
			/*Must be weight gain*/
			$gainWeight = "true";
			$loseWeight = "false";
		}
  }
  if (empty($_POST["gainMuscle"])) {
    $gainMuscle = "false";
  } else {
	$gainMuscle = test_input($_POST["gainMuscle"]);
  }
  if (empty($_POST["exclude"])) {
    $exclude = ",,";
  } else {
	$exclude = "," . test_input($_POST["exclude"]) . ",";
  }
  if (empty($_POST["days"])) {
    $days = "7";
  } else {
	$days = test_input($_POST["days"]);
  }

  // Check to see if the input is numeric
  if (! ctype_digit($_POST["height_ft"]) || ! ctype_digit($_POST["height_in"])) {
	$heightErr = "* Height must be a number";
	$anyErr = "true";
  }
  if (! ctype_digit($_POST["weight"]) ) {
	$weightErr = "* Weight must be a number";
	$anyErr = "true";
  }
  if (! ctype_digit($_POST["age"]) ) {
	$ageErr = "* Age must be a number";
	$anyErr = "true";
  }

  if (empty($anyErr)) {
	$totalHeight = 12 * $height_ft + $height_in;
	if ($activity == "1-3 times a week") {
		$MET = 4;
	} elseif ($activity == "4-5 times a week") {
		$MET = 6;
	} elseif ($activity == "Daily or Intense 3-4 times a week") {
		$MET = 9;
	} else {
		$MET = 14;
	}



	$javaArgs = Array($gender, $age, $weight, $totalHeight, $MET, $loseWeight, $gainWeight, $gainMuscle, $days, $exclude);
	// echo "<h2>Your Input:</h2>";
	// print_r($javaArgs);
	// echo "<h2>Your Command:</h2>";
	// echo "java -jar generate_list.jar " . implode (' ', $javaArgs);
	// $javaOutput = shell_exec("java -jar ../generate_list.jar " . implode (' ', $javaArgs));
	exec("java -jar ../generate_list.jar " . implode (' ', $javaArgs), $javaOutput);
	// exec("java -jar /mnt/c/Users/miles_000/workspace/fitlist/generate_list.jar " . implode (' ', $javaArgs), $javaOutput2, $exitCode);
	// echo "<h2>Your Output:</h2>";
	// echo "<p>Exit Code: " . $exitCode ."</p>";
	// var_dump($javaOutput);
	// echo $javaOutput[0];
	//echo "<h2>Your Input:</h2>";
	session_start();
	$_SESSION['javaOutput'] = $javaOutput;
	header("Location: results.php");
  }
}
function test_input($data) {
  $data = trim($data);
  $data = stripslashes($data);
  $data = htmlspecialchars($data);
  return $data;
}
?>
    <div class="preloader">
        <div class="sk-folding-cube">
            <div class="sk-cube1 sk-cube"></div>
            <div class="sk-cube2 sk-cube"></div>
            <div class="sk-cube4 sk-cube"></div>
            <div class="sk-cube3 sk-cube"></div>
        </div>
    </div>

    <!--Mainmenu-area-->
    <div class="mainmenu-area" data-spy="affix" data-offset-top="100">
        <div class="container">
            <!--Logo-->
            <div class="navbar-header">
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#primary-menu">
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
                <a href="index.php" class="navbar-brand logo">
                    <h2>FITLIST</h2>
                </a>
            </div>
            <!--Logo/-->
            <nav class="collapse navbar-collapse" id="primary-menu">
                <ul class="nav navbar-nav navbar-right">
                    <li class="active"><a href="#home-page">Home</a></li>
                    <li><a href="#generate_list">Generate List</a></li>
                    <li><a href="#team-page">Team</a></li>
                </ul>
            </nav>
        </div>
    </div>
    <!--Mainmenu-area/-->



    <!--Header-area-->
    <header class="header-area overlay full-height relative v-center" id="home-page">
        <div class="absolute anlge-bg"></div>
        <div class="container">
            <div class="row v-center">
                <div class="col-xs-12 col-md-7 header-text">
                    <h2>Your Weekly Grocery List Generator</h2>
                    <p>FITLIST provides our users with a curated grocery list, along with recommended brand names, that fits the weekly dietary needs of the user based on a few basic characteristics (eg. age, weight, dietary restrictions, etc).</p>
                </div>

            </div>
        </div>
    </header>
    <!--Header-area/-->



    <!--Feature-area-->
    <section class="gray-bg section-padding" id="service-page">
        <div class="container">
            <div class="row">
                <div class="col-xs-12 col-sm-4">
                    <div class="box">
                        <div class="box-icon">
                            <img src="images/service-icon-1.png" alt="">
                        </div>
                        <h4>ENTER YOUR DATA</h4>
                        <p>Input your data and your fitness goal below</p>
                    </div>
                </div>
                <div class="col-xs-12 col-sm-4">
                    <div class="box">
                        <div class="box-icon">
                            <img src="images/service-icon-2.png" alt="">
                        </div>
                        <h4>GENERATE GROCERY LISTS</h4>
                        <p>Fitlist's algorithm ensures the optimal list for you</p>
                    </div>
                </div>
                <div class="col-xs-12 col-sm-4">
                    <div class="box">
                        <div class="box-icon">
                            <img src="images/service-icon-3.png" alt="">
                        </div>
                        <h4>VISUALIZATION</h4>
                        <p>We show you how well your lists meets your nutritional needs</p>
                    </div>
                </div>
            </div>
        </div>

		<script>
		// Script for toggling Advanced Options
		function toggleAdvanced() {
			var x = document.getElementById("advanced");
			if (x.style.display === "block") {
				x.style.display = "none";
			} else {
				x.style.display = "block";
			}
			return false;
		}
		</script>

		<!--Form for Generating Grocery Lists-->
		<!--DO NOT DELTE-->
        <div style="text-align: center; width: 100%; padding: 120px 0 0 0;" id="generate_list">
			<h1 style="font-size:50px;">Generate Your Grocery List</h1>
			<form method="post" style="width: 100%" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>">
				<div id="bottom">

					<div id="lhs">
						<span class="green-text">Height: </span> <input type="text" name="height_ft" size="1" maxlength="2"> <span class="green-text">ft</span>
						<input type="text" name="height_in" size="1" maxlength="2"> <span class="green-text">in</span><span class="error"> <?php echo $heightErr;?> </span><br><br>

						<span class="green-text">Weight: </span> <input type="text" name="weight" size="1" maxlength="3"> <span class="green-text">lbs</span><span class="error"> <?php echo $weightErr;?> </span><br><br>
						<span class="green-text">Age: </span> <input type="text" name="age" size="1" maxlength="3"> <span class="green-text">yrs</span><span class="error"> <?php echo $ageErr;?> </span><br><br>
						<select name="activity">
							<option disabled selected value> Exercise Level </option>
							<option>1-3 times a week</option>
							<option>4-5 times a week</option>
							<option>Daily or Intense 3-4 times a week</option>
							<option>Intense 6-7 times a week</option>
						</select>
						<span class="error"> <?php echo $activityErr;?> </span><br><br>
					</div>

					<div id="rhs">
						<span class="green-text">Gender: </span><input type="radio" name="gender" value="true"> <span class="green-text">Male</span>
						<input type="radio" name="gender" value="false"> <span class="green-text">Female</span><span class="error"> <?php echo $genderErr;?> </span><br><br>

						<span class="green-text">Weight loss/gain: </span><input type="radio" name="loseWeight" value="loseWeight"> <span class="green-text">Lose Weight</span>
						<input type="radio" name="loseWeight" value="gainWeight"> <span class="green-text">Gain Weight</span><br><br>

						<span class="green-text">Gain Muscle: </span><input type="checkbox" name="gainMuscle" value="true"><br><br>

						<button type="button" onclick="toggleAdvanced()">Advanced Options</button>
						<div id="advanced" style="display: none;">
							<br><span class="green-text">Exclude items with keyword: </span><input type="text" maxlength="128" name="exclude" value=""><br>
							<br><span class="green-text">List is for </span> <input type="text" name="days" size="1" maxlength="3"><span class="green-text"> days</span><br>
						</div>
						<br><br>
					</div>
				</div>
			  <input type="submit" value="GO">
			</form>
	     </div>
    </section>

    <section class="section-padding gray-bg" id="team-page">
        <div class="container">
            <div class="row">
                <div class="col-xs-12 col-sm-6 col-sm-offset-3 text-center">
                    <div class="page-title">
                        <h2>The Team</h2>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-xs-12 col-sm-6 col-md-3">
                    <div class="single-team">
                        <div class="team-photo">
                            <img src="images/team-section-1.png" alt="">
                        </div>
                        <h4>GEORGE</h4>
                        <ul class="social-menu">
                            <li><a href="#"><i class="ti-facebook"></i></a></li>
                            <li><a href="#"><i class="ti-twitter"></i></a></li>
                            <li><a href="#"><i class="ti-linkedin"></i></a></li>
                            <li><a href="#"><i class="ti-pinterest"></i></a></li>
                        </ul>
                    </div>
                </div>
                <div class="col-xs-12 col-sm-6 col-md-3">
                    <div class="single-team">
                        <div class="team-photo">
                            <img src="images/team-section-2.png" alt="">
                        </div>
                        <h4>MANUTEJ</h4>
                        <ul class="social-menu">
                            <li><a href="#"><i class="ti-facebook"></i></a></li>
                            <li><a href="#"><i class="ti-twitter"></i></a></li>
                            <li><a href="#"><i class="ti-linkedin"></i></a></li>
                            <li><a href="#"><i class="ti-pinterest"></i></a></li>
                        </ul>
                    </div>
                </div>
                <div class="col-xs-12 col-sm-6 col-md-3">
                    <div class="single-team">
                        <div class="team-photo">
                            <img src="images/team-section-3.png" alt="">
                        </div>
                        <h4>PRERNA</h4>
                        <ul class="social-menu">
                            <li><a href="#"><i class="ti-facebook"></i></a></li>
                            <li><a href="#"><i class="ti-twitter"></i></a></li>
                            <li><a href="#"><i class="ti-linkedin"></i></a></li>
                            <li><a href="#"><i class="ti-pinterest"></i></a></li>
                        </ul>
                    </div>
                </div>
                <div class="col-xs-12 col-sm-6 col-md-3">
                    <div class="single-team">
                        <div class="team-photo">
                            <img src="images/team-section-3.png" alt="">
                        </div>
                        <h4>JACOB</h4>
                        <ul class="social-menu">
                            <li><a href="#"><i class="ti-facebook"></i></a></li>
                            <li><a href="#"><i class="ti-twitter"></i></a></li>
                            <li><a href="#"><i class="ti-linkedin"></i></a></li>
                            <li><a href="#"><i class="ti-pinterest"></i></a></li>
                        </ul>
                    </div>
                </div>
                <div class="row">
                    <div class="col-xs-12 col-sm-6 col-md-3">
                        <div class="single-team">
                            <div class="team-photo">
                                <img src="images/team-section-1.png" alt="">
                            </div>
                            <h4>GABRIEL</h4>
                            <ul class="social-menu">
                                <li><a href="#"><i class="ti-facebook"></i></a></li>
                                <li><a href="#"><i class="ti-twitter"></i></a></li>
                                <li><a href="#"><i class="ti-linkedin"></i></a></li>
                                <li><a href="#"><i class="ti-pinterest"></i></a></li>
                            </ul>
                        </div>
                    </div>
                    <div class="col-xs-12 col-sm-6 col-md-3">
                        <div class="single-team">
                            <div class="team-photo">
                                <img src="images/team-section-2.png" alt="">
                            </div>
                            <h4>NISHANT</h4>
                            <ul class="social-menu">
                                <li><a href="https://www.facebook.com/nishant.gerald"><i class="ti-facebook"></i></a></li>
                                <li><a href="https://github.com/nishantgerald"><i class="ti-github"></i></a></li>
                                <li><a href="https://www.linkedin.com/in/nishantgerald/"><i class="ti-linkedin"></i></a></li>
                            </ul>
                        </div>
                    </div>

            </div>
        </div>
    </section>



  <!--

    <footer class="footer-area relative sky-bg" id="contact-page">
        <div class="absolute footer-bg"></div>
        <div class="footer-top">
            <div class="container">
                <div class="row">
                    <div class="col-xs-12 col-sm-6 col-sm-offset-3 text-center">
                        <div class="page-title">
                            <h2>Contact with us</h2>
                            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Velit voluptates, temporibus at, facere harum fugiat!</p>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-xs-12 col-md-4">
                        <address class="side-icon-boxes">
                            <div class="side-icon-box">
                                <div class="side-icon">
                                    <img src="images/location-arrow.png" alt="">
                                </div>
                                <p><strong>Address: </strong> Box 564, Disneyland <br />USA</p>
                            </div>
                            <div class="side-icon-box">
                                <div class="side-icon">
                                    <img src="images/phone-arrow.png" alt="">
                                </div>
                                <p><strong>Telephone: </strong>
                                    <a href="callto:8801812726495">+8801812726495</a> <br />
                                    <a href="callto:8801687420471">+8801687420471</a>
                                </p>
                            </div>
                            <div class="side-icon-box">
                                <div class="side-icon">
                                    <img src="images/mail-arrow.png" alt="">
                                </div>
                                <p><strong>E-mail: </strong>
                                    <a href="mailto:youremail@example.com">youremail@example.com</a> <br />
                                    <a href="mailto:youremail@example.com">example@mail.com</a>
                                </p>
                            </div>
                        </address>
                    </div>
                    <div class="col-xs-12 col-md-8">
                        <form action="process.php" id="contact-form" method="post" class="contact-form">
                            <div class="form-double">
                                <input type="text" id="form-name" name="form-name" placeholder="Your name" class="form-control" required="required">
                                <input type="email" id="form-email" name="form-email" class="form-control" placeholder="E-mail address" required="required">
                            </div>
                            <input type="text" id="form-subject" name="form-subject" class="form-control" placeholder="Message topic">
                            <textarea name="message" id="form-message" name="form-message" rows="5" class="form-control" placeholder="Your message" required="required"></textarea>
                            <button type="sibmit" class="button">Submit</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
        <div class="footer-middle">
            <div class="container">
                <div class="row">
                    <div class="col-xs-12 col-sm-6 pull-right">
                        <ul class="social-menu text-right x-left">
                            <li><a href="#"><i class="ti-facebook"></i></a></li>
                            <li><a href="#"><i class="ti-twitter"></i></a></li>
                            <li><a href="#"><i class="ti-google"></i></a></li>
                            <li><a href="#"><i class="ti-linkedin"></i></a></li>
                            <li><a href="#"><i class="ti-github"></i></a></li>
                        </ul>
                    </div>
                    <div class="col-xs-12 col-sm-6">
                        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Id corrupti architecto consequuntur, laborum quaerat sed nemo temporibus unde, beatae vel.</p>
                    </div>
                </div>
            </div>
        </div>
        <div class="footer-bottom">
            <div class="container">
                <div class="row">
                    <div class="col-xs-12 text-center">
                        <p>&copy;Copyright 2018 All right resurved.  This template is made with <i class="ti-heart" aria-hidden="true"></i> by <a href="https://colorlib.com">Colorlib</a></p>
                    </div>
                </div>
            </div>
        </div>
    </footer>

-->



    <!--Vendor-JS-->
    <script src="js/vendor/jquery-1.12.4.min.js"></script>
    <script src="js/vendor/bootstrap.min.js"></script>
    <!--Plugin-JS-->
    <script src="js/owl.carousel.min.js"></script>
    <script src="js/contact-form.js"></script>
    <script src="js/jquery.parallax-1.1.3.js"></script>
    <script src="js/scrollUp.min.js"></script>
    <script src="js/magnific-popup.min.js"></script>
    <script src="js/wow.min.js"></script>
    <!--Main-active-JS-->
    <script src="js/main.js"></script>
</body>

</html>
