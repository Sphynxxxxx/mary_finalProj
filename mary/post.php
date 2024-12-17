<?php
include('config.php');

if (isset($_GET['id'])) {
    $post_id = $_GET['id'];
    
    $sql = "SELECT * FROM posts WHERE id = $post_id";
    $result = mysqli_query($conn, $sql);
    $post = mysqli_fetch_assoc($result);
}

if ($_SERVER['REQUEST_METHOD'] === 'POST' && isset($_POST['comment'])) {
    $comment = mysqli_real_escape_string($conn, $_POST['comment']);
    $insert_sql = "INSERT INTO comments (post_id, comment) VALUES ('$post_id', '$comment')";
    mysqli_query($conn, $insert_sql);
    header("Location: post.php?id=$post_id"); 
    exit();
}

if ($_SERVER['REQUEST_METHOD'] === 'POST' && isset($_POST['like'])) {
    $update_likes_sql = "UPDATE posts SET likes = likes + 1 WHERE id = $post_id";
    mysqli_query($conn, $update_likes_sql);

    $post['likes']++;
    header("Location: post.php?id=$post_id"); 
    exit();
}

$comments_query = "SELECT * FROM comments WHERE post_id = $post_id ORDER BY created_at DESC";
$comments_result = mysqli_query($conn, $comments_query);
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>View Post</title>
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;600&display=swap" rel="stylesheet">
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css" rel="stylesheet">    
    <link rel="stylesheet" href="css/post.css">
</head>
<body>

    <header class="header">
        <a href="home.php" class="logo">
            <img src="images/wm.png" alt="Weave Me" class="logo-img">
        </a>

        <nav class="navbar">
            <a href="home.php" style="--i:1;" class="active">Home</a>
            <a href="product.php" style="--i:2;">Products</a>
            <a href="about.php" style="--i:3;">About</a>
            <a href="contact.php" style="--i:4;">Contact</a>
            <a href="signUp.php" style="--i:5">Sign Up</a>
        </nav>
    </header>

    <section class="post-section">
        <h1>How to Make <?php echo htmlspecialchars($post['variety']); ?></h1>

        <div class="post-container">
            <div class="post-content">
                <img src="uploads/<?php echo htmlspecialchars($post['image']); ?>" alt="Product Image" class="post-image">
                <p><strong>Category:</strong> <?php echo htmlspecialchars($post['category']); ?></p>
                <p><strong>Variety:</strong> <?php echo htmlspecialchars($post['variety']); ?></p>
                <p><strong>Description:</strong> <?php echo nl2br(htmlspecialchars($post['description'])); ?></p>

                <h3>Materials Needed:</h3>
                <p><?php echo nl2br(htmlspecialchars($post['materials'])); ?></p>

                <h3>Procedures:</h3>
                <p><?php echo nl2br(htmlspecialchars($post['procedures'])); ?></p>
            </div>

            <div class="post-actions">
                <form method="POST" action="">
                    <button type="submit" name="like" class="like-button">
                        <i class="fa-solid fa-heart"></i> Like
                    </button>
                    <span class="like-count"><?php echo $post['likes']; ?> Likes</span>
                </form>
            </div>


            <div class="comment-area">
                <h3>Comments</h3>
                
                <form method="POST" action="">
                    <textarea name="comment" class="comment-input" placeholder="Write a comment..." required></textarea>
                    <button type="submit" class="post-comment-button">Post Comment</button>
                </form>

                <div class="comment-list">
                    <?php while ($comment = mysqli_fetch_assoc($comments_result)): ?>
                        <div class="comment">
                            <p><?php echo nl2br(htmlspecialchars($comment['comment'])); ?></p>
                            <small><?php echo date("F j, Y, g:i a", strtotime($comment['created_at'])); ?></small>
                        </div>
                    <?php endwhile; ?>
                </div>
            </div>

        </div>
    </section>

    <footer class="footer">
        <p>&copy; 2024 Your Website | All Rights Reserved</p>
    </footer>

</body>
</html>
