<!DOCTYPE html>
<html lang="en">
<head>
  <?php include('./includes/header.inc');
  $page = "about"; ?>
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
           <li class="breadcrumb-item active" aria-current="true">About</li>
         </ol>
       </nav>
   </section>

   <!-- About Details -->
   <section id="about-details">
    <div class="row d-flex justify-content-center">
        <figure class="about-figure">
            <img src="images/profilePic.jpg" alt="Divanshu">
        </figure>
        <dl class="dl">
            <dt>Name:</dt>
            <dd>Divanshu Verma</dd>
            <dt>Student ID:</dt>
            <dd>103063941</dd>
            <dt>Course:</dt>
            <dd>Bachelor of Computer Science</dd>
            <dt>Email:</dt>
            <dd>103063941@student.swin.edu.au</dd>
        </dl>
    </div>
   </section>
   <!-- Timetable -->
    <section id="timetable-section">
      <h2>Class Timetable</h2>
    <div class="row d-flex justify-content-center">
        <table id="timetable" class="table table-hover table-bordered">
            <thead>
                <tr>
                  <th>Time</th>
                  <th>Monday</th>
                  <th>Tuesday</th>
                  <th>Wednesday</th>
                  <th>Thursday</th>
                  <th>Friday</th>
                </tr>
            </thead>
            <tbody>
                <tr>
                  <th scope="row">8:30am-10:30am</th>
                  <td></td>
                  <td></td>
                  <td></td>
                  <td></td>
                  <td>TNE10006 (Lecture)</td>
                </tr>
                <tr>
                  <th scope="row">10:30am-12:30pm</th>
                  <td></td>
                  <td>COS10011 (Lab)</td>
                  <td></td>
                  <td></td>
                  <td>COS10003 (Tutorial)</td>
                </tr>
                <tr>
                  <th scope="row">12:30pm-2:30pm</th>
                  <td>TNE10006 (Lab)</td>
                  <td>COS10009 (Lecture)</td>
                  <td>COS10003 (Lecture)</td>
                  <td></td>
                  <td></td>
                </tr>
                <tr>
                  <th scope="row">2:30pm-4:30pm</th>
                  <td>COS10011 (Lecture)</td>
                  <td></td>
                  <td>COS10009 (Lab)</td>
                  <td></td>
                  <td></td>
                </tr>
            </tbody>
        </table>
    </div>
</section>
   <!-- Footer -->
	<footer>
  <?php include('./includes/footer.inc') ?>
	</footer>
</body>
</html>