<!DOCTYPE html>
<html>
<head>
    <title>Enter Payment Details</title>
    <style>
        body {
            margin: 0;
            padding: 0;
            font-family: Arial, sans-serif;
            background-image: url('upigateway_bg.webp'); /* ✅ Your background image */
            background-size: cover;
            background-position: center;
            background-repeat: no-repeat;
            height: 100vh;
        }
        form h2 {
            font-size: 28px;
            color: #333333;
            text-align: center;
            margin-bottom: 25px;
            font-weight: 600;
            border-bottom: 2px solid #007BFF;
            padding-bottom: 10px;
        }


        .form-container {
            display: flex;
            justify-content: flex-end; /* Push form to right */
            align-items: center;
            height: 100vh;
            padding-right: 5%; /* Add some margin from right edge */
        }

        form {
            background: rgba(255, 255, 255, 0.9); /* Slightly transparent white background */
            padding: 30px;
            border-radius: 12px;
            box-shadow: 0 0 15px rgba(0,0,0,0.3);
            width: 416px;
        }

        form h2 {
            margin-bottom: 20px;
        }

        input, button {
            width: 100%;
            padding: 10px;
            margin: 10px 0;
            font-size: 16px;
            border-radius: 5px;
            border: 1px solid #ccc;
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

<div class="form-container">
    <form action="submitpayment.php" method="POST">
        <h2> Payment </h2>
        <input type="text" name="name" placeholder="Customer Name" required>
        <input type="email" name="email" placeholder="Customer Email" required>
        <input type="tel" name="mobile" placeholder="Mobile Number" pattern="[0-9]{10}" required>
        <input type="text" name="product_name" placeholder="Product Name" required>
        <input type="number" step="0.01" name="amount" placeholder="Amount (INR)" required>
        <button type="submit">Proceed to Pay</button>
    </form>
</div>

</body>
</html>
