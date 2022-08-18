 <?php
     include("../Functions/functions.php");

    if (isset($_POST['in_transit'])) {
      $order_id = mysqli_real_escape_string($con, $_POST['order_id']);
      $sql = "update orders 
                    set delivery_status='In Transit' 
                    where order_id =$order_id";
            $run = mysqli_query($con, $sql);
            echo "<script>alert('Order Status Updated Sucessfully! Order Is In Transit');</script>";
            echo "<script>window.open('Transactions.php','_self')</script>";
    }
    if (isset($_POST['delivered'])) {
      $order_id = mysqli_real_escape_string($con, $_POST['order_id']);
      $sql = "update orders 
                    set delivery_status='Delivered' 
                    where order_id =$order_id";
            $run = mysqli_query($con, $sql);
            echo "<script>alert('Order Status Updated Sucessfully! Order Has Been Delivered.');</script>";
            echo "<script>window.open('Transactions.php','_self')</script>";
    }
     ?>
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">

  <title>Hurudza-Farmer Home</title>
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
      

      <nav id="navbar" class="navbar">
        <ul>
          <li><a href="farmerhomepage.php">Home</a></li>
          <li><a href="myproducts.php">My Products</a></li>
          <li><a href="transactions.php" class="active">Orders</a></li>
          <li><a href="callcenter.php">Call Center</a></li>
          
          <li class="dropdown"><a href="#"><span>Settings</span> <i class="bi bi-chevron-down dropdown-indicator"></i></a>
            <ul>
              <?php
                if (isset($_SESSION['phonenumber'])) {
                    echo "<a href='FarmerProfile.php' class='list-group-item list-group-item-action' style='background-color:#292b2c;text-align:center;color:rgba(86, 184, 230, 0.8)'>Profile</a>";
                    echo "<a href= 'Transactions.php' class='list-group-item list-group-item-action' style='background-color:#292b2c;text-align:center;color:rgba(86, 184, 230, 0.8)'>Orders</a>";

                    echo "<a href='logout.php' class='list-group-item list-group-item-action ' style='background-color:#292b2c;text-align:center;color:rgba(86, 184, 230, 0.8)'>Logout</a>";
                } else {
                    echo "<a href='../auth/farmerLogin.php' class='list-group-item list-group-item-action ' style='background-color:#292b2c;text-align:center;color:rgba(86, 184, 230, 0.8)'>Login</a>";
                }
                ?>
            </ul>
          </li>
          <li><a><?php
            getfarmerUsername();
            ?></a></li>
            
        </ul>
        
      </nav><!-- .navbar -->

    </div>
  </header><!-- End Header -->

  <main id="main">

    <!-- ======= Breadcrumbs ======= -->
    <div class="breadcrumbs d-flex align-items-center" style="background-image: url('assets/img/about.jpg');">
      <div class="container position-relative d-flex flex-column align-items-center">

        <h2>Orders</h2>

      </div>
    </div><!-- End Breadcrumbs -->
    <br>
    <br>
    <div class="container">

               <table class="table">
                    <thead>
                         <th style="width: 5px;">Order No.</th>
                         <th style="width: 8px;">Product Name</th>
                         <th>Buyer Name</th>
                         <th style="width: 5px;">Phone Number</th>
                         <th>Address</th>
                         <th style="width: 5px;">Quantity</th>
                         <th>Amount</th>
                         <th >Order Date</th>
                         <th>Delivery Status<th>
                         <!-- <th style="width: 5px;">Delivery Options<th> -->
                         
                    </thead>


                    <tbody>
                         <?php

                         global $con;
                         if (isset($_SESSION['phonenumber'])) {
                              $sess_phone_number = $_SESSION['phonenumber'];
                              $sel_price = "select * from orders where phonenumber = '$sess_phone_number'";
                              $run_price = mysqli_query($con, $sel_price);
                              $i = 0;

                              while ($p_price = mysqli_fetch_array($run_price)) {
                                   $order_id = $p_price['order_id'];
                                   $product_id = $p_price['product_id'];
                                   $qty = $p_price['qty'];
                                   $total = $p_price['total'];
                                   $address = $p_price['address'];
                                   $phone = $p_price['buyer_phonenumber'];
                                   $date_order = $p_price['order_date'];
                                   $deliverystatus = $p_price['delivery_status'];
                                   
                                


                                   $pro_price = "select * from products where product_id='$product_id'";
                                   $run_pro_price = mysqli_query($con, $pro_price);
                                   while ($pp_price = mysqli_fetch_array($run_pro_price)) {
                                        $product_title = $pp_price['product_title'];


                                        $query_name = "select * from buyerregistration where buyer_phone = $phone";
                                        $run_query_name = mysqli_query($con, $query_name);
                                        while ($names = mysqli_fetch_array($run_query_name)) {
                                             $buyer_name = $names['buyer_name'];


                         ?>
                                             <tr>
                                                  <form action="" method="post">
                                                    <td data-label="Order Id" >
                                                      <input name="order_id" value="<?php echo $order_id; ?>" style="border:none; width:55%" readonly="readonly">
                                                    </td>
                                                    <td data-label="Product Name"><?php echo $product_title; ?></td>
                                                    <td data-label="Name"><?php echo $buyer_name; ?></td>
                                                    <td data-label="Phone Number">0<?php echo $phone; ?></td>
                                                    <td data-label="Address"><?php echo $address; ?></td>
                                                    <td data-label="Quantity"><?php echo $qty; ?></td>
                                                    <td data-label="Price">ZWL<?php echo $total; ?></td>
                                                    <td data-label="Date"><?php echo $date_order; ?></td>
                                                    <td data-label="Date">
                                                     <?php
                                                      if ($deliverystatus == 'not delivered'){
                                                     ?>
                                                     <label style="color:red"><?php echo $deliverystatus;?></label>
                                                     <?php
                                                      }elseif( $deliverystatus == 'In Transit'){
                                                     ?>
                                                        <label style="color:orange"><?php echo $deliverystatus;?></label>

                                                     <?php
                                                      }elseif( $deliverystatus == 'Delivered'){
                                                     ?>
                                                        <label style="color:green"><?php echo $deliverystatus;?></label>

                                                     <?php
                                                      }
                                                     ?>

                                                      </td>
                                                    <td data-label="Date">
                                                      <button name="in_transit" class="btn btn-warning" type="submit">
                                                        <i class="fa fa-hourglass-2"/>
                                                      </button>
                                                      <button name="delivered" style="display:inline; margin-left: 10px;" class="btn btn-success" type="submit">
                                                        <i />
                                                      </button>
                                                    </td>
                                                  </form>
                                                  
                                                   <!-- <select name="delivery_status" id="delivery_status" onchange="updateValue();">
                                                  <option><?php echo $deliverystatus; ?></option>
                                                  <option>-------------</option>
                                                   <option value=<?php echo $deliverystatus; ?>>NOT DELIVERED</option>
                                                  <option value="IN TRANSIT">IN TRANSIT</option>
                                                  <option value="DELIVERED">DELIVERED</option> -->
                                                  <!--<td data-label="Delivered"><select name = "statevalue" id="states" onchange="state()" tabindex="1" style="width:120px;">
                                                  <option value="NOT DELIVERED">NOT DELIVERED</option>
                                                  <option value="IN TRANSIT">IN TRANSIT</option>
                                                  <option value="DELIVERED">DELIVERED</option>-->
                         
                                        </select>
                                        <div id="autosavenotify"></div>
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
          </div> <br> <br>


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
  <script>
    $('#delivery_status').on('change', function(){
      delivery_status = $('#delivery_status option:selected').val;
      console.log("ndasvika pano");
      $.ajax({
        type: 'POST',
        dataType: 'json',
        data: {delivery_status, delivery_status},
        url: 'ChangeStatus.php',
        
      });
    });
    
  </script>
</body>


</html>

<?php


if (isset($_POST['Delivered'])) {
  $delivery_status = $_POST['delivery_status'];
  
    $query = "update transactions (delivery_status) VALUES  ('$delivery_status)";
    $result = $conn-
              
    $run = mysqli_query($con, $query);
    
    $_SESSION['phonenumber'] = $phone;
    echo "<script>window.open('Transactions.php','_self')</script>";
}
?>

