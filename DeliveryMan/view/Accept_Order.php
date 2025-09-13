
            <!-- <nav class="navbar">
                <div class="logo">DeliveryMan</div>
                <ul class="nav-links">
                    <li><a href="../view/Oder_Status.php">Order Status</a></li>
                    <!-- <li><a href="../view/Accept_Order.html">Accept Order</a></li>
                    <li><a href="../view/Reject_Order.html">Reject Order</a></li>
                    <li><a href="../view/Pick.html">Pick Status</a></li>
                    <li><a href="../view/Delivery.html">Delivery Status</a></li>
                    <li><a href="../view/Payment.html">Payment Status</a></li> -->
                    <li><a href="../view/profile.html">Profile</a></li>
                    <!-- <li><a href="../view/Login.html">Logout</a></li> -->
                    <br>
                    </ul>
            </nav> -->


<!DOCTYPE html>
<html lang="en">
<head>
    <title>Order Status</title>
    <link rel="stylesheet" href="../css/Oder_Status.css">
    <script src="../JS/accept.js"></script>
    <style>
        /* Basic card styling */
        .order-card {
            border: 1px solid #ccc;
            border-radius: 10px;
            padding: 15px;
            margin: 10px;
            width: 300px;
            display: inline-block;
            box-shadow: 2px 2px 8px rgba(0,0,0,0.2);
            font-family: Arial, sans-serif;
        }
        .order-card h3 { margin: 0 0 10px; }
        .order-card p { margin: 5px 0; }
        .status { font-weight: bold; margin-top: 10px; }
        .picked { background-color: orange; color: white; border: none; padding: 8px 12px; margin-right:5px; cursor:pointer; border-radius:5px;}
        .delivered { background-color: green; color: white; border: none; padding: 8px 12px; cursor:pointer; border-radius:5px;}
        
    </style>
</head>
<body>
    <h1>Order Status</h1>
    <div id="Accept_oder"></div>

    <?php include '../db/Accept_oder.php'; ?>
</body>
</html>



