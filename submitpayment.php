<?php
if (isset($_POST["amount"])) {
    $amount = $_POST["amount"];
    $name = $_POST["name"];
    
    $callback_url = "https://yourdomain.com/success.php"; // your callback url
    $number=mt_rand(1000000000, 9999999999); // generate a random number for client_txn_id
    $payload_data = array(
        'key' => "YOUR_API_KEY", // replace with your live API KEY
        'client_txn_id' => "$number",
        'amount' => "$amount",
        'p_info'=>"Product Name",
        'customer_name'=>"Tutorials Website",
        'customer_email'=>"tutorialswebsite@gmail.com",
        "customer_mobile"=>"9876543210",
        'redirect_url'=>"$callback_url" 
    );
    $jsonpaymentdata = json_encode($payload_data);
    $curl = curl_init();
 
curl_setopt_array($curl, array(
  CURLOPT_URL => 'https://api.ekqr.in/api/create_order',
  CURLOPT_RETURNTRANSFER => true,
  CURLOPT_ENCODING => '',
  CURLOPT_MAXREDIRS => 10,
  CURLOPT_TIMEOUT => 0,
  CURLOPT_FOLLOWLOCATION => true,
  CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
  CURLOPT_CUSTOMREQUEST => 'POST',
  CURLOPT_POSTFIELDS =>$jsonpaymentdata,
  CURLOPT_HTTPHEADER => array(
    'Content-Type: application/json'
  ),
));
 
$response = curl_exec($curl);
$err = curl_error($curl);
curl_close($curl);
 
if ($err) {
  echo "cURL Error #:" . $err;
} else {
 
 $res = json_decode($response);
 
if(isset($res->status)){
 
$order_id=$res->data->order_id;
$payUrl=$res->data->payment_url;
$upi_hash=$res->data->upi_id_hash;
 
header('Location:'.$payUrl);
}
}
}
else {echo"page not fountrd"; exit;}
