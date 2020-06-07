<!DOCTYPE html>
<html lang="en">
<head>
  <?php include('./includes/header.inc'); 
  $page = "enquiry";
  ?>
  <script src="scripts/part2.js"></script>
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
           <li class="breadcrumb-item active" aria-current="true">Enquiry</li>
         </ol>
       </nav>
   </section>
  
   <!-- Contact Form -->
    <section id="contact">
    <div class="container">
       <h2>Enquire About Our Courses</h2>
             <form class="contact-form" id="enquireForm" method="post" action="payment.php" novalidate>
                <div class="form-group">
                   <label for="first-name">First Name:</label>
                   <input class="form-control" type="text" name="first-name" id="first-name" pattern="[A-Za-z]+" maxlength="25" size="25" required="required"/>
                </div>
                <div class="form-group">
                    <label for="last-name">Last Name:</label>
                    <input class="form-control" type="text" name="last-name" id="last-name" pattern="[A-Za-z]+" maxlength="25" size="25" required="required"/>
                 </div>
                <div class="form-group">
                   <label for="email">Email:</label>
                   <input class="form-control" type="email" name="email" id="email" maxlength="80" size="40" required="required"/>
                </div>
                <fieldset>
                    <div class="form-group">
                        <label for="street_address">Street Address:</label>
                        <input class="form-control" type="text" name="street_address" id="street_address" maxlength="40" size="40" required="required"/>
                    </div>
                    <div class="form-group">
                        <label for="suburb">Suburb/Town:</label>
                        <input class="form-control" type="text" name="suburb" id="suburb" maxlength="20" size="20" required="required"/>
                    </div>
                    <div class="form-group">
                        <label for="state">State:</label>
                        <select class="form-control" id="state" name="state">
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
                    </div>
                    <div class="form-group">
                        <label for="postcode">Postcode:</label>
                        <input class="form-control" type="number" name="postcode" id="postcode" min="1000" max="9999" required="required"/>
                    </div>
                </fieldset>
                <div class="form-group">
                    <label for="phone">Phone Number:</label>
                    <input class="form-control" type="tel" name="phone" id="phone" maxlength="10" size="10" placeholder="0412 345 678" required="required"/>
                </div>
                <div class="form-group">
                    <label for="post">Preffered Contact Method:</label><br />

                    <input type="radio" value="Post" name="preferred-contact[]" id="post" required="required" checked="checked"/>
                    <label for="post">Post</label>

                    <input type="radio" value="Email" name="preferred-contact[]" id="radio_email" required="required"/>
                    <label for="radio_email">Email</label>

                    <input type="radio" value="Phone" name="preferred-contact[]" id="radio_phone" required="required"/>
                    <label for="radio_phone">Phone</label>
                </div>
                <div class="form-group">
                  <label for="pricing-plan">Pricing Plan:</label>
                  <select class="form-control" id="pricing-plan" name="pricing-plan">
                      <option disabled selected value="0"> -- select -- </option>
                      <option value="Basic">Basic - $1/per month</option>
                      <option value="Pro">Pro - $19.99/per month</option>
                      <option value="Teams">Teams - $24.99/per month</option>
                  </select>
                </div>
                <div class="form-group">
                  <label for="months">Number of months to sign up for:</label>
                  <input class="form-control" type="number" name="months" id="months" />
              </div>
                <div class="form-group">
                    <label for="personalised">Product Features:</label><br />

                    <input type="checkbox" value="Personalised Curriculum" name="product-features[]" id="personalised" checked="checked"/>
                    <label for="personalised">Personalised Curriculum</label>

                    <input type="checkbox" value="Real World Projects" name="product-features[]" id="real-projects"/>
                    <label for="real-projects">Real World Projects</label>

                    <input type="checkbox" value="Peer Support" name="product-features[]" id="peer-support" />
                    <label for="peer-support">Peer Support</label>
                </div>
                <div class="form-group">
                   <label for="comment">Additional Comments:</label>
                   <textarea id="comment" name="comment" rows="3" class="form-control" placeholder="Your comment here..."></textarea>
                </div>
                <button type="submit" class="btn btn-primary">Pay Now</button>
             </form>          
       </div>
</section>
   <!-- Footer -->
	<footer>
    <?php include('./includes/footer.inc') ?>
	</footer>
</body>
</html>