<?php
include("../Functions/functions.php");
?>
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">

  <title>Hurudza-Buyer Home</title>
  <meta content="" name="description">
  <meta content="" name="keywords">

  <!-- Favicons -->
  <link href="assets/img/favicon.png" rel="icon">
  <link href="assets/img/apple-touch-icon.png" rel="apple-touch-icon">

  <!-- Google Fonts -->
  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=Open+Sans:ital,wght@0,300;0,400;0,500;0,600;0,700;1,300;1,400;1,600;1,700&family=Montserrat:ital,wght@0,300;0,400;0,500;0,600;0,700;1,300;1,400;1,500;1,600;1,700&family=Raleway:ital,wght@0,300;0,400;0,500;0,600;0,700;1,300;1,400;1,500;1,600;1,700&display=swap" rel="stylesheet">

  <!-- Vendor CSS Files -->
  <link href="assets/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
  <link href="assets/vendor/bootstrap-icons/bootstrap-icons.css" rel="stylesheet">
  <link href="assets/vendor/aos/aos.css" rel="stylesheet">
  <link href="assets/vendor/glightbox/css/glightbox.min.css" rel="stylesheet">
  <link href="assets/vendor/swiper/swiper-bundle.min.css" rel="stylesheet">
  <link href="assets/vendor/remixicon/remixicon.css" rel="stylesheet">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js"></script>
  <a href="https://icons8.com/icon/83325/roman-soldier"></a>
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

  <script src="https://kit.fontawesome.com/c587fc1763.js" crossorigin="anonymous"></script>
  <script>
        function state() {
            var a = document.getElementById('states').value;

            if (a === 'MIDLANDS') {
                var array = ['Gweru', 'Shurugwi', 'Chirumhanzu', 'Kwekwe', 'Zvishavane', 'Mberengwa', 'Gokwe'];
            } else if (a === 'HARARE') {
                var array = ['Harare', 'Chitungwiza', 'Epworth'];
            } else if (a === 'BULAWAYO') {
                var array = ['Bulawayo'];
            } else if (a === 'MANICALAND') {
                var array = ['Buhera', 'Chimanimani', 'Chipinge', 'Makoni', 'Mutare', 'Mutasa', 'Nyanga'];
            } else if (a === 'MATNORTH') {
                var array = ['Binga', 'Bubi', 'Hwange', 'Lupane', 'Nkayi', 'Tsholotsho', 'Umguza'];
            } else if (a === 'MATSOUTH') {
                var array = ['Beitbridge', 'Bulilima', 'Gwanda', 'Insiza', 'Mangwe', 'Matobo', 'Umzingwane'];
            } else if (a === 'MASVINGO') {
                var array = ['Bikita', 'Chiredzi', 'Chivi', 'Gutu', 'Masvingo', 'Mwenezi', 'Zaka'];
            }  else if (a === 'MASHWEST') {
                var array = ['Kariba', 'Sanyati', 'Chegutu','Hurungwe', 'Makonde', 'Mhondoro-Ngezi','Zvimba'];
            } else if (a === 'MASHEAST') {
                var array = ['Chikomba', 'Goromonzi', 'Marondera', 'Mudzi', 'Murehwa', 'Mutoko', 'Seke', 'UMP', 'Wedza'];
            }else if (a === 'MASHCENTRAL') {
                var array = ['Bindura', 'Mbire', 'Guruve', 'Mt Darwin', 'Rushinga', 'Shamva', 'Mazowe', 'Muzarabani'];
            }



            var string = "";
            for (let i = 0; i < array.length; i++) {
                string = string + "<option>" + array[i] + "</option>";
            }
            string = "<select nmae = 'lol'>" + string + "</select>"
            document.getElementById('district').innerHTML = string;

        }
    </script>
    <script>
        var a;

        function display() {
            if (a == 0) {
                document.getElementById("majic").style.visibility = "hidden";
                document.getElementById("show").style.visibility = "visible";
                return a = 1;
            } else {
                document.getElementById("majic").style.visibility = "visible";
                document.getElementById("show").style.visibility = "hidden";
                // document.getElementById("show").style. visibility= "hidden";
                return a = 0;
            }

        }
    </script>

  <!-- Template Main CSS File -->
  <link href="assets/css/main.css" rel="stylesheet">

  <!-- =======================================================
  * Template Name: Nova - v1.0.0
  * Template URL: https://bootstrapmade.com/nova-bootstrap-business-template/
  * Author: BootstrapMade.com
  * License: https://bootstrapmade.com/license/
  ======================================================== -->
</head>

<body class="page-about">

  <!-- ======= Header ======= -->
  <header id="header" class="header d-flex align-items-center fixed-top">
    <div class="container-fluid container-xl d-flex align-items-center justify-content-between">

      <a href="index.html" class="logo d-flex align-items-center">
        <!-- Uncomment the line below if you also wish to use an image logo -->
        <img src="agro.png" alt="">
        <!--<h1 class="d-flex align-items-center">Hurudza</h1>-->
      </a>

      <i class="mobile-nav-toggle mobile-nav-show bi bi-list"></i>
      <i class="mobile-nav-toggle mobile-nav-hide d-none bi bi-x"></i>
      <div class="input-group mb-1 ml-2 searchbox">
                <div class="input-group-prepend">
                    <div class="input-group-text"><i class="fas fa-search" style="font-size:20px;color:green; "></i></div>
                </div>
                <form action="SearchResult.php" method="get" enctype="multipart/form-data">
                    <input type="text" class="form-control " id="inlineFormInputGroup" name="search" placeholder="Search for fruits,vegetables or crops " style="width:500px;">
                </form>
      </div>

      <nav id="navbar" class="navbar">
        <ul>
          <li><a href="bhome.php">Home</a></li>
          <li><a href="buyerprofile2.php">Buyer Profile</a></li>
          <li><a href="transaction.php">History</a></li>
          
          <li class="dropdown"><a href="#"><span>Settings</span> <i class="bi bi-chevron-down dropdown-indicator"></i></a>
            <ul>
              <?php
                if (isset($_SESSION['phonenumber'])) {
                    echo "<a href='BuyerProfile.php' class='list-group-item list-group-item-action' style='background-color:#292b2c;text-align:center;color:rgba(86, 184, 230, 0.8)'>Profile</a>";
                    echo "<a href= 'Transaction.php' class='list-group-item list-group-item-action' style='background-color:#292b2c;text-align:center;color:rgba(86, 184, 230, 0.8)'>Transactions</a>";

                    echo "<a href='../index.html' class='list-group-item list-group-item-action ' style='background-color:#292b2c;text-align:center;color:rgba(86, 184, 230, 0.8)'>Logout</a>";
                } else {
                    echo "<a href='../auth/BuyerLogin.php' class='list-group-item list-group-item-action ' style='background-color:#292b2c;text-align:center;color:rgba(86, 184, 230, 0.8)'>Login</a>";
                }
                ?>
            </ul>
          </li>
          <li><a href="CartPage.php">CheckOut <i class="bi bi-briefcase" style="color: #f57813;"><?php echo totalItems(); ?></i></a></li>
          <li><a><?php
            getUsername();
            ?></a></li>
        </ul>
        
      </nav><!-- .navbar -->

    </div>
  </header><!-- End Header -->

  <main id="main">

    <!-- ======= Breadcrumbs ======= -->
    <div class="breadcrumbs d-flex align-items-center" style="background-image: url('assets/img/about.png');">
      <div class="container position-relative d-flex flex-column align-items-center">

        <h2>Search Results</h2>

      </div>
    </div><!-- End Breadcrumbs -->

    <?php

    if (isset($_GET['id'])) {
        global $con;
        $product_id  = $_GET['id'];
        $query = "select * from products where product_id = $product_id";
        $run_query = mysqli_query($con, $query);
        echo "<br>";
        while ($rows = mysqli_fetch_array($run_query)) {
            $farmer_fk = $rows['farmer_fk'];
            $product_title = $rows['product_title'];
            $product_image = $rows['product_image'];
            $product_price = $rows['product_price'];
            $product_stock = $rows['product_stock'];
            $product_type = $rows['product_type'];
            $product_delivery = $rows['product_delivery'];
            $product_desc = $rows['product_desc'];
            if ($product_delivery == "yes") {
                $product_delivery = "Delivery by Farmer";
            } else {
                $product_delivery = "Delivery by Farmer Not Available";
            }
            $querya = "select * from farmerregistration where farmer_id = $farmer_fk";
            $runa_query = mysqli_query($con, $querya);

            while ($rows = mysqli_fetch_array($runa_query)) {
                $name = $rows['farmer_name'];
                $phone = $rows['farmer_phone'];
                $address = $rows['farmer_address'];
                $state = $rows['farmer_state'];
                $district = $rows['farmer_district'];


                echo "
                <div class='container'>
                    <div class='text-center'>
                        <br>
                        <h1 id='headings' class='font-weight-bold'>$product_title</h1>
                    </div>
                    <br>


                    <div class='row'>
                        <div class='col-12 col-xl-4 col-lg-4 col-md-4 col-sm-12   imageblock border border-dark'> <img src='../Admin/product_images/$product_image' class='d-flex mx-auto btn-dark image' height='290px;' width='380px;'><br>
                            <b>
                                <div class='text-center'>
                                    <h2>$product_type</h2>
                                    <br>
                                </div>
                            </b></div>

                        <div class='col-12 col-xl-4 col-lg-4 col-md-4 col-sm-12 block border border-dark'>
                            <div class='text-center mt-2 ''>
                            
                                <br>
                                <div class='row'>
                                    <div class='col-12 col-xl-6 col-lg-6 col-md-6 col-sm-12 price'>
                                        <h5><b>Price</b>$product_price ZWL/kg</h5>
                                    </div>
                                    <div class='col-12 col-xl-6 col-lg-6 col-md-6 col-sm-12 stock'>
                                        <h5><b>Stock : </b>$product_stock kgs</h5>
                                    </div>
                                </div>
                                <form actions='' method='post'>
                                    <div class='text-center'>
                                        <div class='input-group mb-3 wholequantity'>
                                            <div class='input-group-prepend quantity'>
                                                <span class='input-group-text bg-warning border-secondary quantitylabel' style='color:black' id='inputGroup-sizing-default' ><b>Quantity </b><i class='fas fa-shopping-bag'></i></span>
                                            </div>
                                            <input type='number' name='qty' placeholder=1 class='form-control quantitynumber' aria-label='Default' aria-describedby='inputGroup-sizing-default'>
                                        </div>
                                    </div>
                                    <div class='row'>
                                        <div class='col-12 col-xl-6 col-lg-6 col-md-6 col-sm-12'> 
                                            <button name='cart' type='submit' class='btn btn-warning border-secondary addtocart' style='color:black'><b>Add to cart</b><i class='fa' style='font-size:17px; '>&#61562;</i></button>
                                        </div>
                                        <div class='col-12 col-xl-6 col-lg-6 col-md-6 col-sm-12'> <a href='#' class='btn btn-warning border-secondary saveforlater' style='color:black'><b>Save For later</b><img src='saveforlater4.png' class='ml-1 mb-1'></a></div>
                                    </div>
                                </form>
                                <div class='row text-center ml-4 mt-3'>
                                    <i class='fa fa-truck fa-2x'></i>
                                    <h3 style='padding-left:9px;'>$product_delivery</h3>
                                </div>
                                  <div class='row text-center ml-4 mt-3'>
                                   <i class='fas fa-map-marker-alt fa-1x'></i>
                                    <h5 style='padding-left:9px;'>$district , $state </h5>
                                </div>

                            </div>
                        </div>
                        <div class='col-12 col-xl-4 col-lg-4 col-md-4 col-sm-12 text-white' style='background-color:#292b2c;'>
                            <div class='text-center farmerdetails mt-4 ' style='color:rgba(86, 184, 230, 0.8)'><b>
                                    <b>
                                        <h2>Farmer Details
                                        </h2>
                                    </b>
                                </b>
                            </div>
                            <div class='details mt-1 text-center'>
                                <h5><b> Name </b><span style='color:ghostwhite'>: $name</span></h5>

                                <h5><b> Phone Number </b><span style='color:ghostwhite'>:$phone</span></h5>
                                <br>
            

                                <h4 style='color:rgba(86, 184, 230, 0.8)' class='text-center ''>Have Some Query ?<br></h4>
                                <a href='#' class='btn btn-warning border-secondary  chat' style='color:black;padding:2px;'><b>CHAT HERE</b><img src='chat2.png' class='ml-1 mb-1'></a>

                                <!-- <b> Address</b> : Lorem ipsum dolor, sit Eum, ad eaque earum voluptates nemo vero possimus, dolor aspernatur ea aut quisquam quas consequuntur distinctio! -->
                            </div>
                        </div>
                    </div>

                    <br><br>
                    <div class='  description mt-0'><b>
                            <h2 class='text-center font-weight-bold'>Description</h2>
                        </b></div>
                    <br>
                    <div class='texty' style='margin-top:0%; font-size:25px;'> $product_desc.</div>

                    
                </div>";
            }
        }
    }

    if (isset($_POST['cart'])) {

        if (isset($_POST['quantity'])) {
            $qty = $_POST['quantity'];
        } else {
            $qty = 1;
        }
        global $con;
        if (isset($_SESSION['phonenumber'])) {
            $sess_phone_number = $_SESSION['phonenumber'];

            $check_pro = "select * from cart where phonenumber = $sess_phone_number and product_id='$product_id' ";

            $run_check = mysqli_query($con, $check_pro);

            if (mysqli_num_rows($run_check) > 0) {
                echo "";
            } else {
                $subtotal = $product_price * $qty;
                $insert_pro = "insert into cart (product_id,phonenumber,qty,subtotal) values ('$product_id','$sess_phone_number','$qty','$subtotal')";
                $run_insert_pro = mysqli_query($con, $insert_pro);
                echo "<script>window.location.reload(true)</script>";
            }
        } else {
            echo "<script>window.alert('Please Login First!');</script>";
        }
    }
    ?>



    <br><br>


  </main><!-- End #main -->

  <!-- ======= Footer ======= -->
  <footer id="footer" class="footer">
  <div class="footer-content">
      <div class="container">
        <div class="row gy-4">
          <div class="col-lg-5 col-md-12 footer-info">
            <a href="index.html" class="logo d-flex align-items-center">
                <img src="agro.png" alt="">
            </a>
            <p>Modern market place.</p>
            <div class="social-links d-flex  mt-3">
              <a href="#" class="twitter"><i class="bi bi-twitter"></i></a>
              <a href="#" class="facebook"><i class="bi bi-facebook"></i></a>
              <a href="#" class="instagram"><i class="bi bi-instagram"></i></a>
              <a href="#" class="linkedin"><i class="bi bi-linkedin"></i></a>
            </div>
          </div>

          <div class="col-lg-2 col-6 footer-links">
            <h4>Useful Details</h4>
            <ul>
              <li><i class="bi bi-dash"></i> <a href="#">Home</a></li>
              <li><i class="bi bi-dash"></i> <a href="#">About us</a></li>
              <li><i class="bi bi-dash"></i> <a href="#">Services</a></li>
              <li><i class="bi bi-dash"></i> <a href="#">Terms of service</a></li>
              <li><i class="bi bi-dash"></i> <a href="#">Privacy policy</a></li>
            </ul>
          </div>

          <div class="col-lg-2 col-6 footer-links">
            <!--<h4>Our Services</h4>
            <ul>
              <li><i class="bi bi-dash"></i> <a href="#">Web Design</a></li>
              <li><i class="bi bi-dash"></i> <a href="#">Web Development</a></li>
              <li><i class="bi bi-dash"></i> <a href="#">Product Management</a></li>
              <li><i class="bi bi-dash"></i> <a href="#">Marketing</a></li>
              <li><i class="bi bi-dash"></i> <a href="#">Graphic Design</a></li>
            </ul>-->
          </div>

          <div class="col-lg-3 col-md-12 footer-contact text-center text-md-start">
            <h4>Contact Us</h4>
            <p>
              ROOM W4 <br>
              MANFRED, UZ CAMPUS<br>
              HARARE,ZW <br><br>
              <strong>Phone:</strong> +263 785 6688 985<br>
              <strong>Email:</strong> info@hurudza.com<br>
            </p>

          </div>

        </div>
      </div>
    </div>

    <div class="footer-legal">
      <div class="container">
        <div class="copyright">
          &copy; Copyright <strong><span>Hurudza</span></strong>. All Rights Reserved
        </div>
        <div class="credits">
          <!-- All the links in the footer should remain intact. -->
          <!-- You can delete the links only if you purchased the pro version. -->
          <!-- Licensing information: https://bootstrapmade.com/license/ -->
          <!-- Purchase the pro version with working PHP/AJAX contact form: https://bootstrapmade.com/nova-bootstrap-business-template/ -->
          Designed by <a href="">Zela</a>
        </div>
      </div>
    </div>
  </footer><!-- End Footer -->
  <!-- End Footer -->

  <a href="#" class="scroll-top d-flex align-items-center justify-content-center"><i class="bi bi-arrow-up-short"></i></a>

  <div id="preloader"></div>

  <!-- Vendor JS Files -->
  <script src="assets/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
  <script src="assets/vendor/aos/aos.js"></script>
  <script src="assets/vendor/glightbox/js/glightbox.min.js"></script>
  <script src="assets/vendor/swiper/swiper-bundle.min.js"></script>
  <script src="assets/vendor/isotope-layout/isotope.pkgd.min.js"></script>
  <script src="assets/vendor/php-email-form/validate.js"></script>

  <!-- Template Main JS File -->
  <script src="assets/js/main.js"></script>
</body>


</html>

