<?php
include 'dbconnection/dbconnect.php';

// Login
if ($_SERVER["REQUEST_METHOD"] === "POST" && isset($_POST["login"])) {
    $username = $_POST["username"];
    $password = $_POST["password"];

    // Prepare the statement
    $stmt = $conn->prepare("SELECT id, password FROM user WHERE email = ?");
    
    // Bind parameter to the statement
    $stmt->bind_param("s", $username);

    // Execute the statement
    $stmt->execute();

    // Get the result
    $result = $stmt->get_result();

    // Check if the user exists
    if ($result->num_rows === 1) {
        // Fetch the row
        $row = $result->fetch_assoc();

        // Verify the password
        if (password_verify($password, $row["password"])) {
            // Password is correct, log in the user
            if ($row["id"] == 2) {
                // Redirect to admin.php if the ID is 2
                session_start();
                $_SESSION['loggedin'] = true;
                header("Location: admin/admin.php");
                exit;
            } else {
                // Redirect to a different page for non-admin users
                session_start();
                $_SESSION['loggedin'] = true;
                header("Location: index.php");
                exit;
            }
        } else {
            // Password is incorrect
            echo "Incorrect password";
        }
    } else {
        // User does not exist
        echo "User not found";
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
	<title>Cheap Dissertation Writing Services | Dissertation Writing Help UK</title>
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
		      	<h3 class="text-center mb-0">Welcome</h3>
		      	<p class="text-center">Sign in by entering the information below</p>
						<form method="POST" class="login-form">
		      		<div class="form-group">
		      			<div class="icon d-flex align-items-center justify-content-center"><span class="fa fa-user"></span></div>
		      			<input type="text" name="username" class="form-control" placeholder="Username" required>
		      		</div>
	            <div class="form-group">
	            	<div class="icon d-flex align-items-center justify-content-center"><span class="fa fa-lock"></span></div>
	              <input type="password" name="password" class="form-control" placeholder="Password" required>
	            </div>
	            <div class="form-group d-md-flex">
								<div class="w-100 text-md-right">
									<a href="#">Forgot Password</a>
								</div>
	            </div>
	            <div class="form-group">
	            	<input type="submit" name="login" class="btn form-control btn-primary rounded submit px-3" value="Get Started">
	            </div>
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
