<?php
//include auth.php file on all secure pages
include("auth.php");
?>
<!DOCTYPE html>
<html>
<head>
<meta charset="utf-8">
<title>Welcome Home</title>
<link rel="stylesheet" href="css/style.css" />
</head>
<body>
<div class="form">
<p>Welcome <?php echo $_SESSION['username']; ?>! to the shopping site</p>
<p><a href="productListing.php">Product</a></p>
<p><a href="transactionDetail.php">Transaction</a></p>
<a href="logout.php">Logout</a>
</div>
</body>
</html>
