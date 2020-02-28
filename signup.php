
<!DOCTYPE html>
<html lang="en">
<head>
  <head>
    <meta charset="utf-8">

    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
    <title>cms system</title>
    <script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>
 </head>
 <body>
	 <header>
	
        <nav class="navbar navbar-expand-lg bg-warning navbar-teral navbar-fixed-top">
            <a class="navbar-brand" href="">cms system</a>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarTogglerDemo01" aria-controls="navbarTogglerDemo01" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarTogglerDemo01">

            <ul class="navbar-nav ml-auto">
                <li class="nav-item">
                    <a class="nav-link" href="main.php">home</a>
                </li>

                <li class="nav-item">
                    <a class="nav-link" href="">contact us</a>
                </li>

              
            </ul>
            </div>
        </nav>
	</header>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Sign Up</title>
    <!-- Font Icon -->
    <link rel="stylesheet" href="fonts/material-icon/css/material-design-iconic-font.min.css">
    <!-- Main css -->
    <link rel="stylesheet" href="css/style.css">
</head>
<body>
    <div class="main">
        <!-- Sign up form -->
        <section class="signup">
            <div class="container">
                <div class="signup-content">
                    <div class="signup-form">
                        <h2 class="form-title">Sign up</h2>
						<?php
					if(count($_POST)>0){
						echo "<span style='color:green;text-align:center;'>Mobile Number or Email Id already exsit</span>";
					}
					?>
                        <form method="POST" class="register-form" id="register-form" action="process.php">
						   
                            <div class="form-group">
                                <label for="name"><i class="zmdi zmdi-account material-icons-name"></i></label>
                                <input type="text" name="name" id="name" placeholder="Name" required />
								<span id="error_name" style="color:red;"></span>
                            </div>
							<div class="form-group">
                                <label for="email_id"><i class="zmdi zmdi-email"></i></label>
                                <input type="email" name="email_id" id="email_id" placeholder="Email Id" required / >
								
                            </div>
							
							 <div class="form-group">
                                <label for="phone"><i class="zmdi zmdi-phone"></i></label>
                                <input  name="phone" type="tel" minlength="10" maxlength="10" id="phone" placeholder="Phone"  required />
								<span id="error_phone" style="color:red;"></span>
                             </div>
                            <div class="form-group">
                                <label for="pass"><i class="zmdi zmdi-lock"></i></label>
                                <input type="password" name="pass" id="pass" placeholder="Password"  required />
                            </div>
                            <div class="form-group">
                                <label for="re-pass"><i class="zmdi zmdi-lock-outline"></i></label>
                                <input type="password" name="password" id="re_pass" placeholder="Repeat your password"  required />
								<span id="CheckPasswordMatch" style="color:red;"></span>
                            </div>
							<span><i class="zmdi zmdi-eye" id="show_password"></i>Show Password</span>
							
                            <div class="form-group form-button">
                                <input type="submit" name="save" id="signup" class="form-submit" value="Register"/>
                            </div>
                        </form>
                    </div>
                    <div class="signup-image">
                        <figure><img src="images/signup-image.jpg" alt="sing up image"></figure>
                        <a href="index.php" class="signup-image-link">I am already member</a>
						
                    </div>
                </div>
            </div>
        </section>
		</div>

    <!-- JS -->
    <script src="vendor/jquery/jquery.min.js"></script>
    <script src="js/main.js"></script>
	
<?php include('footer.php');?><!-- footer page -->
</html>