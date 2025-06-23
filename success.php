<?php
$txn_id = isset($_GET['txn_id']) ? $_GET['txn_id'] : '';
$client_txn_id = isset($_GET['client_txn_id']) ? $_GET['client_txn_id'] : '';
?>

<!DOCTYPE html>
<html>
<head>
    <title>Payment Successful</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: #e8f5e9;
            padding: 20px;
            text-align: center;
        }
        .success-box {
            background-color: #ffffff;
            border: 2px solid #4caf50;
            padding: 30px;
            border-radius: 10px;
            display: inline-block;
            margin-top: 50px;
        }
        h2 {
            color: #4caf50;
        }
        .detail {
            font-size: 18px;
            margin-top: 10px;
            color: #333;
        }
    </style>
</head>
<body>

<?php if ($txn_id && $client_txn_id): ?>
    <div class="success-box">
        <h2>✅ Payment Successful!</h2>
        <div class="detail">Transaction ID: <strong><?php echo htmlspecialchars($txn_id); ?></strong></div>
        <div class="detail">Client Transaction ID: <strong><?php echo htmlspecialchars($client_txn_id); ?></strong></div>
    </div>
<?php else: ?>
    <div class="success-box">
        <h2>⚠️ Payment Details Missing</h2>
        <div class="detail">Transaction info was not received correctly.</div>
    </div>
<?php endif; ?>

</body>
</html>
