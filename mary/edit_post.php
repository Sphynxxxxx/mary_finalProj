<?php
include('config.php');

if (isset($_GET['id'])) {
    $id = $_GET['id'];
    
    // Fetch post details
    $sql = "SELECT * FROM posts WHERE id = $id";
    $result = mysqli_query($conn, $sql);
    $post = mysqli_fetch_assoc($result);

    // Handle post updates
    if ($_SERVER["REQUEST_METHOD"] == "POST" && isset($_POST['materials'], $_POST['procedures'])) {
        $materials = mysqli_real_escape_string($conn, $_POST['materials']);
        $procedures = mysqli_real_escape_string($conn, $_POST['procedures']);

        $update_sql = "UPDATE posts SET materials = '$materials', procedures = '$procedures' WHERE id = $id";
        if (mysqli_query($conn, $update_sql)) {
            header("Location: edit_post.php?id=$id");
            exit;
        } else {
            echo "Error: " . mysqli_error($conn);
        }
    }

    // Handle comment deletion
    if (isset($_GET['delete_comment_id'])) {
        $comment_id = $_GET['delete_comment_id'];
        $delete_sql = "DELETE FROM comments WHERE id = $comment_id";
        if (mysqli_query($conn, $delete_sql)) {
            header("Location: edit_post.php?id=$id");
            exit;
        } else {
            echo "Error deleting comment: " . mysqli_error($conn);
        }
    }

    // Fetch comments for the post
    $comments_query = "SELECT * FROM comments WHERE post_id = $id ORDER BY created_at DESC";
    $comments_result = mysqli_query($conn, $comments_query);
}
?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Edit Post</title>
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;600&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="css/admin.css">
</head>
<body>

    <div class="container">
        <h1>Edit Post</h1>

        <div class="post-container">
            <h2><?php echo htmlspecialchars($post['title']); ?></h2>
            <img src="uploads/<?php echo htmlspecialchars($post['image']); ?>" alt="Product Image" width="300px">
            <p><strong>Category:</strong> <?php echo htmlspecialchars($post['category']); ?></p>
            <p><strong>Variety:</strong> <?php echo htmlspecialchars($post['variety']); ?></p>
            <p><strong>Description:</strong> <?php echo nl2br(htmlspecialchars($post['description'])); ?></p>

            <form method="POST" action="">
                <h3>Materials Needed:</h3>
                <textarea name="materials" rows="5" cols="50"><?php echo htmlspecialchars($post['materials']); ?></textarea>
                
                <h3>Procedures:</h3>
                <textarea name="procedures" rows="5" cols="50"><?php echo htmlspecialchars($post['procedures']); ?></textarea>

                <button type="submit">Save Changes</button>
                <a href="manage_product.php" class="btn">Back to Manage Products</a>
            </form>
        </div>

        <div class="comments-container">
            <h3>Manage Comments</h3>
            <ul class="comment-list">
                <?php while ($comment = mysqli_fetch_assoc($comments_result)): ?>
                    <li>
                        <p><?php echo htmlspecialchars($comment['comment']); ?></p>
                        <small>Posted on <?php echo date("F j, Y, g:i a", strtotime($comment['created_at'])); ?></small>
                        <form method="GET" action="" class="delete-form">
                            <input type="hidden" name="id" value="<?php echo $id; ?>">
                            <input type="hidden" name="delete_comment_id" value="<?php echo $comment['id']; ?>">
                            <button type="submit" class="delete-button"></i> Delete
                            </button>
                        </form>
                    </li>
                <?php endwhile; ?>
            </ul>
        </div>

    </div>

</body>
</html>
