<?php 
  session_start();
  $email=$_SESSION['email'];
  

 ?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="description" content="">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <!-- The above 4 meta tags *must* come first in the head; any other head content must come *after* these tags -->

    <!-- Title -->
    <title>Credit - Loan &amp; Credit Company HTML Template</title>

    <!-- Favicon -->
    <link rel="icon" href="img/core-img/favicon.ico">

    <!-- Stylesheet -->
    <link rel="stylesheet" href="style.css">

</head>

<body>
    <!-- Preloader -->
    

    <!-- ##### Header Area Start ##### -->
    <header class="header-area">
        <!-- Top Header Area -->
        

        <!-- Navbar Area -->
        <div class="credit-main-menu" id="sticker">
            <div class="classy-nav-container breakpoint-off">
                <div class="container">
                    <!-- Menu -->
                    <nav class="classy-navbar justify-content-between" id="creditNav">

                        <!-- Navbar Toggler -->
                        <div class="classy-navbar-toggler">
                            <span class="navbarToggler"><span></span><span></span><span></span></span>
                        </div>

                        <!-- Menu -->
                        <div class="classy-menu">

                            <!-- Close Button -->
                            <div class="classycloseIcon">
                                <div class="cross-wrap"><span class="top"></span><span class="bottom"></span></div>
                            </div>

                            <!-- Nav Start -->
                            <div class="classynav">
                                <ul>
                                   <li><a href="commindex.php" class="nav-link">Home</a></li>
                 <li><a href="inspectiondet.php" class="nav-link">Add Ispection Details</a></li>
                  <li><a href="commaddcoll.php" class="nav-link">Add College</a></li>
                <li class="has-children">
                  <a href="#about-section" class="nav-link">View</a>
                  <ul class="dropdown">
                    <li><a href="commviewcoll.php" class="nav-link">College</a></li>
                    <li><a href="commviewinspect.php" class="nav-link">Inspection</a></li>
                     <li><a href="commviewfeed.php" class="nav-link">Feedback</a></li>
                    
                    
                  </ul>
                </li>
                       
               
                 <li><a href="index.html" class="nav-link">Logout</a></li>  
                                </ul>
                            </div>
                            <!-- Nav End -->
                        </div>

                        <!-- Contact -->
                        <div class="contact">
                            <a href="#"><img src="img/core-img/call2.png" alt=""> +800 49 900 900</a>
                        </div>
                    </nav>
                </div>
            </div>
        </div>
    </header>
   
   
    
       

    <!-- ##### All Javascript Script ##### -->
    <!-- jQuery-2.2.4 js -->
    <script src="js/jquery/jquery-2.2.4.min.js"></script>
    <!-- Popper js -->
    <script src="js/bootstrap/popper.min.js"></script>
    <!-- Bootstrap js -->
    <script src="js/bootstrap/bootstrap.min.js"></script>
    <!-- All Plugins js -->
    <script src="js/plugins/plugins.js"></script>
    <!-- Active js -->
    <script src="js/active.js"></script>
</body>

</html>