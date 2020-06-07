<nav class="navbar navbar-expand-lg navbar-light bg-light">
    <a class="navbar-brand" href="index.php"><img src="images/logo.png" alt="logo" title="Logo"></a>
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarSupportedContent">
    <ul class="navbar-nav ml-auto">
        <li class="nav-item <?php if ($page == "home") { echo "active"; } ?>">
        <a class="nav-link" href="index.php">Home <span class="sr-only">(current)</span></a>
        </li>
        <li class="nav-item <?php if ($page == "course") { echo "active"; }?>">
        <a class="nav-link" href="product.php">Course Range</a>
        </li>
        <li class="nav-item <?php if ($page == "enquiry") { echo "active"; }?>">
        <a class="nav-link" href="enquire.php">Enquiry</a>
        </li>
        <li class="nav-item <?php if ($page == "about") { echo "active"; }?>">
        <a class="nav-link" href="about.php">About</a>
        </li>
        <li class="nav-item <?php if ($page == "enhancements") { echo "active"; }?>">
        <a class="nav-link" href="enhancements.php">Enhancements</a>
        </li>
        <li class="nav-item <?php if ($page == "enhancements2") { echo "active"; }?>">
        <a class="nav-link" href="enhancements2.php">JS Enhancements</a>
        </li>
        <li class="nav-item <?php if ($page == "enhancements3") { echo "active"; }?>">
        <a class="nav-link" href="enhancements3.php">PHP Enhancements</a>
        </li>
        <li class="nav-item <?php if ($page == "manager") { echo "active"; }?>">
        <a class="nav-link" href="manage.php">Manager</a>
        </li>
        <li id="loginMenu" class="nav-item <?php if ($page == "sign") { echo "active"; } elseif ($page == "manager") { echo "hideme"; } ?>">
        <a class="nav-link" href="sign-up.php">Sign Up/Login</a>
        </li>
        <?php if ($page == "manager") {
            echo "<li class=\"nav-item\"><a class=\"nav-link\" href=\"logout.php\">Logout</a></li>";
        } ?>
    </ul>
    </div>
</nav>