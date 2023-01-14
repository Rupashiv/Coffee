<?php
    require_once "stripe-php-master/init.php";

    $stripeDetails = array(
        "secretKey" => "sk_test_51MMw5qSIn8RQBY1RtEwQTPzdCZ6vZFHusaH9A9XlSeXs0Zs4WTFJ5xX9NQpvQE33TMYaY0jMj5behfm3BHW4BNRA00i3ThQYs2",
        "publishableKey" => "pk_test_51MMw5qSIn8RQBY1RjjsKI0ELVtuM3Oke3dje6hYyUEEwmkB7e2NuZB1wm1FuBSFOqla1gOw99fGI2D6warRDGiaZ00Nm1JXwpE"
    );

    \Stripe\Stripe::setApiKey($stripeDetails["secretKey"]);
?>