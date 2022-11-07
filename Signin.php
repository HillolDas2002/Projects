<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <script src="https://kit.fontawesome.com/64d58efce2.js" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="CSS/Signin.css" />
    <title>Sign in & Sign up Form</title>
    <script>
        function validateForm() {
            var name = document.myform.name.value;
            var emailid = document.myform.email.value;
            var password = document.myform.pass.value;
            var secondpassword = document.myform.repass.value;
            if (name == null || name == "" || name < 2) {
                alert("Name can't be blank!");
                return false;
            }
            if (emailid == null || emailid == "") {
                alert("Email can't be blank....Please Enter your email id");
                return false;
            }
            if (emailid.indexOf('@') <= 0) {
                alert("@invalid email-id...Please Enter valid email-id....");
                return false;
            }
            if ((emailid.charAt(emailid.length - 4) != '.') && (emailid.charAt(emailid.length - 3) != '.')) {
                alert(".invalid Email Id....");
                return false;
            }
            if (password == null || password == "" || password < 8) {
                alert("Please Enter Password of eigth characters");
                return false;
            }
            if (secondpassword == null || secondpassword == "") {
                alert("Please Confirm the previous password");
                return false;
            }
            if (password != secondpassword) {
                alert("password must be same!");
                return false;
            }
            alert("Regstration Submitted Successfully!");
            return true;
        }
    </script>
</head>

<body>
    <div class="container">
        <div class="forms-container">
            <div class="signin-signup">
                <form action="Controller.php" method="post" class="sign-in-form">
                    <h2 class="title">Sign in</h2>
                    <small>
                        <?php
                            session_start();
                            if(!empty($_SESSION['msg'])){
                            $msg=$_SESSION['msg'];
                        ?>  
                        <?=$msg?>  
                        <?php 
                            }
                        ?>
                    </small>
                    <div class="input-field">
                        <i class="fas fa-user"></i>
                        <input type="text" placeholder="Username" name="name">
                    </div>
                    <div class="input-field">
                        <i class="fas fa-lock"></i>
                        <input type="password" placeholder="Password" name="pass">
                    </div>
                    <input type="submit" value="Login" class="bttn" name="button1">
                    <p class="social-text">Or Sign in with social platforms</p>
                    <div class="social-media">
                        <a href="#" class="social-icon">
                            <i class="fab fa-facebook-f"></i>
                        </a>
                        <a href="#" class="social-icon">
                            <i class="fab fa-twitter"></i>
                        </a>
                        <a href="#" class="social-icon">
                            <i class="fab fa-google"></i>
                        </a>
                        <a href="#" class="social-icon">
                            <i class="fab fa-linkedin-in"></i>
                        </a>
                    </div>
                </form>
                <?php 
                    session_destroy();
                ?>

                <form action="Controller.php" method="post" name="myform" onsubmit="return validateForm()" class="sign-up-form">
                    <h2 class="title">Sign up</h2>
                    <div class="input-field">
                        <i class="fas fa-user"></i>
                        <input type="text" placeholder="Username" name="name">
                    </div>
                    <div class="input-field">
                        <i class="fas fa-envelope"></i>
                        <input type="email" placeholder="Email" name="email">
                    </div>
                    <div class="input-field">
                        <i class="fas fa-lock"></i>
                        <input type="password" placeholder="Password" name="pass">
                    </div>
                    <div class="input-field">
                        <i class="fas fa-lock"></i>
                        <input type="password" placeholder="Confirm Password" name="repass">
                    </div>
                    <div class="input-field">
                        <i class="fas fa-phone"></i>
                        <input type="number" placeholder="Phone Number" name="numb">
                    </div>
                    <input type="submit" class="btn" value="Sign up" name="button0">
                    <p class="social-text">Or Sign up with social platforms</p>
                    <div class="social-media">
                        <a href="#" class="social-icon">
                            <i class="fab fa-facebook-f"></i>
                        </a>
                        <a href="#" class="social-icon">
                            <i class="fab fa-twitter"></i>
                        </a>
                        <a href="#" class="social-icon">
                            <i class="fab fa-google"></i>
                        </a>
                        <a href="#" class="social-icon">
                            <i class="fab fa-linkedin-in"></i>
                        </a>
                    </div>
                </form>
            </div>
        </div>

        <div class="panels-container">
            <div class="panel left-panel">
                <div class="content">
                    <h3>New here ?</h3>
                    <p>
                        <!-- Sign-up in DECODETRONICS -->
                    </p>
                    <button class="btn transparent" id="sign-up-btn">
              Sign up
            </button>
                </div>
                <img src="img/Login0.svg" class="image" alt="">
            </div>
            <div class="panel right-panel">
                <div class="content">
                    <h3>One of us ?</h3>
                    <p>
                        <!-- Sign-in in DECODETRONICS -->
                    </p>
                    <button class="btn transparent" id="sign-in-btn">
              Sign in
            </button>
                </div>
                <img src="img/register.svg" class="image" alt="">
            </div>
        </div>
    </div>

    <script src="JavaScript/app.js"></script>
    <script src="JavaScript/jquery-3.5.1.min.js"></script>
    <!-- JavaScript Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
    <!-- <script src="custom.js"></script> -->
</body>

</html>