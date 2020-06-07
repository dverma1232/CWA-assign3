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
           <li class="breadcrumb-item active" aria-current="true">Fix Order</li>
         </ol>
       </nav>
   </section>
<?php 
	//If not from process_order.php, redirect to enquire
	if (!isset($_GET["err_msg"])) {
		header("location:enquire.php");
		exit(); 
	}
	// **********************   from process_order.php
	// display error message  
	echo "<div class='error'>";
	echo $_GET["err_msg"];
	echo "</div>";
	// get values
	session_start();
	if (isset($_SESSION["firstName"]))    // first name
		$firstName=$_SESSION["firstName"];
	else 
		$firstName="";
	 
	if (isset($_SESSION["lastName"]))    // last name
		$lastName=$_SESSION["lastName"];
	else 
		$lastName="";

	if (isset($_SESSION["email"]))    // email
		$email=$_SESSION["email"];
	else 
		$email="";
	
	if (isset($_SESSION["suburb"]))    // suburb
		$suburb=$_SESSION["suburb"];
	else 
		$suburb="";

	if (isset($_SESSION["state"]))    // state
		$state=$_SESSION["state"];
	else 
		$state=" -- select -- ";

	if (isset($_SESSION["postcode"]))    // postcode
		$postcode=$_SESSION["postcode"];
	else 
		$postcode="";

	if (isset($_SESSION["streetAddress"]))    // streetAddress
		$streetAddress=$_SESSION["streetAddress"];
	else 
		$streetAddress="";

	if (isset($_SESSION["phone"]))    // phone
		$phoneNumber=$_SESSION["phone"];
	else 
		$phoneNumber="";

	if (isset($_SESSION["phone"]))    // phone
		$phoneNumber=$_SESSION["phone"];
	else 
		$phoneNumber="";
	
	if (isset($_SESSION["contactMethodString"]))   // pref contact method
		$contactMethodString=$_SESSION["contactMethodString"];
	else 
		$contactMethodString=0;
	
	if (isset($_SESSION["pricingText"]))    // pricing plan
		$pricing=$_SESSION["pricingText"];
	else 
		$pricing=" -- select -- ";

	if (isset($_SESSION["months"]))    // months
		$months=$_SESSION["months"];
	else 
		$months="";

	if (isset($_SESSION["featuresString"]))    // additional features
		$featuresString=$_SESSION["featuresString"];
	else 
		$featuresString="0";

	if (isset($_SESSION["cost"]))    // cost
		$cost=$_SESSION["cost"];
	else 
		$cost="";



	$post = (strpos($contactMethodString,"Post")!==false); //if $contactMethodString contains 'post' then $post is true
	$emailMethod = (strpos($contactMethodString,"Email")!==false);
	$phoneMethod = (strpos($contactMethodString,"phone")!==false);

	$personalised = (strpos($featuresString,"Personalised")!==false); //if $featuresString contains 'personalised' then $personalised is true
	$realWorld = (strpos($featuresString,"Real World")!==false);
	$peerSupport = (strpos($featuresString,"Peer Support")!==false);

	$basic = (strpos($pricing,"Basic")!==false); //if $featuresString contains 'basic' then $basic is true
	$pro = (strpos($pricing,"Pro")!==false);
	$teams = (strpos($pricing,"Teams")!==false);

	$vic = (strpos($state,"VIC")!==false); //if $featuresString contains 'basic' then $basic is true
	$nsw = (strpos($state,"NSW")!==false);
	$qld = (strpos($state,"QLD")!==false);
	$nt = (strpos($state,"NT")!==false); //if $featuresString contains 'basic' then $basic is true
	$wa = (strpos($state,"WA")!==false);
	$sa = (strpos($state,"SA")!==false);
	$tas = (strpos($state,"TAS")!==false);
	$act = (strpos($state,"ACT")!==false);
		
?>
	<!-- Contact Form -->
    <section id="contact">
    <div class="container">
       <h2>Fix Order</h2>
             <form class="contact-form" method="post" action="process_order.php" novalidate>
             <div class="row">
              <div class="col">
                <h3 class="col-form-label-lg">Your Order Details:</h3>
                <div class="form-group">
                   <label for="first-name">First Name:</label>
                   <input class="form-control" type="text" name="first-name" id="first-name" pattern="[A-Za-z]+" maxlength="25" size="25" required="required" value="<?php echo $firstName; ?>" />
                </div>
                <div class="form-group">
                   <label for="last-name">Last Name:</label>
                   <input class="form-control" type="text" name="last-name" id="last-name" pattern="[A-Za-z]+" maxlength="25" size="25" required="required" value="<?php echo $lastName; ?>" />
                </div>
                <div class="form-group">
                   <label for="email">Email:</label>
                   <input class="form-control" type="email" name="email" id="email" maxlength="80" size="80" required="required" value="<?php echo $email; ?>" />
                </div>
				<div class="form-group">
                        <label for="street_address">Street Address:</label>
                        <input class="form-control" type="text" name="street_address" id="street_address" maxlength="40" size="40" required="required" value="<?php echo $streetAddress; ?>" />
                    </div>
                    <div class="form-group">
                        <label for="suburb">Suburb/Town:</label>
                        <input class="form-control" type="text" name="suburb" id="suburb" maxlength="20" size="20" required="required" value="<?php echo $suburb; ?>" />
                    </div>
                    <div class="form-group">
                        <label for="state">State:</label>
                        <select class="form-control" id="state" name="state" value="<?php echo $state; ?>" >
                            <option disabled selected value> -- select -- </option>
                            <option value="VIC" <?php echo ($vic)?"selected":"";  ?> >VIC</option>
                            <option value="NSW" <?php echo ($nsw)?"selected":"";  ?> >NSW</option>
                            <option value="QLD" <?php echo ($qld)?"selected":"";  ?> >QLD</option>
                            <option value="NT" <?php echo ($nt)?"selected":"";  ?> >NT</option>
                            <option value="WA" <?php echo ($wa)?"selected":"";  ?> >WA</option>
                            <option value="SA" <?php echo ($sa)?"selected":"";  ?> >SA</option>
                            <option value="TAS" <?php echo ($tas)?"selected":"";  ?> >TAS</option>
                            <option value="ACT" <?php echo ($act)?"selected":"";  ?> >ACT</option>
                        </select>
                    </div>
                    <div class="form-group">
                        <label for="postcode">Postcode:</label>
                        <input class="form-control" type="number" name="postcode" id="postcode" min="1000" max="9999" required="required" value="<?php echo $postcode; ?>" />
                    </div>
                <div class="form-group">
                    <label for="phone">Phone Number:</label>
                    <input class="form-control" type="tel" name="phone" id="phone" maxlength="10" size="10" required="required" value="<?php echo $phoneNumber; ?>" />
                </div>
                <div class="form-group">
                    <label for="post">Preferred Contact Method:</label><br />

                    <input type="radio" value="Post" name="preferred-contact[]" id="post" required="required" <?php echo ($post)?"checked":"";  ?> />
                    <label for="post" id="1">Post</label>

                    <input type="radio" value="Email" name="preferred-contact[]" id="radio_email" required="required" <?php echo ($emailMethod)?"checked":"";  ?> />
                    <label for="radio_email" id="2">Email</label>

                    <input type="radio" value="Phone" name="preferred-contact[]" id="radio_phone" required="required" <?php echo ($phoneMethod)?"checked":"";  ?> />
                    <label for="radio_phone" id="3">Phone</label>
                </div>
                <div class="form-group">
				<label for="pricing-plan">Pricing Plan:</label>
                  <select class="form-control" id="pricing-plan" name="pricing-plan" value="<?php echo $pricing; ?>" >
                      <option disabled selected value> -- select -- </option>
                      <option value="Basic - $1/per month" <?php echo ($basic)?"selected":"";  ?> >Basic - $1/per month</option>
                      <option value="Pro - $19.99/per month"  <?php echo ($pro)?"selected":"";  ?> >Pro - $19.99/per month</option>
                      <option value="Teams - $24.99/per month"  <?php echo ($teams)?"selected":"";  ?> >Teams - $24.99/per month</option>
                  </select>
                </div>
                <div class="form-group">
                  <label for="months">Number of months to sign up for:</label>
                  <input class="form-control" type="number" name="months" id="months" value="<?php echo $months; ?>" />
                <div class="form-group">
                    <label for="personalised">Product Features:</label><br />

                    <input type="checkbox" value="Personalised Curriculum" name="product-features[]" id="personalised"  <?php echo ($personalised)?"checked":"";  ?>/>
                    <label id="4" for="personalised">Personalised Curriculum</label>

                    <input type="checkbox" value="Real World Projects" name="product-features[]" id="real-projects" <?php echo ($realWorld)?"checked":"";  ?> />
                    <label id="5" for="real-projects">Real World Projects</label>

                    <input type="checkbox" value="Peer Support" name="product-features[]" id="peer-support" <?php echo ($peerSupport)?"checked":"";  ?> />
                    <label id="6" for="peer-support">Peer Support</label>
                </div>
                <div class="form-group" id="additional-comments">
                   <label for="comment">Additional Comments:</label>
                   <textarea id="comment" name="comment" rows="3" class="form-control" placeholder="Your comment here..." value="<?php echo $comment; ?>"></textarea>
                </div>
                </div>
              </div>
              <div class="col payment-right">
                <div class="payment-group">
                  <p id="timer"></p>
                  <div class="form-group">
                    <label for="card-type">Card Type:</label>
                    <select class="form-control card-type" id="card-type" name="card-type">
                        <option disabled selected value> -- select -- </option>
                        <option value="visa">Visa</option>
                        <option value="mastercard">Mastercard</option>
                        <option value="amex">American Express</option>
                    </select>
                  </div>
                    <div class="card-number">
                      <input type="text" id="card-name" class="form-control" name="name-on-card" placeholder="Name on Card">
                      <input type="text" id="card-number" name="card-number" class="form-control" placeholder="Card Number" maxlength="16">
                    </div>
                    <div class="card-group">
                        <div class="expiry">
                            <input type="text" class="form-control expiry-input" id="month-expiry" name="month-expiry" placeholder="MM" data-mask="00" maxlength="2">
                            <input type="text" class="form-control expiry-input" id="year-expiry" name="year-expiry" placeholder="YY" data-mask="00" maxlength="2">
                        </div>
                        <div class="cvv">
                            <input type="text" class="form-control cvv-input" id="cvv" name="cvv" placeholder="CVV" data-mask="000" maxlength="3">
                        </div>
                    </div>
                    <div class="form-group">
                      <label for="card-type">Total Cost:</label>
                      <input class="form-control" type="text" name="totalCost" id="totalCost" value="<?php echo $cost; ?>" readonly />
                    </div>
                </div>
                <button type="submit" name="payButton" class="btn btn-primary">Checkout</button>
                <button type="reset" class="btn btn-primary" id="cancelOrder">Cancel</button>
              </div>
            </div>
              </form>          
       </div>
</section>
   <!-- Footer -->
	<footer>
    <?php include('./includes/footer.inc') ?>
	</footer>
</body>
</html>