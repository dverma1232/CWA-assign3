<!DOCTYPE html>
<html lang="en">
<head>
   <?php include('./includes/header.inc');
   $page = "course";?>
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
           <li class="breadcrumb-item active" aria-current="true">Course Range</li>
         </ol>
       </nav>
   </section>
   <!-- Slider/Main Image -->
   <section id="slider">
      <div id="home-slider" class="carousel slide" data-ride="carousel">
         <div class="carousel-inner">
           <div class="carousel-item active">
             <img src="images/slider2.jpg" class="d-block w-100" alt="HTML 5 Course Banner">
           </div>
         </div>
      </div>
   </section>
   <!-- About -->
   <section id="about">
      <div class="about-left container">
         <div class="row">
            <h2>Why Learn HTML?</h2>
               <div class="about-content">
                  HTML is the foundation of all web pages. Without HTML, you wouldn’t be able to organize text or add images or videos to your web pages. HTML is the beginning of everything you need to know to create engaging web pages!
               </div>
               <button type="button" class="btn btn-primary">Learn More</button>
         </div>
         <a href="https://www.codecademy.com/learn/learn-html">Source</a>
      </div>
   </section>
   <!-- About Aside -->
   <aside id=about-right>
      <div class="container">
         <div class="row">
            <div class="about-content-right">
               <h2>What You Will Learn:</h2>
               <ol>
                  <li>
                     HTML Structure
                  </li>
                  <li>
                     HTML Tags
                  </li>
                  <li>
                     HTML Tables
                  </li>
                  <li>
                     Create HTML Websites From Scratch
                  </li>
               </ol>
            </div>
         </div>
      </div>
   </aside>
   <!-- Pricing Plans -->
   <section id="pricing">
      <div class="container">
         <h2>Pricing</h2>
         <div class="row">
            <!-- Left Column -->
            <div class="col-md-4">
               <div class="pricing-col">
                  <div class="pricing-head">
                     <h3>Basic</h3>
                     <p>$1<span> /per month</span></p>
                  </div>
                  <div class="pricing-content">
                     <ul>
                        <li>Basic Courses</li>
                        <li>Limited Mobile Practice</li>
                     </ul>
                  </div>
                  <div class="pricing-btn">
                     <a class="contact-btn" href="enquire.php">Contact Us</a>
                  </div>
               </div>
            </div>
            <!-- Center Column -->
            <div class="col-md-4">
               <div class="pricing-col">
                  <div class="pricing-head">
                     <h3>Pro</h3>
                     <p>$19.99<span> /per month</span></p>
                  </div>
                  <div class="pricing-content">
                     <ul>
                        <li>Everything in Basic</li>
                        <li>Unlimited Mobile Practice</li>
                        <li>Real-world Projects</li>
                        <li>Step-by-step Guidance</li>
                        <li>Peer Support</li>
                        <li>Members-only Content</li>
                     </ul>
                  </div>
                  <div class="pricing-btn">
                     <a class="contact-btn" href="enquire.php">Contact Us</a>
                  </div>
               </div>
            </div>
            <!-- Right Column -->
            <div class="col-md-4">
               <div class="pricing-col">
                  <div class="pricing-head">
                     <h3>Teams</h3>
                     <p>$24.99 /per month</p>
                  </div>
                  <div class="pricing-content">
                     <ul>
                        <li>Everything in Pro for your whole team</li>
                        <li>Personalized curriculum guide</li>
                        <li>Flexible account management and user reporting</li>
                     </ul>
                  </div>
                  <div class="pricing-btn">
                     <a class="contact-btn" href="enquire.php">Contact Us</a>
                  </div>
               </div>
            </div>
         </div>
      <a href="https://www.codecademy.com/pricing">Source</a>
      </div>
   </section>

   <!-- Tutors -->
   <section id="tutors">
      <div>
         <h2>Our Tutors</h2>
         <table id="tutor-table" class="table center">
            <thead>
              <tr>
                <th scope="col">Name</th>
                <th scope="col">Description</th>
                <th scope="col">Location</th>
              </tr>
            </thead>
            <tbody>
              <tr>
                <th scope="row">Jarad Higgins</th>
                <td>My goal as a tutor is to help students learn by sharing the things I learned in my academic career and through my life experiences. I know that education provides the foundation for every students future, my goal is always to help my students achieve their full academic potential. I also impart upon students that learning is a lifelong process, and I want my students to develop a love of learning. I'm comfortable working with students at any age or level of ability. I enjoy teaching students new things, and I always learn new things from them as well. I exercise patience, and I'll do everything I can to keep students motivated and determined to succeed. I can tutor algebra, calculus, English, geometry, pre-calculus, biology, essays, English grammar, Python, HTML, C++, Java, multivariable calculus, environmental science, finite math, test preparation, and more. In my free time I like to be outdoors, play with electronics, practice archery, and listen to music.</td>
                <td>Chicago, United States</td>
              </tr>
              <tr>
                <th scope="row">Gazzy Garcia</th>
                <td>I'm a software developer focusing on web development and applications. I worked with Java, Spring, JavaScript framework such as angular, and jQuery. I have experience tutoring and mentoring with high school students, college students, and graduate students to help them understand concepts in information security and computer science. I'm comfortable tutoring students in subjects like algebra, trigonometry, geometry, physics, writing, essays, electrical engineering, computer engineering, physics, finite, JavaScript, C++, Java, Ruby, HTML, computer science, and more. When I have spare time, I enjoy practicing photography, soccer, writing, and reading.</td>
                <td>Miami, United States</td>
              </tr>
              <tr>
                <th scope="row">Symere Woods</th>
                <td>I have been passionate about mathematics for as long as I can remember. In high school I began to develop an interest in computer science and technology and as I encountered more advanced material I became convinced this was a path I needed to learn more about. As an undergraduate student I began modifying software and building computer systems. I diversified my studies and found I had a talent for mathematical statistics and Android related software development. I was offered a job with Samsung Mobile before graduation and I began to devour programming languages, including Matlab, LabVIEW, C/C++, Java, Python, HTML, and more. I currently tutor students in math, science, and technology related fields of study. Some of the courses I tutor include algebra 1 & 2, Java, calculus 1-3, technology and computer science, applied mathematics, differential equations, biostatistics, elementary math, linear algebra, middle school math, probability, pre-calculus, web design, statistics, computer science, multivariable calculus, arithmetic, algebra 3/4, finite mathematics, pre-algebra, C++, and HTML. I also tutor IB and AP students in related classes and I help students prepare for exams such as the SAT. I love working with students in these fields and helping them to overcome any fear they may have associated with the coursework so they can experience the far reaching benefits math, science, and technology have to offer.
               </td>
                <td>Philadelphia, United States</td>
              </tr>
            </tbody>
          </table>
      <a href="https://www.findtutorsnearme.com/subject/html/">Source</a>
      </div>
   </section>
   <!-- Footer -->
	<footer>
      <?php include('./includes/footer.inc') ?>
	</footer>
</body>
</html>