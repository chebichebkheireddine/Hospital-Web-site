<!DOCTYPE html>
<html lang="en">
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>appointMed - Sign Up</title>

    <?php include 'patient/oop/patient_signup.php' ?>

    <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Roboto:300,300i,400,400i,500,500i,600,600i,700,700i|Poppins:300,300i,400,400i,500,500i,600,600i,700,700i" rel="stylesheet">
    <script src="https://kit.fontawesome.com/6a128389df.js" crossorigin="anonymous"></script>
    
    <link rel="stylesheet" href="assets/css/signup.css?v=<?php echo time(); ?>">
</head>
<body>

    <?php
        $user = new Patient();
        if(isset($_POST['insert'])){
            $user->insert($_POST['fname'], $_POST['lname'], $_POST['email'], $_POST['bday'], $_POST['password'], $_POST['confirm_password']);
        }
    ?>

    <div class="split-screen">
        <div class="left">
            <section class="text">
                <h1>appointMed Clinic</h1>
                <p>Click <a href="index.php">here</a> to go back to home page.</p>
            </section>
        </div>
        
        <div class="right">
            <form method="post" action="">
                <section class="text">
                    <h2>Create an Account</h2> 
                </section>

	            <div class="input-field">
                    <i class="fas fa-user"></i>
                    <input type="text" name="fname" placeholder="First Name" required >
                </div>

	            <div class="input-field">
                    <i class="fas fa-user"></i>
                    <input type="text" name="lname" placeholder="Last Name" required >
                </div>

	            <div class="input-field">
                    <i class="fas fa-envelope"></i>
                    <input type="email" name="email" placeholder="Email" required >
                </div>

	            <div class="input-field">
                    <i class="fas fa-calendar"></i>
                    <input type="date" name="bday" placeholder="Birthday" required >
                </div>

                <div class="input-field">
                    <i class="fas fa-key"></i>
                    <input type="password" name="password" id="password" placeholder="Password" pattern="(?=.*\d)(?=.*[a-z])(?=.*[A-Z]).{8,}" title="Must contain at least one number and one uppercase and lowercase letter, and at least 8 or more characters"  onkeyup='check();' required >
                </div>   

                <div class="input-field">
                    <i class="fas fa-key"></i>
                    <input type="password" name="confirm_password" id="confirm_password" placeholder="Confirm Password" pattern="(?=.*\d)(?=.*[a-z])(?=.*[A-Z]).{8,}" title="Must contain at least one number and one uppercase and lowercase letter, and at least 8 or more characters"  onkeyup='check();' required >
                </div>  

                <div class="message" id="message"></div>

                <script src="assets/js/signup.js?v=<?php echo time(); ?>"></script>

                <?php
                    if(isset($_SESSION['message_failed'])){
                        ?>
                            <div class="alert-fail">
                                <?php echo $_SESSION['message_failed']; ?>
                            </div>
                        <?php
                    }

                    if(isset($_SESSION['message_successful'])){
                        ?>
                            <div class="alert-successful">
                                <?php echo $_SESSION['message_successful']; ?>
                            </div>
                        <?php
                    }
		        ?> 
                
                <input class="btn" type="submit" name="insert" value="Sign Up"> 


                <div class="login-container">
                <section class="copy legal">
                    <p><span class="small">By signing up, you agree to accept our <br>
                    <a href="#">Privacy Policy</a> &amp; <a href="#">Terms of Service</a>.</span></p>
                </section>
                <p>Already have an account?<a href="login.php">
                    <strong>Log In<strong></a></p>
                </div> 
            </form>
        </div>
    </div>

</body>
</html>