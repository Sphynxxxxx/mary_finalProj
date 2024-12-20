<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Contact Us | Weave Me</title>
    <link href='https://fonts.googleapis.com/css2?family=Poppins:wght@100;200;300;400;500;600;700&display=swap' rel='stylesheet'>
    <link rel="stylesheet" href="css/contact.css">
</head>
<body>
    <header class="header">
        <a href="home.php" class="logo">
            <img src="images\wm.png" alt="Weave Me" class="logo-img">
        </a>
        <nav class="navbar">
            <a href="../index.php">Home</a>
            <a href="product.php" style="--i:2;">Products</a>
            <a href="about.php">About</a>
            <a href="contact.php" class="active">Contact</a>
            <a href="signUp.php">Sign Up</a>
            <a href="logout.php" style="--i:5">Log Out</a>

        </nav>
    </header>

    <section class="contact">
        <h1>Contact Us</h1>
        <div class="contact-info">
            <div class="info">
                <h2>Get in Touch</h2>
                <p>If you have any questions, feel free to reach out to us!</p>
                <p><strong>Email:</strong> contact@weaveme.com</p>
                <p><strong>Phone:</strong> +123 456 7890</p>
                <p><strong>Address:</strong> 123 Bamboo Lane, Guimbal, Iloilo.</p>
            </div>
            <div class="form-container">
                <h2>Contact Form</h2>
                <form action="submit_form.php" method="POST">
                    <input type="text" name="name" placeholder="Your Name" required>
                    <input type="email" name="email" placeholder="Your Email" required>
                    <textarea name="message" rows="5" placeholder="Your Message" required></textarea>
                    <button type="submit" class="btn">Send Message</button>
                </form>
            </div>
        </div>
    </section>

    <footer class="footer">
    </footer>
</body>
</html>
