<?php
// pay-with-esewa.php

$esewa_merchant_id = "EPAYTEST";
$amount = $_GET['amount'];
$product_name = $_GET['product'];
$return_url = "https://ranjitology.github.io/esewa/payment-success.php";
$cancel_url = "https://ranjitology.github.io/esewa/payment-failed.php";

header("Location: https://esewa.com.np/epay/main?"
    . "amt=$amount"
    . "&p1=product"
    . "&p2=$product_name"
    . "&p3="
    . "&p4=$esewa_merchant_id"
    . "&su=$return_url"
    . "&fu=$cancel_url");
exit();
?>
