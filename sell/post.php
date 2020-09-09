<?php
    include('../config.php');
    session_start();

    $msg = '';

    $pname = mysqli_real_escape_string($con,strip_tags($_POST['pname']));
    $price = mysqli_real_escape_string($con,strip_tags($_POST['price']));
    $ptype = mysqli_real_escape_string($con,strip_tags($_POST['ptype']));
    
    // entering pictures
    $p_img = $_FILES['p_img']['name'];
    $loc = './products/'.$p_img;

    $quantity = mysqli_real_escape_string($con,strip_tags($_POST['quantity']));
    $details = mysqli_real_escape_string($con,strip_tags($_POST['details']));

    $product = "INSERT INTO products(pname,price,ptype,p_img,quantity,details) VALUES('$pname','$price','$ptype','$p_img','$quantity','$details')";
    $product_result = mysqli_query($con,$product) or die(mysqli_error($con));
    move_uploaded_file($_FILES['p_img']['tmp_name'],$loc);

    if($product_result) {
        $msg = "Success";
        header('Location: index.php');
    } else {
        $msg = "error";
        header('Location: index.php');
    }

    $_SESSION['msg'] = $msg;
?>