<?php

    include("../Functions/functions.php");

?>
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">

  <title>Hurudza-Buyer Profile</title>
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
  <style>
        h1 {
            background-color: transparent;
            font-family: Impact, Haettenschweiler, 'Arial Narrow Bold', sans-serif;
            text-align: center;
            cursor: pointer;
            /* font-size:20px; */
        }
        textarea{
            font-size:20px;
            border-radius:15px;
            text-align:center;
            border-color:green;
            background-color:transparent;
        }
        
        .box {
            color: rgb(6, 36, 7);
            width: 450px;
            line-height: 40px; 
            margin: auto;
            text-align: center;
            margin-top: 50px;
            padding: 5px;
            border-style: outset;
            border-width: 5px;
            border-radius: 16px;
            border-color:rgb(0, 172, 230);
            /* font-size:20px; */
        }
        
        body {
            /* background-image: url(Images/Website/FarmerLogin.jpg); */
            /* background: black; */
            background-size: cover;
            background-repeat: no-repeat;
            background-position: center;
            background-color: white;
            background-image: url(../Images/Website/buyerLogin.jpeg);
            border: chartreuse;
        }
        
        form {
            margin: 10px;
            padding: 10px;
            background-color: rgb(247, 248, 247);
        }
        
        input {
            padding: 7px;
            margin: 10px;
            border-color: rgb(78, 180, 121);
            display: inline-block;
            /* border-radius: 16px; */
        }
        
        input[type="submit"] {
            cursor: pointer;
            font-size: 12px;
            font-weight: bold;
            color: rgb(246, 248, 246);
            background-color: rgb(0, 191, 255);
            border-radius: 16px;
            border-color: rgb(0, 172, 230);
            width: 44%;
        }
        
        input[type="submit"]:hover {
                background-color: rgb(0, 153, 255);
            outline: none;
            color:  rgb(255,255,255);
            border-radius: 20%;
            border-style: outset;
            border-color: rgb(0, 57, 230);
            font-weight: bolder;
            width: 54%;
            font-size: 18px;
        }
        .one{
            height:100px;
            border-radius:13px;
            
        }
        .two{
            width:100px;
            font-size:34px;
            background:transparent;
            border:3px;
            border-color:green;
            border-style:solid;
            border-width:2px;
        
            
        }
        .just{
            float:left;
            margin-left:1%;
            margin:20px;
            position:absolute;
            left:0;
            top:0px; 
            text-shadow: 1px 1px 1px black;
        }

        .x {
        background-color: white;
        height: 80%;
        width: 38%;
        margin-top: 0%;
    }

   

    h2,
    h1 {
        color: black;
    }

    .imag {
        height: 120px;
    }

    .s {
        width: 50%;
        margin-left: 25%;
        margin-right: 25%;
        margin-top:0%;
        margin-bottom:4%;
    
    }

    .fp {
        margin-left: 0%;
        margin-top: -10%;
        text-align: right;
        color: black;
        font-size: 20px;
    }

    .nu {
        /* margin-right: 0%;
        margin-left: 25%; */
        margin-top: -10%;
        text-align: center;
        margin-left: -2%;
        color: black;
        font-size: 20px;
    }

    .guard {
        width: 100%;
        text-align: center;
        border-bottom: 1px solid #ffc857;
        /* background-color: #ffc857; */
        line-height: 0.1em;
        margin: 10px 0 20px;
        font-family: serif;
    }

    .guard span {
        background: white;
        padding: 0 10px;
    }

    .lastbtn {
        color: rgba(86, 184, 230, 0.8);
    }

    .text {
        min-width: 180px !important;
        display: inline-block !important
    }

    .inp {
        width: 10%;
    }

    .head {
        margin-left: -20%;
        /* background-color: black; */
        margin-top: 10%;
    }

    /* .area{

    } */

    .logo {
        margin-left: 0%;
        float: right;
    }

    .inner {
        float: left;
    }

    .main {
        float: left;
    }

    a {
        text-decoration: none;
        color: #333;
    }

    a:hover {
        text-decoration: none;
        color: black
    }

    @media only screen and (min-device-width:320px) and (max-device-width:480px) {
        /* .mycarousel {
            display: none;
        }

        .firstimage {
            height: auto;
            width: 90%;
        }

        .card {
            width: 80%;
            margin-left: 10%;
            margin-right: 10%;

        }

        .col {
            margin-top: 20px;
        } */

        .right {
            display: none;
            background-color: #ff5500;
        }

        /* 
            .settings{
            margin-left:79%;
        } */
        .left {
            display: flex;
        }

        .moblogo {
            display: none;
        }

        .logins {
            text-align: center;
            margin-right: 35%;
            padding: 15px;
        }

        .searchbox {
            width: 95%;
            margin-right: 5%;
            margin-left: 0%;
        }

        .moblists {
            display: inline-block;
            text-align: center;
            width: 100%;
        }

    
        .x {
            padding: 0;
            width: 80%;
            margin-left: 10%;
            margin-right: 10%;
        }

   
        .s {
            width: 100%;
            margin-left: 0;
            margin-right: 0;
        }

        .inp::placeholder {
            visibility: visible;
        }

        .input-group-prepend {
            display: inline-block;
       
        }

        .fp {
            margin-left: 0%;
            margin-top: -30%;
            text-align: center;
         
        }

        .nu {
            margin-right: 0%;
            margin-left: 0%;
            margin-top: -15%;
            text-align: center;
        }

        .text1 {
            text-align: center;
            font-size: 20px;
            color: #333;
        }

        .text2 {
            text-align: center;
            font-size: 20px;
        }

        .button1 {
            margin-top: 10%;
        }

        .inp1 {
            text-align: center;
        }

        a {
            text-decoration: none;
            color: #333;
        }
      
        .text {
        min-width: 150px !important;
        display: inline-block !important
    }


       
    </style>

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
          <li><a href="CartPage.php" class="active">CheckOut <i class="bi bi-briefcase" style="color: #f57813;"><?php echo totalItems(); ?></i></a></li>
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
        </b>
        <h2>Check Out</h2>

      </div>
    </div><!-- End Breadcrumbs -->

    <form action="checkout.php" method="post">
        <?php
        $phonenumber = $_SESSION['phonenumber'];
        $get_addr = "select buyer_addr from buyerregistration where buyer_phone = $phonenumber";
        $run = mysqli_query($con, $get_addr);
        while ($row = mysqli_fetch_array($run)) {
            $buyer_addr = $row['buyer_addr'];
        }
        ?>

        <div class="container mt-2">
            <div class="text">
                <br>
                <h3 style="font-family:Georgia, 'Times New Roman', Times, serif">Check your address </h3>
            </div>
            <hr style="margin-top:-0.5%">
            <form>
                <div class=" float-none float-sm-none float-md-none float-lg-right float-xl-rightcheckout mr-0 p-2 mb-5   " style="border-radius:5%;">
                    <h4 style="font-family: sans-serif"><b>Grand total = ZWL<?php echo $_SESSION['grandtotal']; ?> </b></h4>
                </div>
                <div class="input-group mt-2 hey ">
                    <div class="input-group-prepend ">
                        <span class="input-group-text" style="background-color:#292b2c;color:rgba(86, 184, 230, 0.8)">Delivery Address</span>
                    </div>
                    <textarea class="form-control" name="address" aria-label="With textarea"><?php echo $buyer_addr ?></textarea>
                </div>
        </div>
        <div class="container mt-5">
            <div class="text">
                <h3 style="font-family:Georgia, 'Times New Roman', Times, serif">Check your Items </h3>
            </div>
            <hr style="margin-top:-0.5%">
            <table class="table">
                <thead>
                    <th>Serial No</th>
                    <th>Name</th>
                    <th>Total (in ZWL)</th>
                    <th>Delivery options</th>
                    <!-- <th>Status</th> -->
                </thead>



                <?php

                global $con;
                if (isset($_SESSION['phonenumber'])) {
                    $sess_phone_number = $_SESSION['phonenumber'];
                    $sel_price = "select * from cart where phonenumber = '$sess_phone_number'";
                    $run_price = mysqli_query($con, $sel_price);
                    $i = 0;

                    $allproducts = array();
                    $allqty = array();
                    $allsubtotal = array();
                    $allphones = array();
                    while ($p_price = mysqli_fetch_array($run_price)) {
                        $product_id = $p_price['product_id'];
                        $qty = $p_price['qty'];
                        $subtotal = $p_price['subtotal'];
                        array_push($allproducts, $product_id);
                        array_push($allqty, $qty);

                        $pro_price = "select * from products where product_id='$product_id'";
                        $run_pro_price = mysqli_query($con, $pro_price);
                        while ($pp_price = mysqli_fetch_array($run_pro_price)) {
                            $product_title = $pp_price['product_title'];
                            $farmer_fk = $pp_price['farmer_fk'];

                            $get_phone = "select * from farmerregistration where farmer_id = $farmer_fk";
                            $run_get_phone = mysqli_query($con, $get_phone);
                            while ($phones = mysqli_fetch_array($run_get_phone)) {
                                $phone = $phones['farmer_phone'];
                                array_push($allphones, $phone); ?>


                                <tbody>
                                    <tr>
                                        <td data-label="Sr.No"><?php echo $i + 1; ?></td>
                                        <td data-label="Name"><?php echo $product_title; ?></td>
                                        <td data-label="Total (in ZWLs)"><?php echo $subtotal; ?></td>
                                        <?php
                                        array_push($allsubtotal, $subtotal); ?>
                                        <td data-label=">Delivery options">
                                            <select class="custom-select custom-select" name="delivery">
                                                <option selected value="Farmer">Farmer</option>
                                                <option value="Buyer">Buyer</option>
                                                <option value="Courier">Courier</option>
                                            </select>
                                        </td>
                                    </tr>
                                </tbody>

                <?php
                            }
                        }
                        $i++;
                    }
                } else {
                    echo "<h1 align = center>Please Login First!</h1><br><br><hr>";
                } ?>
            </table>
        </div>

        <div class="container mt-5">
            <div class="text">
                <h3 style="font-family:Georgia, 'Times New Roman', Times, serif">Select Your Payment Mode</h3>
            </div>
            <hr style="margin-top:-0.5%">

            <div class="payment">
                <h4>Payment Options :-
                    <input type="radio" aria-label="Radio button for following text input" name="payment" value="paytm" required>
                    <img src="../Images/Website/paytm1.jpg" alt="paytm" class="paytm">
                    <input type="radio" aria-label="Radio button for following text input" name="payment" value="cod" required>
                    <img src="../Images/Website/cod.jpg" alt="paytm" class="cod" style="height:37px">
                </h4>
            </div>

            <div class="float-none float-sm-none float-md-none float-lg-right float-xl-right placeorder">
                <a href="#"><button type="submit" name="submit" class="btn btn-lg  border border-dark " style="font-size:22px;color:black;background-color:#FFD700">
                        Place Order
                        <i class="fas fa-thumbs-up"></i>
                    </button>
                </a>
            </div>
    </form>



    <br> <br><br>
    <div class="float-none float-sm-none float-md-none float-lg-right float-xl-right goback ">
        <a href="cartpage.php"><button type="button" class="btn btn-lg  border border-dark  " style="font-size:22px;color:black;background-color:#FFD700;margin-left:-8%;">
                <i class="fas fa-arrow-left"></i> Go Back </button></a>
    </div>
    </div>
    <br>
    <br>


    <!-- ======= About Section ======= -->
     

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


<?php
if (isset($_POST['submit'])) {
    $address = $_POST['address'];
    $delivery = $_POST['delivery'];
    $payment = $_POST['payment'];
    $total = $_SESSION['grandtotal'];
    $datetime = date_create()->format('Y-m-d H:i:s');
    

    $count = 0;
    while ($count < $i) {
        $product_id = $allproducts[$count];
        $qty = $allqty[$count];
        $total = $allsubtotal[$count];
        $phone = $allphones[$count];
        $query1 = "insert into orders (product_id,qty,address,delivery,phonenumber,total,payment,buyer_phonenumber,order_date,delivery_status) values ('$product_id','$qty','$address','$delivery','$phone','$total','$payment','$sess_phone_number','$datetime', 'not delivered')";
        $run = mysqli_query($con, $query1);
        $count = $count + 1;
    }
    $clear = "delete from cart where phonenumber = $sess_phone_number";
    $run = mysqli_query($con, $clear);
    if ($run) {
        echo "<script>window.open('Success.php','_self')</script>";
    }
}
?>
