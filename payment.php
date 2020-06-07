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
           <li class="breadcrumb-item active" aria-current="true">Payment</li>
         </ol>
       </nav>
   </section>
  
   <!-- Contact Form -->
    <section id="contact">
    <div class="container">
       <h2>Payment</h2>
             <form class="contact-form" id="paymentForm" method="post" action="process_order.php" novalidate>
             <div class="row">
              <div class="col">
                <h3 class="col-form-label-lg">Your Order Details:</h3>
                <div class="form-group">
                   <label for="first-name">First Name:</label>
                   <input class="form-control" type="text" name="first-name" id="first-name" pattern="[A-Za-z]+" maxlength="25" size="25" required="required" readonly/>
                </div>
                <div class="form-group">
                   <label for="last-name">Last Name:</label>
                   <input class="form-control" type="text" name="last-name" id="last-name" pattern="[A-Za-z]+" maxlength="25" size="25" required="required" readonly/>
                </div>
                <div class="form-group">
                   <label for="email">Email:</label>
                   <input class="form-control" type="email" name="email" id="email" maxlength="25" size="25" required="required" readonly/>
                </div>
                <div class="form-group">
                    <label for="full-address">Full Address:</label>
                    <p><span class="form-control" id="full-address" readonly></span></p>
                        <input class="form-control" type="text" name="street_address" id="street_address" maxlength="40" size="40" required="required" hidden/>
                        <input class="form-control" type="text" name="suburb" id="suburb" maxlength="20" size="20" required="required" hidden/>
                        <select class="form-control" id="state" name="state" hidden>
                            <option disabled selected value> -- select -- </option>
                            <option value="VIC">VIC</option>
                            <option value="NSW">NSW</option>
                            <option value="QLD">QLD</option>
                            <option value="NT">NT</option>
                            <option value="WA">WA</option>
                            <option value="SA">SA</option>
                            <option value="TAS">TAS</option>
                            <option value="ACT">ACT</option>
                        </select>
                        <input class="form-control" type="number" name="postcode" id="postcode" min="1000" max="9999" required="required" hidden/>
                </div>
                <div class="form-group">
                    <label for="phone">Phone Number:</label>
                    <input class="form-control" type="tel" name="phone" id="phone" maxlength="10" size="10" required="required" readonly/>
                </div>
                <div class="form-group">
                    <label for="post">Preferred Contact Method:</label><br />

                    <input type="radio" value="Post" name="preferred-contact[]" id="post" required="required" class="readonly" />
                    <label for="post" id="readonly1">Post</label>

                    <input type="radio" value="Email" name="preferred-contact[]" id="radio_email" required="required" class="readonly"/>
                    <label for="radio_email" id="readonly2">Email</label>

                    <input type="radio" value="Phone" name="preferred-contact[]" id="radio_phone" required="required" class="readonly"/>
                    <label for="radio_phone" id="readonly3">Phone</label>
                </div>
                <div class="form-group">
                  <label for="pricing-plan">Pricing Plan:</label>
                  <input type=text class="form-control" id="pricing-plan" name="pricing-plan" readonly />
                </div>
                <div class="form-group">
                  <label for="months">Number of months to sign up for:</label>
                  <input class="form-control" type="number" name="months" id="months" readonly/>
                <div class="form-group">
                    <label for="personalised">Product Features:</label><br />

                    <input type="checkbox" value="Personalised Curriculum" name="product-features[]" id="personalised" class="readonly"/>
                    <label id="readonly4" for="personalised">Personalised Curriculum</label>

                    <input type="checkbox" value="Real World Projects" name="product-features[]" id="real-projects" class="readonly"/>
                    <label id="readonly5" for="real-projects">Real World Projects</label>

                    <input type="checkbox" value="Peer Support" name="product-features[]" id="peer-support" class="readonly"/>
                    <label id="readonly6" for="peer-support">Peer Support</label>
                </div>
                <div class="form-group" id="additional-comments">
                   <label for="comment">Additional Comments:</label>
                   <textarea id="comment" name="comment" rows="3" class="form-control" placeholder="Your comment here..." readonly></textarea>
                </div>
                </div>
              </div>
              <div class="col payment-right">
                <div class="payment-group">
                  <p id="timer"></p>
                  <div class="form-group">
                    <label for="card-type">Card Type:</label>
                    <select class="form-control card-type" id="card-type" name="card-type">
                        <option disabled selected value="0"> -- select -- </option>
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
                      <input class="form-control" type="text" name="totalCost" id="totalCost" readonly/>
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