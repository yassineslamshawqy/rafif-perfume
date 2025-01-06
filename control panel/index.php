<?php
// Database connection
$host = "localhost";
$username = "root";
$password = "";
$dbname = "rafif";
$connect_db = mysqli_connect($host, $username, $password, $dbname);

// Check connection
if (!$connect_db) {
    die("Connection failed: " . mysqli_connect_error());
}

// Handle form submission
if (isset($_POST['upload'])) {
    // Sanitize inputs
    $name = trim($_POST['pro-name']);
    $price = trim($_POST['pri-name']);
    
    // Validate inputs
    if (empty($name) || empty($price) || !is_numeric($price)) {
        echo "<p>Please provide a valid product name and price.</p>";
    } else {
        // Handle file upload
        $file = $_FILES['file'];
        $allowedTypes = ['image/jpeg', 'image/png', 'image/gif'];
        
        // Check for upload errors
        if ($file['error'] !== UPLOAD_ERR_OK) {
            echo "<p>Error uploading file.</p>";
        } elseif (!in_array($file['type'], $allowedTypes)) {
            echo "<p>Invalid file type. Only JPG, PNG, and GIF are allowed.</p>";
        } else {
            // Define upload directory and file path
            $uploadDir = 'img/'; // Ensure this directory exists and is writable
            $imageName = basename($file['name']);
            $imagePath = $uploadDir . $imageName;

            // Move uploaded file to the target directory
            if (move_uploaded_file($file['tmp_name'], $imagePath)) {
                // Prepare and execute the SQL statement
                $stmt = $connect_db->prepare("INSERT INTO orders (added, image, price_add) VALUES (?, ?, ?)");
                $stmt->bind_param("ssi", $name, $imagePath, $price);

                if ($stmt->execute()) {
                    echo "<p>Thanks for adding the product!</p>";
                } else {
                    echo "<p>There was a system problem: " . $stmt->error . "</p>";
                }

                // Close the statement
                $stmt->close();
            } else {
                echo "<p>Failed to move uploaded file.</p>";
            }
        }
    }
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Product Control Panel - Rafif Perfumes</title>
    <link rel="stylesheet" href="styles.css"> <!-- Optional: Link to your CSS -->
</head>
<body>
    <form action="../main.php" method="post" enctype="multipart/form-data">
        <h1>Rafif Perfumes - Product Control Panel</h1>
        <br>
        <input type="text" name="pro-name" class="inputs" placeholder="Product name..." required>
        <br><br>
        <input type="text" name="pri-name" class="inputs" placeholder="Price..." required>
        <br>
        <input type="file" name="file" required>
        <br><br>
        <button type="submit" name="upload">Upload</button>
        <a href="../product/product.php">See All Products</a>
    </form>
</body>
</html>