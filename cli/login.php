<?php
	session_start();
 
	if(isset($_SESSION['user'])){
		header('location: patient/patient-home.php');
	}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sahla - Log In</title>

    <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Roboto:300,300i,400,400i,500,500i,600,600i,700,700i|Poppins:300,300i,400,400i,500,500i,600,600i,700,700i" rel="stylesheet">
    <script src="https://kit.fontawesome.com/6a128389df.js" crossorigin="anonymous"></script>

    <?php include 'patient/oop/patient_login.php' ?>
    
    <link rel="stylesheet" href="assets/css/login.css?v=<?php echo time(); ?>">
    
</head>
<body>

    <?php
    
    $user = new Patient();
    
    if(isset($_POST['login'])){
        $email = $user->escape_string($_POST['email']);
        $password = $user->escape_string($_POST['password']);
    
        $auth = $user->check_login($email, $password);
    
        if(!$auth){
            $_SESSION['message'] = 'Invalid email or password';
        }
        else{
            if($auth>1000){
                $_SESSION['user'] = $auth;
                header('location: patient/patient-home.php');
            }
            else if($auth==1){
                $_SESSION['admin'] = $auth;
                header('location: admin/admin-index.php');
            }
            else{
                $_SESSION['doctor'] = $auth;
                header('location: doctor/doctor-home.php');
            }
        }
    }
    ?>
    
    <div class="split-screen">
        <div class="left">
            <section class="text">
                <h1>Welcome Back!</h1>
                <p>Click <a href="index.php">here</a> to go back to home page.</p>
            </section>
        </div>
        <div class="right">
            <form action="" method="post">
                <section class="text">
                    <h1 class="logo">Sa<span>hla</span></h1>
                </section>

	            <div class="input-field">
                    <i class="fas fa-envelope"></i>
                    <input type="email" name="email" placeholder="Email" id="email" required>
                  </div>

                <div class="input-field">
                    <i class="fas fa-key"></i>
                    <input type="password" name="password" placeholder="Password" id="password" required>
                  </div>         
                  
                <input class="btn" type="submit" name="login" value="Log in"> 

                <p>Don't have an account yet?<a href="signup.php">
                    <strong>Sign Up<strong></a></p>     
                <?php
                    if(isset($_SESSION['message'])){
                        ?>
                            <div class="alert">
                                <?php echo $_SESSION['message']; ?>
                            </div>
                        <?php
                        unset($_SESSION['message']);
                    }
		        ?> 
            </form>
        </div> 

    </div>
</body>
</html>