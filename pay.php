<?php
session_start();
if (isset($_POST["submit"])) {
    $name = $_POST["name"];
    $email = $_POST["email"];
    $amount = $_POST["amount"];

   $request = [
    "tx_ref" => rand(1000000,909999),
    "amount" => $amount,
    "currency" => "NGN",
    "payment_options" => "card",
    "redirect_url"=> "https://localhost/flutter/process.php",
    "customer" => [
        "name" => $name,
        "email" => $email
    ],
    "meta" => [
        "price"=> $amount
    ],
    "customization"=>[
        "time"=> "Donation for a cause",
        "description"=> "Lorem ipsum dolor sit, amet consectetur adipisicing elit. Numquam, architecto."
    ]

    ];
    //flutterwave endpoint
    $curl = curl_init();
    curl_setopt_array($curl, array(
        CURLOPT_URL => "https://api.flutterwave.com/v3/payments",
        CURLOPT_RETURNTRANSFER => true,
        CURLOPT_ENCODING => "",
        CURLOPT_MAXREDIRS => 10,
        CURLOPT_TIMEOUT => 0,
        CURLOPT_FOLLOWLOCATION =>true,
        CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
        CURLOPT_CUSTOMREQUEST => "POST",
        CURLOPT_POSTFIELDS => json_encode($request),
        CURLOPT_HTTPHEADER => array(
            "Authorization: Bearer FLWSECK_TEST-195e57bd0f376824495764369c399cf1-X ",
            "Content-Type: application/json"
        ),        
    )); 
    $response = curl_exec($curl);
    curl_close($curl);
    $res = json_decode($response);
    if ($res->status == "success") {
        $link = $res->data->link;
        header ("location:". $link);
    }
    else {
        echo "Donation cant be processed pleasetry again";
    }
    $_SESSION["name"] = $name;
}