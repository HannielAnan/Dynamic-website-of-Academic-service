<?php
include 'dbconnection/dbconnect.php';

// Signup
if ($_SERVER["REQUEST_METHOD"] === "POST" && isset($_POST["signup"])) {
    $email = $_POST["email"];
    $password = $_POST["password"];

    // Hash the password
    $hashedPassword = password_hash($password, PASSWORD_DEFAULT);

    // Prepare the statement
    $stmt = $conn->prepare("INSERT INTO user (email, password) VALUES (?, ?)");
    
    // Bind parameters to the statement
    $stmt->bind_param("ss", $email, $hashedPassword);

    // Execute the statement
    if ($stmt->execute()) {
        // Redirect to the login page after successful signup
        header("Location: theexpert.php");
        exit;
    } else {
        echo "Error: " . $stmt->error;
    }

    // Close the statement
    $stmt->close();
    
    // Close the database connection
    $conn->close();
}
?>

<!DOCTYPE HTML>
<html lang="en-US">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Navbar</title>
	  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/css/bootstrap.min.css">
	  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/js/bootstrap.min.js"></script>
	  <!-- <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-alpha1/dist/css/bootstrap.min.css">
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-alpha1/dist/js/bootstrap.bundle.min.js"></script> -->

	  <!-- Font Awesome CSS -->
      <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css" integrity="sha512-iecdLmaskl7CVkqkXNQ/ZH/XLlvWZOJyj7Yy7tcenmpD1ypASozpmT/E0iPtmFIB46ZmdtAc9eNBvH0H/ZpiBw==" crossorigin="anonymous" referrerpolicy="no-referrer" />
      <link rel="stylesheet" href="css/navbar.css" />
	  <link rel="stylesheet" href="css/style.css" />
	  <link rel="stylesheet" href="css/slider.css" />
    <link rel="stylesheet" href="css/sidebarnav.css"/>
    <link rel="stylesheet" href="css/faq.css">
    <link rel="stylesheet" href="css/footer.css">
    <link rel="stylesheet" href="css/loginform.css">
    <link rel="icon" type="image" href="images/logo.png">
    
</head>
<body>
 
<?php include 'includes/navbar.php'?>
<section class="ftco-section">
		<div class="container">
			
			<div class="row justify-content-center">
				<div class="col-md-6 col-lg-4">
					<div class="login-wrap py-5">
		      	<div class="img d-flex align-items-center justify-content-center" style="background-image: url(images/bg.jpg);"></div>
		      	<h3 class="text-center mb-0">Register please</h3>
		      	<p class="text-center">Sign in by entering the information below</p>
						<form method="POST" class="login-form">
                        <label>Email:</label><br>
        <input type="email" name="email" required><br><br>
        <label>Password:</label><br>
        <input type="password" name="password" required><br><br>
        <input type="submit" name="signup" value="Signup">
	          </form>
	          
	        </div>
				</div>
			</div>
		</div>
	</section>
<script src="javascript/navbar.js"> </script>
<script src="javascript/slider.js"> </script>
<script src="javascript/sidebarnav.js"> </script>
<script src="javascript/faq.js"> </script>
	
	
</body>
</html>