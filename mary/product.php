<?php
include('config.php'); 

$sql = "SELECT * FROM posts";  
$result = mysqli_query($conn, $sql);

if (mysqli_num_rows($result) > 0) {
    $posts = mysqli_fetch_all($result, MYSQLI_ASSOC);
} else {
    $posts = [];
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Weave Me</title>

    <link href='https://fonts.googleapis.com/css2?family=Poppins:wght@100;200;300;400;500;600;700;800;900&display=swap' rel='stylesheet'>
    <link href='https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css' rel='stylesheet'>
    <link rel="stylesheet" href="css/product.css">
</head>
<body>
    <header class="header">
        <a href="home.php" class="logo">
            <img src="images/wm.png" alt="Weave Me" class="logo-img">
        </a>

        <nav class="navbar">
            <a href="home.php" style="--i:1;">Home</a>
            <a href="product.php" style="--i:2;" class="active">Products</a>
            <a href="about.php" style="--i:3;">About</a>
            <a href="contact.php" style="--i:3;">Contact</a>
            <a href="signUp.php" style="--i:5">Sign Up</a>
            <a href="logout.php" style="--i:5">Log Out</a>
        </nav>
    </header>

    <section class="product-posts">
        <h1>Furnitures</h1>
        <div class="post-container">
            <?php
            foreach ($posts as $post) {
                if ($post['category'] == 'Furnitures') {
                    ?>
                    <div class="post">
                        <a href="post.php?id=<?php echo $post['id']; ?>">
                            <img src="uploads/<?php echo $post['image']; ?>" alt="">
                        </a>
                        <div class="post-content">
                            <span class="variety"><?php echo $post['variety']; ?></span>
                            <h3><?php echo $post['title']; ?></h3>
                            <a href="post.php?id=<?php echo $post['id']; ?>" class="view-post">VIEW POST &rarr;</a>
                        </div>
                    </div>
                    <?php
                }
            }
            ?>
        </div>
    </section>

    <section class="product-posts">
        <h1>Decorations</h1>
        <div class="post-container">
            <?php
            foreach ($posts as $post) {
                if ($post['category'] == 'Decorations') {
                    ?>
                    <div class="post">
                        <a href="post.php?id=<?php echo $post['id']; ?>">
                            <img src="uploads/<?php echo $post['image']; ?>" alt="">
                        </a>
                        <div class="post-content">
                            <span class="variety"><?php echo $post['variety']; ?></span> 
                            <h3><?php echo $post['title']; ?></h3>
                            <a href="post.php?id=<?php echo $post['id']; ?>" class="view-post">VIEW POST &rarr;</a>
                        </div>
                    </div>
                    <?php
                }
            }
            ?>
        </div>
    </section>

    <section class="product-posts">
        <h1>Accessories</h1>
        <div class="post-container">
            <?php
            foreach ($posts as $post) {
                if ($post['category'] == 'Accessories') {
                    ?>
                    <div class="post">
                        <a href="post.php?id=<?php echo $post['id']; ?>">
                            <img src="uploads/<?php echo $post['image']; ?>" alt="">
                        </a>
                        <div class="post-content">
                        <span class="variety"><?php echo $post['variety']; ?></span> 
                            <h3><?php echo $post['title']; ?></h3>
                            <a href="post.php?id=<?php echo $post['id']; ?>" class="view-post">VIEW POST &rarr;</a>
                        </div>
                    </div>
                    <?php
                }
            }
            ?>
        </div>
    </section>

    <footer class="footer">
    </footer>
</body>
</html>
