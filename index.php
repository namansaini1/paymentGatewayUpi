<!DOCTYPE html>
<html>
<head>
    <title>Enter Payment Details</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            background: #f2f2f2;
            text-align: center;
            padding-top: 100px;
        }
        form {
            background: #fff;
            padding: 30px;
            border-radius: 10px;
            display: inline-block;
            box-shadow: 0px 0px 10px rgba(0,0,0,0.1);
        }
        input, button {
            padding: 10px;
            margin: 10px;
            width: 250px;
            font-size: 16px;
        }
        button {
            background-color: #007BFF;
            color: white;
            border: none;
            cursor: pointer;
        }
        button:hover {
            background-color: #0056b3;
        }
    </style>
</head>
<body>

<h2>Payment Form</h2>

<form action="generate_qr.php" method="POST">
    <input type="text" name="name" placeholder="Customer Name" required><br>
    <input type="email" name="email" placeholder="Customer Email" required><br>

    <input type="tel" name="mobile" placeholder="Customer Mobile Number" pattern="[0-9]{10}" required><br>
    <input type="text" name="product_name" placeholder="Product Name" required><br>
    <input type="number" step="0.01" name="amount" placeholder="Enter Amount (INR)" required><br>
    <button type="submit">Proceed to Pay</button>
</form>

</body>
</html>
