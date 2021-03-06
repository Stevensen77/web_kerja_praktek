<?php
// Include config file
require_once '../config.php';
 
// Define variables and initialize with empty values
$username = $password = "";
$username_err = $password_err = "";
 
// Processing form data when form is submitted
if($_SERVER["REQUEST_METHOD"] == "POST"){
	
    // Check if username is empty
    if(empty(trim($_POST["username"]))){
        $username_err = 'Please enter username.';
    } else{
        $username = trim($_POST["username"]);
    }
    
    // Check if password is empty
    if(empty(trim($_POST['password']))){
        
	
    } else{
        $password = trim($_POST['password']);
    }
    
    // Validate credentials
    if(empty($username_err) && empty($password_err)){
        // Prepare a select statement
        $sql = "SELECT username, password FROM user WHERE username = ?";
        
        if($stmt = mysqli_prepare($link, $sql)){
            // Bind variables to the prepared statement as parameters
            mysqli_stmt_bind_param($stmt, "s", $param_username);
            
            // Set parameters
            $param_username = $username;
            
            // Attempt to execute the prepared statement
            if(mysqli_stmt_execute($stmt)){
                // Store result
                mysqli_stmt_store_result($stmt);
                
                // Check if username exists, if yes then verify password
                if(mysqli_stmt_num_rows($stmt) == 1){                    
                    // Bind result variables
                    mysqli_stmt_bind_result($stmt, $username, $hashed_password);
                    if(mysqli_stmt_fetch($stmt)){
                        if(password_verify($password, $hashed_password)){
                            /* Password is correct, so start a new session and
                            save the username to the session */
                            session_start();
                            $_SESSION['username'] = $username;      
                            header("location: index.php");
                        } else{
                            // Display an error message if password is not valid
                            //$password_err = 'The password you entered was not valid.';
							echo '<script language="javascript">';
							echo 'alert("Your password wrong! Try again")';
							echo '</script>';
                        }
                    }
                } else{
                    
					echo '<script language="javascript">';
					echo 'alert("Your account is not found!")';
					echo '</script>';
                }
            } else{
                echo "Oops! Something went wrong. Please try again later.";
            }
        }
		
        
        // Close statement
        mysqli_stmt_close($stmt);
    }
    
    // Close connection
    mysqli_close($link);
}
?>


<!DOCTYPE html>
<html lang="en">
<head>
	<title>Login E-catalog</title>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
<!--===============================================================================================-->	
	<link rel="icon" type="image/png" href="../login/images/icons/favicon.ico"/>
<!--===============================================================================================-->

<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="fonts/font-awesome-4.7.0/css/font-awesome.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="fonts/iconic/css/material-design-iconic-font.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="styles/vendor/animate/animate.css">
<!--===============================================================================================-->	



	<link rel="stylesheet" type="text/css" href="styles/util.css">
	<link rel="stylesheet" type="text/css" href="styles/login.css">
<!--===============================================================================================-->
</head>

<body>
	
	<div class="limiter">
		<div class="container-login100" style="background-image: url('../images/pameran.jpg');">
			<div class="wrap-login100">
				<form class="login100-form validate-form" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>" method="post">
					<p style="font-size:20px;color:white;text-align:center">You must login first</p>
					<span class="login100-form-logo">
						<img src="../images/logo_pmhm.jpg" style="border-radius:50%" class="zmdi zmdi-landscape"></i>
					</span>

					<span class="login100-form-title p-b-34 p-t-27">
						Login User
					</span>

					<div class="wrap-input100 validate-input" data-validate = "Masukkan Username Anda!">
						<input class="input100" type="text" name="username" placeholder="Username" 
						value="<?php echo $username; ?>">
						<!--<span class="help-block"><?php echo $username_err; ?></span> -->
						<span class="focus-input100 help-block" data-placeholder="&#xf207;" <?php echo $username_err; ?>></span>
					</div>

					<div class="wrap-input100 validate-input" data-validate="Masukkan Password Anda!">
						<input class="input100" type="password" name="password" placeholder="Password">
						<span class="focus-input100 help-block" data-placeholder="&#xf191;" <?php echo $password_err; ?>></span>
					</div>

				

					<div class="container-login100-form-btn">
						<button class="login100-form-btn">
							Login
						</button>
					</div>

					 <br><p style="color:white ">Don't have an account? <a href="register.php">Sign up now</a>.</p>
				</form>
			</div>
		</div>
	</div>
	

	<div id="dropDownSelect1"></div>
	
<!--===============================================================================================-->
	<script src="styles/vendor/jquery/jquery-3.2.1.min.js"></script>
<!--===============================================================================================-->
	<script src="styles/vendor/animsition/js/animsition.min.js"></script>
<!--===============================================================================================-->
	<script src="styles/vendor/bootstrap/js/popper.js"></script>
	<script src="styles/vendor/bootstrap/js/bootstrap.min.js"></script>
<!--===============================================================================================-->
	<script src="styles/vendor/select2/select2.min.js"></script>
<!--===============================================================================================-->
	<script src="styles/vendor/daterangepicker/moment.min.js"></script>
	<script src="styles/vendor/daterangepicker/daterangepicker.js"></script>
<!--===============================================================================================-->
	<script src="styles/vendor/countdowntime/countdowntime.js"></script>
<!--===============================================================================================-->
	<script src="js/login.js"></script>

</body>
</html>


