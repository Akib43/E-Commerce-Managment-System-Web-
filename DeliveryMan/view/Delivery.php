<!DOCTYPE html>
<html lang="en">
<head>

  <title>Delivery Status</title>
  <link rel="stylesheet" href="../css/navbar.css">
  <link rel="stylesheet" href="../css/delivery.css">
  <script src="../js/orderview.js"></script>

 <style>
  .oder-card{
    border:1px solide #ccc
    border-radius: 10px;
    padding: 15px;
    margin: 10px;
    width: 300px;
    display: inline-block;
    box-shadow: 2px 2px 8px rgba(0,0,0,0.2);
    font-family: Arial, sans-serif;
  }
  .oder-card h3{margin: 0 0 10px;}
  .oder-card p {margin: 5px 0;}
  .status{font-weight: bold; margin-top: 10px;}
  .piked{background-color: orange; color: white; border: none; padding: 8px 12px; margin-right:5px; cursor:pointer; border-radius:5px;}
  .delivered { background-color: green; color: white; border: none; padding: 8px 12px; cursor:pointer; border-radius:5px;}
</style>
</head>
<body>
  <h1>Delivery Status</h1>
  <div id="oders"></div>
  <?php include '../db/deliverycardpull.php'; ?>
</body>
</html>
<!-- </head>
<body>
  <div class="from">
    <fron>
      <nav class="navbar">
        <div class="logo">DeliveryMan</div>
        <ul class="nav-links">
          <li><a href="../view/Oder Status.html">Order Status</a></li>
          <!-- ><li><a href="../view/Accept_Order.html">Accept Order</a></li>
          <li><a href="../view/Reject_Order.html">Reject Order</a></li>
          <li><a href="../view/Pick.html">Pick Status</a></li>
          <li><a href="../view/Delivery.html">Delivery Status</a></li>
          <li><a href="../view/Payment.html">Payment Status</a></li -->
          <li><a href="../view/profile.html">Profile</a></li>
          <!-- <li><a href="../view/Login.html">Logout</a></li> -->
          <!-- <br>
          
          </ul>
          </nav>
          <h1>DELIVERY MAN</h1>
          <h2>Order Status: Delivered</h2>
          <p>Order #1253</p>
          <p>2x Chicken Burger<br>1x French Fries</p>
          <p><small>21 Apr 2023, 15:30</small></p>
          <button>Delivered</button> --> -->
 </div>
</from>
</body>
</html>