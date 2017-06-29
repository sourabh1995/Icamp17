<?php 
$product_name = $_POST["product_name"];
$price = $_POST["product_price"];
$name = $_POST["name"];
$phone = $_POST["phone"];
$email = $_POST["email"];


include 'src/instamojo.php';

$api = new Instamojo\Instamojo('07903a9d17f8264871c09f27d57f5f66', 'eb4aec4af3c58e55d50482fdc398e8f7','https://www.instamojo.com/api/1.1/');


try {
    $response = $api->paymentRequestCreate(array(
        "purpose" => $product_name,
        "amount" => $price,
        "buyer_name" => $name,
        "phone" => $phone,
        "send_email" => true,
        "send_sms" => true,
        "email" => $email,
        'allow_repeated_payments' => false,
        "redirect_url" => "http://interncamp.ecell.org.in/test/thankyou.php",
        "webhook" => "http://interncamp.ecell.org.in/test/webhook.php"
        ));
    //print_r($response);

    $pay_ulr = $response['longurl'];
    
    //Redirect($response['longurl'],302); //Go to Payment page

    header("Location: $pay_ulr");
    exit();

}
catch (Exception $e) {
    print('Error: ' . $e->getMessage());
}     
  ?>
