
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Weave Me</title>

    <link href='https://fonts.googleapis.com/css2?family=Poppins:wght@100;200;300;400;500;600;700;800;900&display=swap' rel='stylesheet'>
    <link href='https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css' rel='stylesheet'>

    <link rel="stylesheet" href="css\home.css">
</head>
<body>
    <header class="header">
        <a href="home.php" class="logo">
            <img src="images\wm.png" alt="Weave Me" class="logo-img">
        </a>

        <nav class="navbar">
            <a href="home.php"style="--i:1;" class="active">Home</a>
            <a href="product.php" style="--i:2;">Products</a>
            <a href="about.php" style="--i:3;">About</a>
            <a href="contact.php"style="--i:4;">Contact</a>
            <a href="signUp.php" style="--i:5">Sign Up</a>
            <a href="admin.php" style="--i:5">Admin</a>
        </nav>
    </header>

    <section class="home" id="home">
        <div class="home-content">
            <h1>"Let's Weave and Craft with Bamboo!"</h1>
            <p>Welcome to "Let's Weave and Craft with Bamboo," your online sanctuary for discovering the art of weaving and
                crafting using sustainable bamboo and rattan. Unleash your creativity and embrace the natural elegance of
                these eco-friendly materials.
            </p>
            <a href="product.php" class="btn">Explore Products</a>
            <div class="social-media">
                <a href="#"><i class='bx bxl-facebook-circle' ></i></a>
                <a href="#"><i class='bx bxl-instagram-alt' ></i></a>
                <a href="#"><i class='bx bxl-twitter' ></i></a>
            </div>
        </div>
        
    </section>

    <section class="latest-posts">
        <h1>Latest Posts</h1>
        <div class="post-container">
            
            <div class="post">
                <a href="post1.php">
                    <img src="images\312e82fdb82be77a4c7d057aaff2d73f.jpg" alt="">
                </a>
                <div class="post-content">
                    <span class="category">BAMBOO</span>
                    <h3>Bamboo Flat Basket</h3>
                    <h5>This baskets have a simple, rustic look and are a beautiful example of traditional craftsmanship.
                        They would be perfect for storing fruits, vegetables, or other household items.</h5>
                    <a href="post1.php" class="view-post">VIEW POST &rarr;</a>
                </div>
            </div>

            <div class="post">
                <a href="post4.php">
                    <img src="images\30632ceaa64577c50fc1f553730891af.jpg" alt="">
                </a>
                <div class="post-content">
                    <span class="category">BAMBOO</span>
                    <h3>Bamboo Woven Basket</h3>
                    <h5>This basket is a beautiful example of traditional craftsmanship, with intricate weaving patterns
                        and a natural, rustic look. It would be perfect for storing blankets, toys, or other household items. </h5>
                    <a href="post4.php" class="view-post">VIEW POST &rarr;</a>
                </div>
            </div>

            <div class="post">
                <a href="post5.php">
                    <img src="images\364262572_304117305319792_4619480183285039417_n.jpg" alt="">
                </a>
                <div class="post-content">
                    <span class="category">BAMBOO</span>
                    <h3>Bamboo Pendant Lamp</h3>
                    <h5>These woven bamboo lamps are a beautiful and unique way to add a touch of natural elegance to any space.
                        Their warm, rustic aesthetic complements a variety of interior design styles, from bohemian to minimalist.
                        They can be used in living rooms, bedrooms, dining rooms, or even outdoor spaces to create a cozy and inviting ambiance.</h5>
                    <a href="post5.php" class="view-post">VIEW POST &rarr;</a>
                </div>
            </div>

        </div>
    </section>

    <section class="featured-posts">
        <div class="post-container">
            
            <div class="post">
                <a href="post6.php">
                    <img src="images\0cfe06f6064de8eb33bd0a0231c3c726.jpg" alt="">
                </a>
                <div class="post-content">
                    <span class="category">BAMBOO</span>
                    <h3>Bamboo Wastebasket</h3>
                    <h5>This woven bamboo lampshade adds natural elegance to any lamp, creating a cozy ambiance in various spaces.
                        Its open weave diffuses light for a relaxing atmosphere, and its versatility allows for use with different lamp bases.
                        It's a great way to add personality and warmth to any room. </h5>
                    <a href="post6.php" class="view-post">VIEW POST &rarr;</a>
                </div>
            </div>

            <div class="post">
                <a href="post3.php">
                    <img src="images\RoundBamboo.jpg" alt="">
                </a>
                <div class="post-content">
                    <span class="category">BAMBOO</span>
                    <h3>Round Bamboo Basket</h3>
                    <h5>This woven bamboo basket is a beautiful and practical addition to any home.
                        Its natural, rustic look adds a touch of warmth and charm to any space.
                        It can be used to store a variety of items, such as fruit, vegetables, toiletries, or even small plants. </h5>
                    <a href="post3.php" class="view-post">VIEW POST &rarr;</a>
                </div>
            </div>

            <div class="post">
                <a href="post7.php">
                    <img src="images\bamboo shelf.jpg" alt="">
                </a>
                <div class="post-content">
                    <span class="category">BAMBOO</span>
                    <h3>Bamboo Shelf</h3>
                    <h5>This bamboo shelf is a beautiful and functional piece of furniture that can be used in a variety of settings.
                        It can be used to display plants, books, decorative items, or even as a storage unit for small items.
                    </h5>
                    <a href="post7.php" class="view-post">VIEW POST &rarr;</a>
                </div>
            </div>

        </div>
    </section>

    <footer class="footer">
    </footer>
</body>
</html>