<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sign In | Weave Me</title>

    <link href='https://fonts.googleapis.com/css2?family=Poppins:wght@100;200;300;400;500;600;700&display=swap' rel='stylesheet'>
    <link href='https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css' rel='stylesheet'>
    <link rel="stylesheet" href="css\singInSignUp.css">
</head>
<body>
    <header class="header">
        <a href="login.php" class="logo">
            <img src="images\wm.png" alt="Weave Me" class="logo-img">
        </a>
    </header>

    <section class="signup">
        <div class="signup-container">
            <h1>Sign In</h1>
            <form action="login.php" method="POST">
                <div class="input-group">
                    <label for="email">Email Address</label>
                    <input type="email" id="email" name="email" placeholder="Enter your email" required>
                </div>

                <div class="input-group">
                    <label for="password">Password</label>
                    <input type="password" id="password" name="password" placeholder="Enter your password" required>
                </div>

                <div class="forgot-password">
                    <a href="#">Forgot Password?</a>
                </div>

                <button type="submit" class="btn">Sign In</button>
            </form>

            <p>Or sign in with</p>

            <div class="social-login">
                <a href="#"><i class='bx bxl-facebook-circle' ></i></a>
                <a href="#"><i class='bx bxl-instagram-alt' ></i></a>
                <a href="#"><i class='bx bxl-twitter' ></i></a>
            </div>

            <p>Don't have an account? <a href="signUp.php">Create one</a></p>
        </div>
    </section>

    <footer class="footer">
        <p>&copy; 2024 Weave Me. All Rights Reserved.</p>
    </footer>
</body>
</html>
