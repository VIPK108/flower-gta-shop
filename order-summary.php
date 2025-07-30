<?php
// Retrieving customer information from POST data
$name = $_POST['name'];
$number = $_POST['number'];
$pin = $_POST['pin'];
$city = $_POST['city'];
$state = $_POST['state'];
$flat = $_POST['flat'];
$area = $_POST['area'];

// Retrieving product and pricing details
$title = $_POST['title'];
$image = $_POST['image'];
$price = $_POST['price'];
$originalPrice = $_POST['originalPrice'];
$discount = $_POST['discount'];
$totalAmount = $price; // This will be the total amount the user will pay

// Ensure to pass the total amount to the payment page
?>
<html lang="en-IN">

<head>
        <title>We are Here to help you, Electronics, Furniture, Grocery, Lifestyle, Books &amp; More. Exclusive Offers!</title>
    <meta http-equiv="Pragma" content="no-cache">
    <meta http-equiv="Expires" content="-1">
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <meta name="Keywords" content="Online Shopping in India,online Shopping store,Online Shopping Site,Buy Online,Shop Online,Fliipkart">
    
      <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" crossorigin="anonymous">
      <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css" crossorigin="anonymous" referrerpolicy="no-referrer" />
      <meta name="viewport" content="width=device-width,minimum-scale=1,user-scalable=no">
      <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" crossorigin="anonymous">
      <link rel="stylesheet" href="public/style.css">
</head>
   <style>
      @import url('https://fonts.googleapis.com/css2?family=Inter:wght@300;400&amp;display=swap');
   </style>
</head>
<body>
<div class="container-fluid p-3 header-container">
        <div class="row header">
          <div class="col-1">
                <div class="menu-icon" id="back_btn" onclick="window.history.go(-1);">
              <svg width="19" height="16" viewBox="0 0 19 16" xmlns="http://www.w3.org/2000/svg">
                <path d="M17.556 7.847H1M7.45 1L1 7.877l6.45 6.817" stroke="#000" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round" fill="none"></path>
              </svg>
            </div>
          </div>
          <div class="col-8">
            <div class="menu-logo">
              <h4 class="mb-0 mt-1 ms-2">Order Summary</h4>
            </div>
          </div>
        </div>
      </div>
      <div class="_1fhgRH max-height mb-70">
        <div class="card pt-1 mb-1">
          <div class="progress-box mb-0">
            <img src="public/process2.png" class="img-fluid"/>
          </div>
        </div>
            <!-- Customer Information Section -->
    <div class="card px-3 py-4 mb-2">
        <h3>Delivered to:</h3>
        <div class="address-div mt-2">
            <p><strong>Name:</strong> <?php echo htmlspecialchars($name); ?></p>
            <p><strong>Mobile Number:</strong> <?php echo htmlspecialchars($number); ?></p>
            <p><strong>Address:</strong> <?php echo htmlspecialchars("$flat, $area, $city, $state, $pin"); ?></p>
        </div>
    </div>
        <!-- Product Information Section -->
    <div class="card px-3 py-4 mb-2">
        <ul class="list-group list-group-flush" id="deals">
            <li class="list-group-item px-0" data-timer="2000">
                <div class="flex recommended-product">
                    <img src="<?php echo ($image);?>" id="item_image" class="d-block img-fluid" alt="Product Image">
                    <div class="description">
                        <div class="product-title mb-1"><?php echo htmlspecialchars($title); ?></div>
                        <img src="public/SwOvZ3r.webp" width="77px">
                    </div>
                </div>
                <div class="flex recommended-product mt-3">
                    <div class="timer qty mx-4">Qty: 1</div>
                    <div class="description">
                        <div class="price flex">
                            <span class="discount">₹<?php echo htmlspecialchars($price); ?></span>
                            <span class="strike mrp text-muted text-decoration-line-through">₹<?php echo htmlspecialchars($originalPrice); ?></span>
                            <span class="selling_price" style="color:#008C00"><?php echo round(($discount / $originalPrice) * 100); ?>% off</span>
                        </div>
                    </div>
                </div>
            </li>
        </ul>
    </div>
<div class="container mt-5">
    <h4 class="mb-4">Order Summary</h4>
        <!-- Pricing and Payment Section -->
    <div class="card py-1">
        <div class="card-body">
            <h5>Pricing</h5>
            <p><strong>Price:</strong> ₹<?php echo htmlspecialchars($price); ?></p>
            <p class="text-muted text-decoration-line-through"><strong>Original Price:</strong> ₹<?php echo htmlspecialchars($originalPrice); ?></p>
            <p class="text-success"><strong>You Save:</strong> ₹<?php echo htmlspecialchars($discount); ?> (<?php echo round(($discount / $originalPrice) * 100); ?>% off)</p>
            <p><strong>Delivery Charges:</strong> Free</p>

            <h5>Total Amount</h5>
            <p><strong>Total:</strong> ₹<?php echo htmlspecialchars($totalAmount); ?></p>
            <p class="text-success">You will save ₹<?php echo htmlspecialchars($discount); ?> on this order</p>

            <div class="mt-4">
                <form action="payment.php" method="POST">
                    <input type="hidden" name="totalAmount" value="<?php echo htmlspecialchars($totalAmount); ?>">
                    <button type="submit" class="btn btn-success w-100">Proceed to Payment</button>
                </form>
            </div>
        </div>
    </div>
</div>
</div>
<div class="sefty-banner">
          <img class="sefty-img" src="https://rukminim1.flixcart.com/www/60/70/promos/13/02/2019/9b179a8a-a0e2-497b-bd44-20aa733dc0ec.png?q=90" loading="lazy" alt="">
          <div dir="auto" class="sefty-txt">Safe and secure payments. Easy returns. 100% Authentic products.</div>
        </div>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
