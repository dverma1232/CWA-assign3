<?php
	function sanitise_input($data) {
		$data = trim($data);
		$data = stripslashes($data);
		$data = htmlspecialchars($data);
		return $data;
	}

	require_once "settings.php";	// Load MySQL log in credentials
	$conn = mysqli_connect ($host,$user,$pwd,$sql_db);
	$username = ""; 
	$password = "";
	$err_msg = "";
	if($_SERVER["REQUEST_METHOD"] == "POST"){
		if(sanitise_input($_POST["username"]) == ""){
			$err_msg .= "Please enter a username.";
		} else{
			$sql = "SELECT id FROM users WHERE username = ?";
			
			if($stmt = mysqli_prepare($conn, $sql)){
				mysqli_stmt_bind_param($stmt, "s", $param_username);
				$param_username = sanitise_input($_POST["username"]);
				if(mysqli_stmt_execute($stmt)){
					mysqli_stmt_store_result($stmt);
					if(mysqli_stmt_num_rows($stmt) == 1){
						$err_msg .= "This username is already taken.";
					} else{
						$username = sanitise_input($_POST["username"]);
					}
				} else{
					echo "Oops! Something went wrong. Please try again later.";
				}
				mysqli_stmt_close($stmt);
			}
		}

		if(trim($_POST["password"]) == ""){
			$err_msg .= "Please enter a password.";     
		} else{
			$password = trim($_POST["password"]);
		}

		if(empty($err_msg)) {
			$sql = "INSERT INTO users (username, password) VALUES (?, ?)";
			if($stmt = mysqli_prepare($conn, $sql)){
				mysqli_stmt_bind_param($stmt, "ss", $param_username, $param_password);
				$param_username = $username;
				$param_password = $password; // Creates a password hash
				if(mysqli_stmt_execute($stmt)){
					// Redirect to login page
					header("location: login.php");
				} else{
					echo "Something went wrong. Please try again later.";
				}
				// Close statement
				mysqli_stmt_close($stmt);
			}
		}
		
		// Close connection
		mysqli_close($conn);
	}
?>

<!DOCTYPE html>
<html lang="en">
<head>
  <?php include('./includes/header.inc'); $page="sign"; ?>
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
           <li class="breadcrumb-item active" aria-current="true">Sign Up</li>
         </ol>
       </nav>
   </section>
   <section id="contact">
		<h2>Sign Up</h2> 
	</section>

	<section id="signupForm">
	<div class="container">
		<?php echo $err_msg ?> 
		<form action method="post">
			<div class="form-group">
				<label for="username">Username:</label>
				<input class="form-control" type="text" name="username" id="username" maxlength="25" size="25" required value="<?php echo $username; ?>" />
			</div>
			<div class="form-group">
				<label for="password">Password:</label>
				<input class="form-control" type="password" name="password" id="password" maxlength="25" size="25" required value="<?php echo $password; ?>" />
			</div>  
			<button type="submit" name="submit" class="btn btn-primary">Sign Up</button>
			<p>Already have an account? <a href="login.php">Login here</a></p>
		</form>
	</div>
	</section>

   <!-- Footer -->
   <footer>
    <?php include('./includes/footer.inc') ?>
	</footer>
</body>
</html>