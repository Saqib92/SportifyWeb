<?php 

?>
<!DOCTYPE html>
<html>

<head>
    <title>Grounds list - Sportify</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <meta name="keywords" content="Baseball Responsive web template, Bootstrap Web Templates, Flat Web Templates, Andriod Compatible web template, 
Smartphone Compatible web template, free webdesigns for Nokia, Samsung, LG, SonyErricsson, Motorola web design" />
    <script type="application/x-javascript">
        addEventListener("load", function() {
            setTimeout(hideURLbar, 0);
        }, false);

        function hideURLbar() {
            window.scrollTo(0, 1);
        }
    </script>
    <!-- bootstrap-css -->
    <link href="css/bootstrap.css" rel="stylesheet" type="text/css" media="all" />
    <!--// bootstrap-css -->
    <!-- css -->
    <link rel="stylesheet" href="css/style.css" type="text/css" media="all" />
    <link href="css/styles.css?v=1.6" rel="stylesheet">
    <!--// css -->
    <script src="js/jquery-1.11.1.min.js"></script>
    <script src="js/scripts.js?v=1.7"></script>
    <script src="js/bootstrap.js"></script>
    <script type="text/javascript" src="js/move-top.js"></script>
    <script type="text/javascript" src="js/easing.js"></script>
    <script type="text/javascript">
        jQuery(document).ready(function($) {
            $(".scroll").click(function(event) {
                event.preventDefault();
                $('html,body').animate({
                    scrollTop: $(this.hash).offset().top
                }, 1000);
            });
        });
    </script>
</head>

<body>
    <div class="main-content">
        <!-- header -->
        <div class="navigation">
            <div class="container-wrap-fluid">
                <nav class="pull">
                    <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
                        <ul class="nav navbar-nav">
                            <li class="hvr-bounce-to-bottom"><a href="index.php">Home</a>
                            </li>
                            <li class="hvr-bounce-to-bottom"><a href="about.php">About</a>
                            </li>
                            <li><a href="groundlist.php" class="active">Grounds</a>
                            </li>
                            <li><a href="#" class="menu1">Gallery<span class="glyphicon glyphicon-menu-down" aria-hidden="true"></span></a>
                            </li>
                            <ul class="nav-sub">
                                <li><a href="gallery.php">Gallery1</a>
                                </li>
                                <li><a href="#" class="menu">Gallery2<span class="glyphicon glyphicon-menu-down" aria-hidden="true"></span></a>
                                </li>
                                <ul class="nav-sub1">
                                    <li><a href="gallery.php>Gallery4</a>
                                    </li>
                                    <li><a href="gallery.php">Gallery5</a>
                                    </li>
                                    <li><a href="gallery.php">Gallery6</a>
                                    </li>
                                </ul>
                                <script>
                                    $("li a.menu").click(function() {
                                        $("ul.nav-sub1").slideToggle(300, function() {
                                            // Animation complete.
                                        });
                                    });
                                </script>
                                <li><a href="gallery.php">Gallery3</a>
                                </li>
                            </ul>
                            <!-- script-for-menu -->
                            <script>
                                $("li a.menu1").click(function() {
                                    $("ul.nav-sub").slideToggle(300, function() {
                                        // Animation complete.
                                    });
                                });
                            </script>
                            <li><a href="tournaments.php">Tournaments</a></li>
                            </li>
                            <li><a href="contact.php">Contact</a>
                            </li>
                        </ul>
                        <div class="clearfix"> </div>
                    </div>
                </nav>
            </div>
        </div>
        <div class="header-top">
            <div class="head-logo">
                <h1><a href="index.php">SPORTIFY</a></h1>
            </div>
            <div class="top-nav">
                <div class="hero fa-navicon fa-2x nav_slide_button" id="hero">
                    <a href="#"><img src="images/menu.png" alt="">
                    </a>
                </div>
            </div>
            <div class="header-right">
                <div class="social">
                    <ul>
                        <li>
                            <a href="#" class="facebook"> </a>
                        </li>
                        <li>
                            <a href="#" class="facebook twitter"> </a>
                        </li>
                        <li>
                            <a href="#" class="facebook chrome"> </a>
                        </li>
                        <li>
                            <a href="#" class="facebook dribbble"> </a>
                        </li>
                    </ul>
                </div>
                <div class="clearfix"> </div>
            </div>
            <div class="clearfix"> </div>
        </div>
        <!-- //header -->
        <!-- typography -->
        <div class="typography">
            <!-- container-wrap -->
            <div class="container-wrap">
                <div class="typography-info">
                    <h2 class="type">Ground's List</h2>
                </div>
                <div class="grid_3 grid_4">
                    <h3 class="hdg">Available Grounds</h3>
                    <div class="bs-example">
                        <div class="row">
                            <div class="col-sm-6 col-md-4">
                                <div class="thumbnail">
                                    <img src="images/2.png" alt="Ground Picture">
                                    <div class="caption">
                                    <?php
                                    // Include required MySQL confiquration file and fuctions
                                    require_once('config.php');
                                    $mysqli = @new mysqli(DB_HOSTNAME, DB_USERNAME, DB_PASSWORD, DB_DATABASE);
                                    // Check connection
                                    if (mysqli_connect_errno()) {
                                        printf("Unable to connect to database: %s",
                                        mysqli_connect_error());
                                        exit();
                                        }
                                    // Create connection
                                        $result = mysqli_query($mysqli,"SELECT * FROM groundlist");
                                        while($row = mysqli_fetch_array($result)){
                                            if($row['id'] == 1){
                                                echo "<h2>" . $row['groundName'] . "</h2>";
                                                echo "<p>" . $row['groundDetail'] . "</p>";
                                                }
                                    }
                                    mysqli_close($mysqli);

                                        //Booking System for ground
                                    if (isset($_POST['bookMe'])) {
                                        $mysqli = @new mysqli(DB_HOSTNAME, DB_USERNAME, DB_PASSWORD, DB_DATABASE);
                                    // Check connection
                                    if (mysqli_connect_errno()){
                                        printf("Unable to connect to database: %s",
                                        mysqli_connect_error());
                                        exit();
                                    }
                                    // Escape any unsafe characters before query database
                                    $id = $_POST['bookMe'];
                                    $book = "Booked";
                                    $available = "yes";
                                    if ($id == 1) {
                                    $sql = "SELECT * FROM groundlist WHERE id = '" . $id ."' AND groundAvailable = '".$available."' ";
                                    $result = $mysqli->query($sql);
                                    // if one row is returned, username and password are valid
                                    if (is_object($result) && $result->num_rows == 1) {
                                        $sql = "UPDATE groundlist SET groundAvailable = '$book' WHERE id = $id";
                                        $result = $mysqli->query($sql);
                                        if ($result === TRUE) { //if 3
                                            
                                            $alert = "<div class='alert alert-success'>
                                            <strong>Success!</strong> Thanks For Booking.
                                            </div>'";
                                            echo $alert;
                                            echo "<meta http-equiv='refresh' content='0'>";
                                            }
                                            else { // else 3
                                                echo "Error: " . $sql . "<br>" . $mysqli->error;
                                                }
                                    }
                                    else{
                                        echo "<script>alert('Ground Not Available');</script>";
                                        }
                                    }
                                    elseif ($id == 2) {
                                        $sql = "SELECT * FROM groundlist WHERE id = '" . $id ."' AND groundAvailable = '".$available."' ";
                                    $result = $mysqli->query($sql);
                                    // if one row is returned, username and password are valid
                                    if (is_object($result) && $result->num_rows == 1) {
                                        $sql = "UPDATE groundlist SET groundAvailable = '$book' WHERE id = $id";
                                        $result = $mysqli->query($sql);
                                        if ($result === TRUE) { //if 3
                                            echo "<script>alert('Thanks For booking');</script>";
                                            echo "<meta http-equiv='refresh' content='0'>";
                                            }
                                            else { // else 3
                                                echo "Error: " . $sql . "<br>" . $mysqli->error;
                                                }
                                    }
                                    else{
                                        echo "<script>alert('Ground Not Available');</script>";
                                        }
                                    }
                                    }
                                    
                                    ?> 
                                    <form method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>">
                                    <button type="submit" class="btn btn-primary" value="1" name="bookMe" role="button">Book Now</button>
                                    </form>

                                    </div>
                                </div>
                            </div>
                            <div class="col-sm-6 col-md-4">
                                <div class="thumbnail">
                                    <img src="images/2.png" alt="Ground Picture">
                                     <div class="caption">
                                    <?php
                                    // Include required MySQL confiquration file and fuctions
                                    require_once('config.php');
                                    $mysqli = @new mysqli(DB_HOSTNAME, DB_USERNAME, DB_PASSWORD, DB_DATABASE);
                                    // Check connection
                                    if (mysqli_connect_errno()) {
                                        printf("Unable to connect to database: %s",
                                        mysqli_connect_error());
                                        exit();
                                        }
                                    // Create connection
                                        $result = mysqli_query($mysqli,"SELECT * FROM groundlist");
                                        while($row = mysqli_fetch_array($result)){
                                            if($row['id'] == 2){
                                                echo "<h2>" . $row['groundName'] . "</h2>";
                                                echo "<p>" . $row['groundDetail'] . "</p>";
                                                }
                                    }
                                    mysqli_close($mysqli);

                                     /*   //Booking system for ground
                                    if (isset($_POST['bookMe'])) {
                                        $mysqli = @new mysqli(DB_HOSTNAME, DB_USERNAME, DB_PASSWORD, DB_DATABASE);
                                    // Check connection
                                    if (mysqli_connect_errno()){ 
                                        printf("Unable to connect to database: %s",
                                        mysqli_connect_error());
                                        exit();
                                    }
                                    // Escape any unsafe characters before query database
                                    $id = $_POST['bookMe'];
                                    $book = "Booked";
                                    $available = "yes";
                                    $sql = "SELECT * FROM groundlist WHERE id = '" . $id ."' AND groundAvailable = '".$available."' ";
                                    $result = $mysqli->query($sql);
                                    // if one row is returned, username and password are valid
                                    if (is_object($result) && $result->num_rows == 1) {
                                        $sql = "UPDATE groundlist SET groundAvailable = '$book' WHERE id = $id";
                                        $result = $mysqli->query($sql);
                                        if ($result === TRUE) { //if 3
                                            echo "<script>alert('Thanks For booking');</script>";
                                            echo "<meta http-equiv='refresh' content='0'>";
                                            }
                                            else { // else 3
                                                echo "Error: " . $sql . "<br>" . $mysqli->error;
                                                }
                                    }
                                    else{
                                        echo "<script>alert('Ground Not Available');</script>";
                                        }
                                    }*/
                                    ?> 
                                    <form method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>">
                                    <button type="submit" class="btn btn-primary" value="2" name="bookMe" role="button">Book Now</button>
                                    </form>

                                    </div>
                                </div>
                            </div>
                            <div class="col-sm-6 col-md-4">
                                <div class="thumbnail">
                                    <img src="images/2.png" alt="Ground Picture">
                                    <div class="caption">
                                        <h2>Asghar Ali Shah</h2>
                                        <p>Asghar Ali shah is a Lush green International standard stadium for Hardball cricket. Located in North Nazimabad near Board Office.</p>
                                        <p>
                                            <button href="#" type="submit" class="btn btn-primary" role="button">Book Now</button>
                                    </div>
                                </div>
                            </div>

                        </div>
                    </div>
                </div>
                <!-- //container-wrap -->
            </div>
            <!-- //typography -->
            <!-- footer -->
            <div class="footer">
                <!-- container-wrap -->
                <div class="container-wrap">
                    <div class="footer-top">
                        <div class="footer-grids">
                            <div class="col-md-3 f-address">
                                <h5>Address</h5>
                                <ul>
                                    <li>756 gt globel Place,</li>
                                    <li>CD-Road,M 07 435.</li>
                                    <li>Telephone: +1 234 567 9871</li>
                                    <li>FAX: +1 234 567 9871</li>
                                    <li>E-mail : <a href="mailto:example@email.com">Example@mail.com</a>
                                    </li>
                                </ul>
                            </div>
                            <div class="col-md-3 f-address f-phone">
                                <h5>Phone</h5>
                                <div class="f-address-text">
                                    <p>+1 234 456 7890</p>
                                    <p>+1 456 789 3450</p>
                                </div>
                            </div>
                            <div class="col-md-6 f-address f-contact">
                                <h5>Stay in Touch</h5>
                                <form method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>">
                                    <input type="email" placeholder="Email address" name="email" required="">
                                    <input type="submit" value="Subscribe" name="subscribe">
                                </form>
                                <?php
                               
                                if (isset($_POST['subscribe'])) {


    $mysqli = @new mysqli(DB_HOSTNAME, DB_USERNAME, DB_PASSWORD, DB_DATABASE);

    // Check connection
    if (mysqli_connect_errno()){  //if 2
      printf("Unable to connect to database: %s",
      mysqli_connect_error());
      exit();
    }
      // Escape any unsafe characters before query database
    $email = $mysqli->real_escape_string($_POST['email']);
    
  //  $contact = $mysqli->real_escape_string($_POST['email']);
   

      //Construct SQL statement for query & execute

    $sql = "INSERT INTO subscribers (subscribers) VALUES ('$email')";
      $result = $mysqli->query($sql);

  if ($result === TRUE) { //if 3
    echo "<script type='text/javascript'>
    alert('Thanks for Subscribing');
    </script>";
  }
                                }

                                ?>
                            </div>
                            <div class="clearfix"> </div>
                        </div>
                        <div class="footer-bottom">
                            <div class="footer-nav">
                                <ul>
                                    <li><a href="index.php" class="active">Home</a></li>
                                    <li><a href="about.php">About</a></li>
                                    <li><a href="groundlist.php">Grounds</a></li>
                                    <li><a href="gallery.php">Gallery</a></li>
                                    <li><a href="tournaments.php">Tournaments</a></li>
                                    <li><a href="contact.php">Contact</a></li>
                                </ul>
                            </div>
                            <div class="copyright">
                                <p> © 2015 Baseball . All rights reserved | Design by <a href="http://w3layouts.com/">W3layouts</a>
                                </p>
                            </div>
                            <div class="clearfix"> </div>
                        </div>
                    </div>
                </div>
                <!-- //container-wrap -->
            </div>
            <!-- //footer -->
        </div>
        <script type="text/javascript">
            $(document).ready(function() {
                /*
										var defaults = {
								  			container-wrapID: 'toTop', // fading element id
											container-wrapHoverID: 'toTopHover', // fading element hover id
											scrollSpeed: 1200,
											easingType: 'linear' 
								 		};
										*/

                $().UItoTop({
                    easingType: 'easeOutQuart'
                });

            });
        </script>
        <a href="#" id="toTop" style="display: block;"> <span id="toTopHover" style="opacity: 1;"> </span>
        </a>
        <!-- content-Get-in-touch -->
</body>

</html>