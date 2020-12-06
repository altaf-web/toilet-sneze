<?php
    require_once('./ajax_file/stripe-php-master/init.php');


//check whether stripe token is not empty
if(!empty($_POST['stripeToken'])) {
     $secretKey="sk_test_51HmXTDGZLSxuBZOTp0MFEnVUi3RiRbeRt2HpSBVDSJW3QTDgIP0YB5tS6c8OYO9LPMa7tfi6TdLr92EdFWdSb92300RW8fgPtj";
    $token = $_POST['stripeToken'];
    \Stripe\Stripe::setApiKey($secretKey);


    $charge = \Stripe\Charge::create([
      'amount' => 5000,
      'currency' => 'USD',
      'description' => 'Example charge',
      'source' => $token,
    ]);
    
    if($charge){
        header("Location: ./index.php");        
    }

}

?>