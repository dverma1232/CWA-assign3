<!DOCTYPE html>
<html lang="en">
<head>
  <?php include('./includes/header.inc');
  $page = "enhancements3"; ?>
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
           <li class="breadcrumb-item active" aria-current="true">PHP Enhancements</li>
         </ol>
       </nav>
   </section>

   <!-- About Details -->
   <section id="enhancements">
    <div class="container">
        <h2>Login/Sign up system</h2>
        <p>One of the enhancements I have created in my assignment is a <a href="sign-up.php">user sign up/login system</a>. There is no access to the manager page without logging in first. If you are not logged in and click on the manager link, you will be redirected to the login page. You can also create an account from the sign up page. It asks for a username and password, it validates the username to make sure it is unique, if not, displays an error. Once the details have been validated it stores the username and password in a table called users. On the login page, the entered username and password are first validated and then checked against the records in the database, if they don't exist an error is shown. Once logged in, the user is redirected to the manager page, and the nav menu is changed to display 'logout' rather than login. When logout is clicked on, the session is destroyed, therefore, logging the user out. </p>
        <p><strong>Preview:</strong></p>
        <img class="col-md-8 enhance-img" src="https://i.imgur.com/Czpf9Wc.gif" alt="Login System Preview" title="Login System Preview">
    </div>
    <div class="container">
        <h2>Search Between Dates</h2>
        <p>Another enhancement is that, I have added the <a href="https://mercury.swin.edu.au/cos10011/s103063941/assign3/manage.php#df">ability to search between 2 chosen dates on the manager page</a> and then see the results of orders made between those 2 dates. I added a date picker in the search form on the manager page and then included them in the query of orders.</p>
        <p><strong>Preview:</strong></p>
        <img class="col-md-6 enhance-img" src="https://i.imgur.com/Lq2t4IL.png" alt="Search Between Dates" title="Search Between Dates">
    </div>
  </section>
   <!-- Footer -->
	<footer>
    <?php include('./includes/footer.inc'); ?>
	</footer>
</body>
</html>