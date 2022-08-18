<?php
    include("../Includes/db.php");
    session_start();
    $delivery_status = $_POST['delivery_status'];
    $order_id = $_POST['order_id'];

    $sql = "update orders 
                    set delivery_status='$delivery_status' 
                    where order_id=$order_id";
            echo $sql;
            $run = mysqli_query($con, $sql);
            echo "<script>alert('Order Status Updated Sucessfully!');</script>";
            echo "<script>window.open('Transactions.php','_self')</script>";
?>