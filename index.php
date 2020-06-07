<!DOCTYPE html>
<html lang="en">
<head>
  <?php include('./includes/header.inc');
  $page = "home"; ?>
</head>
<!-- Body begin -->
<body>
   <!-- Navigation -->
   <header id="nav-bar">
   <?php include('./includes/nav.inc') ?>
   </header>
   <!-- Slider (Main Image) -->
   <section id="slider">
      <div id="home-slider" class="carousel slide" data-ride="carousel">
         <div class="carousel-inner">
           <div class="carousel-item active">
             <img src="images/slider1.png" class="d-block w-100" alt="HTML 5 Course Banner">
           </div>
         </div>
      </div>
   </section>
   <!-- Testimonials -->
   <section id="testimonials">
      <div class="container">
         <h2>Testimonials</h2>
         <div class="row">
            <!-- Testimonials Left Column -->
            <div class="col-md-4 text-center">
               <div class="customer">
                  <img src="images/user1.jpg" class="user" alt="Man Smiling Portrait">
                  <blockquote>This was a really great course, I learned so much, and it was really interesting and very well explained. Really excellent course, thank you so much.</blockquote>
                  <h3>John Smith</h3>
               </div>
            </div>
            <!-- Testimonials Center Column -->
            <div class="col-md-4 text-center">
               <div class="customer">
                  <img src="images/user2.jpg" class="user" alt="Man Smiling Portrait">
                  <blockquote>Very interesting and well presented. It's difficult to address all the different experience levels so some points were a bit laboured, but overall a useful course.</blockquote>
                  <h3>Bob Brown</h3>
               </div>
            </div>
            <!-- Testimonials Right Column -->
            <div class="col-md-4 text-center">
               <div class="customer">
                  <img src="images/user3.jpg" class="user" alt="Woman Smiling Portrait">
                  <blockquote>Excellent course, I appreciate too much what you do as platform letting us counting with excellent tutors, who teach in a way that is fun, yet comprehensive.</blockquote>
                  <h3>Hannah Castillo</h3>
               </div>
            </div>
         </div>
         <a href="https://www.coursera.org/learn/html-css-javascript-for-web-developers/reviews?page=1&star=5">Source</a>   
      </div>
   </section>
   <!-- Contact -->
   <section id="contact">
      <div class="container">
         <h2>Get In Touch</h2>
         <div class="row">
            <!-- Contact Left Column -->
            <div class="col-md-6">
               <form class="contact-form" method="post" action="http://mercury.swin.edu.au/it000000/formtest.php">
                  <div class="form-group">
                     <label for="name">Name:</label>
                     <input class="form-control" type="text" name= "name" id="name" pattern="[A-Za-z]+" maxlength="15" size="15" required="required"/>
                  </div>
                  <div class="form-group">
                     <label for="email">Email:</label>
                     <input class="form-control" type="email" name= "email" id="email" pattern="[a-z0-9._%+-]+@[a-z0-9.-]+\.[a-z]{2,}$" maxlength="15" size="15" required="required"/>
                  </div>
                  <div class="form-group">
                     <label for="message">Message:</label>
                     <textarea id="message" name="message" rows="3" class="form-control" placeholder="Your message here..."></textarea>
                  </div>
                  <button type="submit" class="btn btn-primary">Submit</button>
               </form>
            </div>
            <!-- Contact Right Column -->
            <div class="col-md-6 contact-info">
               <div class="follow">
                  <h3>Address: <a href="https://goo.gl/maps/KqbFv6cymtLEaeLv8">1 Flinders Street, Melbourne 3000 Victoria</a></h3>
               </div>   
               <div class="follow">
                  <h3>Phone: <a href="tel:0394123456">(03) 9412 3456</a></h3>
               </div> 
               <div class="follow">
                  <h3>Email: <a href="mailto:103063941@student.swin.edu.au">103063941@student.swin.edu.au</a></h3>
               </div>             
            </div>
         </div>
      </div>
   </section>
   <!-- Footer -->
	<footer>
   <?php include('./includes/footer.inc') ?>
	</footer>
</body>
</html>