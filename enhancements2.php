<!DOCTYPE html>
<html lang="en">
<head>
  <?php include('./includes/header.inc');
  $page = "enhancements2"; ?>
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
           <li class="breadcrumb-item active" aria-current="true">JS Enhancements</li>
         </ol>
       </nav>
   </section>

   <!-- About Details -->
   <section id="enhancements">
    <div class="container">
        <h2>Countdown Timer on Payment Page</h2>
        <p>One of the enhancements I have created in my assignment is a <a href="payment.php#timer">countdown timer</a> on the payment page. I created a function which updates every second and calculates the time left, then edits the paragraph to display the updated remaining time. If the time is up then it runs the clearStorage function, which clears local storage and redirects the visitor back to index.php. I used this YouTube video: <a href="https://www.youtube.com/watch?v=x7WJEmxNlEs">https://www.youtube.com/watch?v=x7WJEmxNlEs</a> to learn how to do it and modified the code to suit.</p>
        <p><strong>Preview:</strong></p>
        <img class="col-md-6 enhance-img" src="https://i.imgur.com/JtxLrYe.gif" alt="Countdown Timer Preview" title="Countdown Timer Preview">
    </div>
    <div class="container">
        <h2>Name on Card is Prefilled</h2>
        <p>Another enhancement is that I have made the name on the card to be prefilled based on the first name and last name entered, <a href="payment.php#card-name">click here to view it</a>. I have also added the same functionality to the name field that is displayed on the payment page, so rather than showing separate fields for First Name and Last name, it just shows one field for the full name, <a href="payment.php#full-name">click here to view it</a>.</p>
        <p><strong>Preview:</strong></p>
        <img class="col-md-6 enhance-img" src="https://i.imgur.com/WbDhDoD.png" alt="Countdown Timer Preview" title="Countdown Timer Preview">
    </div>
    <div class="container">
      <h2>Comments Textbox Hidden if Empty</h2>
      <p>I have also added functionality for the additional comments textbox to hidden from the payment page if the visitor hasn't entered anything into it from the enquire page. This makes the design cleaner and less congested and also doesn't show the user information that they don't need, improving the UX.</p>
      <p><strong>Preview:</strong></p>
        <img class="col-md-6 enhance-img" src="https://i.imgur.com/w4FuHUT.gif" alt="Countdown Timer Preview" title="Countdown Timer Preview">
    </div>
  </section>
   <!-- Footer -->
	<footer>
    <?php include('./includes/footer.inc') ?>
	</footer>
</body>
</html>