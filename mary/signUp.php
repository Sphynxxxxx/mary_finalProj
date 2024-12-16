<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sign Up | Weave Me</title>

    <link href='https://fonts.googleapis.com/css2?family=Poppins:wght@100;200;300;400;500;600;700&display=swap' rel='stylesheet'>
    <link rel="stylesheet" href="css\singInSignUp.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/boxicons/2.1.1/css/boxicons.min.css"> <!-- Link to Boxicons -->
</head>
<body>
    <header class="header">
        <a href="home.php" class="logo">
            <img src="images\wm.png" alt="Weave Me" class="logo-img">
        </a>
    </header>

    <section class="signup">
        <div class="signup-container">
            <h1>Create Account</h1>
            <form action="register.php" method="POST">
                <div class="input-group">
                    <label for="name">Full Name</label>
                    <input type="text" id="name" name="name" placeholder="Enter your name" required>
                </div>

                <div class="input-group">
                    <label for="email">Email Address</label>
                    <input type="email" id="email" name="email" placeholder="Enter your email" required>
                </div>

                <div class="input-group">
                    <label for="password">Password</label>
                    <input type="password" id="password" name="password" placeholder="Enter your password" required>
                </div>

                <div class="input-group">
                    <label for="confirm-password">Confirm Password</label>
                    <input type="password" id="confirm-password" name="confirm-password" placeholder="Re-enter your password" required>
                </div>

                <button type="submit" class="btn">Sign Up</button>
            </form>

            <p class="forgot-password"><a href="C:\mary\forgotPassword.html">Forgot Password?</a></p> 

            <div class="social-login">
                <p>Or sign up with:</p>
                <a href="#"><i class='bx bxl-facebook-circle'></i></a>
                <a href="#"><i class='bx bxl-instagram-alt'></i></a>
                <a href="#"><i class='bx bxl-twitter'></i></a>
            </div>

            <p>Already have an account? <a href="signIn.php">Login here</a></p>
        </div>
    </section>

    <footer class="footer">
        <p>&copy; 2024 Weave Me. All Rights Reserved.</p>
    </footer>
</body>
</html>

