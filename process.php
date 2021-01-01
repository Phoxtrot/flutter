<?php
if (isset($_GET["status"])) {
    // check payment status
    if ($_GET["status"] == "cancelled") {
        header("location: index.php");
     }
    elseif ($_GET["status"] == "successful") {
        $txtid = $_GET["transaction_id"];
        $curl = curl_init();

        curl_setopt_array($curl, array(
        CURLOPT_URL => "https://api.flutterwave.com/v3/transactions/{$txtid}/verify",
        CURLOPT_RETURNTRANSFER => true,
        CURLOPT_ENCODING => "",
        CURLOPT_MAXREDIRS => 10,
        CURLOPT_TIMEOUT => 0,
        CURLOPT_FOLLOWLOCATION => true,
        CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
        CURLOPT_CUSTOMREQUEST => "GET",
        CURLOPT_HTTPHEADER => array(
            "Content-Type: application/json",
            "Authorization: Bearer FLWSECK_TEST-195e57bd0f376824495764369c399cf1-X"
        ),
        ));

        $response = curl_exec($curl);

        curl_close($curl);
        $res = json_decode($response);
        if ($res->status) {
            $amountpaid = $res->data->charged_amount;
            $amounttopay = $res->data->meta->price;
            if ($amountpaid>=$amounttopay) {
               header("location: sucess.php");
            }
            else{
                echo  "Fraud detected please try again";
            }
        }
        else {
            echo  "Payment cant be processed try again";
        }
    } 
    
}