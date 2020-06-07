<!DOCTYPE html>
<html lang="en">
<head>
  <?php include('./includes/header.inc');
  $page = "enhancements"; ?>
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
           <li class="breadcrumb-item active" aria-current="true">Enhancements</li>
         </ol>
       </nav>
   </section>

   <!-- About Details -->
   <section id="enhancements">
    <div class="container">
        <h2>Bootstrap</h2>
        <p>One of the enhancements I have used in my assignment is Bootstrap. Bootstrap is a front-end framework which allows developers to easily and quickly create responsive websites. I have used bootstrap throughout all my pages to create a fluid layout using bootstrap’s grid system and also have used some of Bootstrap’s components such as <a href="index.php#home-slider">image carousel </a>and <a href="#nav-bar">nav bar</a> to make the user experience better and also allow me to create these elements quicker than creating these myself.</p>
    </div>
    <div class="container">
        <h2>Animation</h2>
        <p>I have added a fade in transition to all pages, I have done this through CSS using opacity and keyframes. I feel this is important as this provides a better user experience and nearly every big website has some sort of animation so as to not make the user experience jarring. Furthermore, I have also added transitions on elements that change when hovered on, for example, the <a href="index.php#testimonials">testimonials blocks</a> have a shadow when hovered over, I have added a transition here to make it less jarring.</p>
        <p><strong>Preview:</strong></p>
        <img class="col-md-5" src="https://i.imgur.com/tbSIkHX.gif" alt="Transitions Preview" title="Transitions Preview">
        <img class="col-md-6" src="https://i.imgur.com/SimcR6y.gif" alt="Animation Preview" title="Animation Preview">
    </div>
   </section>
   <!-- Footer -->
	<footer>
    <?php include('./includes/footer.inc') ?>
	</footer>
</body>
</html>