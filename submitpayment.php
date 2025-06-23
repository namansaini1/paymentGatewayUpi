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
}
else {echo"page not fountrd"; exit;}