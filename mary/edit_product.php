<?php
include('config.php');

// Check if an ID is passed
if (isset($_GET['id'])) {
    $id = $_GET['id'];
    $sql = "SELECT * FROM posts WHERE id = '$id'";
    $result = mysqli_query($conn, $sql);
    if ($result) {
        $product = mysqli_fetch_assoc($result);
    }
}

// Update product
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $title = $_POST['title'];
    $category = $_POST['category'];
    $description = $_POST['description'];
    $variety = $_POST['variety'];

    if (!empty($_FILES['image']['name'])) {
        // Handle new image upload
        $image = $_FILES['image']['name'];
        $target = "uploads/" . basename($image);
        if (move_uploaded_file($_FILES['image']['tmp_name'], $target)) {
            $imageQuery = ", image = '$image'";
        } else {
            $error = "Failed to upload image.";
        }
    }

    $sql = "UPDATE posts SET title = '$title', category = '$category', description = '$description', variety = '$variety' $imageQuery WHERE id = '$id'";

    if (mysqli_query($conn, $sql)) {
        header('Location: manage_product.php');
        exit();
    } else {
        $error = "Error updating product: " . mysqli_error($conn);
    }
}

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Edit Product</title>
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;600&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="css/admin.css">
</head>
<body>

    <div class="container">
        <h1>Edit Product</h1>

        <?php if (isset($error)): ?>
            <div class="alert"><?= $error ?></div>
        <?php endif; ?>

        <form action="edit_product.php?id=<?= $id ?>" method="POST" enctype="multipart/form-data">
            <div class="form-group">
                <label for="title">Product Title:</label>
                <input type="text" id="title" name="title" value="<?= htmlspecialchars($product['title']) ?>" required>
            </div>

            <div class="form-group">
                <label for="category">Category:</label>
                <select id="category" name="category" required>
                    <option value="Furnitures" <?= $product['category'] == 'Furnitures' ? 'selected' : '' ?>>Furnitures</option>
                    <option value="Decorations" <?= $product['category'] == 'Decorations' ? 'selected' : '' ?>>Decorations</option>
                    <option value="Accessories" <?= $product['category'] == 'Accessories' ? 'selected' : '' ?>>Accessories</option>
                </select>
            </div>

            <div class="form-group">
                <label for="variety">Variety:</label>
                <input type="text" id="variety" name="variety" value="<?= htmlspecialchars($product['variety']) ?>" required>
            </div>

            <div class="form-group">
                <label for="description">Description:</label>
                <textarea id="description" name="description" rows="5" required><?= htmlspecialchars($product['description']) ?></textarea>
            </div>

            <div class="form-group">
                <label for="image">Product Image:</label>
                <input type="file" id="image" name="image" accept="image/*">
                <img src="uploads/<?= htmlspecialchars($product['image']) ?>" alt="Current Image" width="100">
            </div>

            <button type="submit">Update Product</button>
            <a href="manage_product.php" class="btn">Back to Manage Products</a>
        </form>
    </div>

</body>
</html>
