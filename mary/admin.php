<?php
include('config.php');

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $title = $_POST['title'];
    $category = $_POST['category'];
    $description = $_POST['description'];
    $variety = $_POST['variety'];

    $image = $_FILES['image']['name'];
    $target = "uploads/" . basename($image);

    if (move_uploaded_file($_FILES['image']['tmp_name'], $target)) {
        $sql = "INSERT INTO posts (title, category, image, description, variety) VALUES ('$title', '$category', '$image', '$description', '$variety')";
        
        if (mysqli_query($conn, $sql)) {
            echo "New product added successfully";
        } else {
            echo "Error: " . $sql . "<br>" . mysqli_error($conn);
        }
    } else {
        echo "Failed to upload image.";
    }
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Add New Product</title>
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;600&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="css\admin.css">
</head>
<body>

    <div class="container">
        <h1>Add New Product</h1>

        <?php if (isset($error)): ?>
            <div class="alert"><?= $error ?></div>
        <?php elseif (isset($success)): ?>
            <div class="alert success"><?= $success ?></div>
        <?php endif; ?>

        <form action="admin.php" method="POST" enctype="multipart/form-data">
            <div class="form-group">
                <label for="title">Product Title:</label>
                <input type="text" id="title" name="title" required>
            </div>

            <div class="form-group">
                <label for="category">Category:</label>
                <select id="category" name="category" required>
                    <option value="">Select Category</option>
                    <option value="Furnitures">Furnitures</option>
                    <option value="Decorations">Decorations</option>
                    <option value="Accessories">Accessories</option>
                </select>
            </div>

            <div class="form-group">
                <label for="variety">Variety:</label>
                <input type="text" id="variety" name="variety" required>
            </div>
            
            <div class="form-group">
                <label for="description">Description:</label>
                <textarea id="description" name="description" rows="5" required></textarea>
            </div>

            <div class="form-group">
                <label for="image">Product Image:</label>
                <input type="file" id="image" name="image" accept="image/*" required>
            </div>

            <button type="submit">Add Product</button>
            <a href="manage_product.php" class="btn">Manage Products</a>

        </form>
    </div>

</body>
</html>