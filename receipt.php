<!DOCTYPE html>
<html lang="en">
<head>
  <?php include('./includes/header.inc'); ?>
  <script src="scripts/part2.js"></script>
  <script src="scripts/enhancement.js"></script>
</head>
<!-- Body begin -->
<body>
   <!-- Navigation -->
   <header id="nav-bar">
    <?php include('./includes/nav.inc') ?>
   </header>
   <!-- Breadcrumbs -->
   <section id="breadcrumb-section">       
       <nav aria-label="breadcrumb">
         <ol class="breadcrumb">
           <li class="breadcrumb-item"><a href="index.php">Home</a></li>
           <li class="breadcrumb-item"><a href="enquire.php">Enquiry</a></li>
           <li class="breadcrumb-item active" aria-current="true">Receipt</li>
         </ol>
       </nav>
   </section>
   <section id="contact">
    <div class="container">
		<h2>Receipt</h2>
		<p class="text-center">Your order has been inserted into the database.</p>
		<?php			
			if (!isset($_GET["db_msg"])) {// not from process_order.php, redirection
				header("location:enquire.php");
				exit();
			}
			else { // from process_order.php, display receipt
				echo $_GET["db_msg"];
			}
		?>
	</section>
   <!-- Footer -->
   <footer>
    <?php include('./includes/footer.inc') ?>
	</footer>
</body>
</html>