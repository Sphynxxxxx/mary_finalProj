<?php
include('config.php');

// Delete product
if (isset($_GET['delete_id'])) {
    $delete_id = $_GET['delete_id'];
    $sql = "SELECT image FROM posts WHERE id = '$delete_id'";
    $result = mysqli_query($conn, $sql);
    if ($result) {
        $row = mysqli_fetch_assoc($result);
        $imagePath = "uploads/" . $row['image'];

        // Delete the product image from the folder
        if (file_exists($imagePath)) {
            unlink($imagePath);
        }

        // Delete product from database
        $deleteSql = "DELETE FROM posts WHERE id = '$delete_id'";
        if (mysqli_query($conn, $deleteSql)) {
            echo "Product deleted successfully.";
        } else {
            echo "Error: " . mysqli_error($conn);
        }
    }
}

// Fetch all products
$sql = "SELECT * FROM posts";
$result = mysqli_query($conn, $sql);
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Manage Products</title>
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;600&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="css/admin.css">
</head>
<body>

    <div class="container">
        <h1>Manage Products</h1>
        <table>
            <thead>
                <tr>
                    <th>Product Title</th>
                    <th>Category</th>
                    <th>Variety</th>
                    <th>Description</th>
                    <th>Image</th>
                    <th>Actions</th>
                </tr>
            </thead>
            <tbody>
                <?php while ($row = mysqli_fetch_assoc($result)): ?>
                    <tr>
                        <td><?= htmlspecialchars($row['title']) ?></td>
                        <td><?= htmlspecialchars($row['category']) ?></td>
                        <td><?= htmlspecialchars($row['variety']) ?></td>
                        <td><?= htmlspecialchars($row['description']) ?></td>
                        <td><img src="uploads/<?= htmlspecialchars($row['image']) ?>" alt="Product Image" width="100"></td>
                        <td>
                            <a href="edit_product.php?id=<?= $row['id'] ?>" class="btn edit-btn">Edit</a>
                            <a href="edit_post.php?id=<?= $row['id'] ?>" class="btn edit-btn">Edit Post</a>
                            <a href="?delete_id=<?= $row['id'] ?>" class="btn delete-btn" onclick="return confirm('Are you sure you want to delete this product?')">Delete</a>
                        </td>
                    </tr>
                <?php endwhile; ?>
            </tbody>
        </table>
        <a href="admin.php" class="btn">Add New Product</a>
    </div>

</body>
</html>
