<?php
$host = "localhost";
$username = "root";
$password = "";
$dbname = "rafif";
$connect_db = mysqli_connect($host,$username,$password,$dbname);
if (isset($_POST['submit'])) {
    $EMAIL = $_POST['email'];
    $UNAME = $_POST['uname'];
    $stmt = $connect_db->prepare("INSERT INTO `contacts` (`email`, `username`) VALUES (?,?)");
    $stmt->bind_param("ss", $EMAIL, $UNAME);
    $stmt->execute();

    if ($stmt->affected_rows > 0) {
        echo "<br> The data has been sent";
    } else {
        echo "There was a system problem";
    }
}
if (isset($_POST['f-ml'])) {
    $SIZE = '50ml';
    $insert = "INSERT INTO `orders` (`size`) VALUE ('$SIZE')";
    if(mysqli_query($connect_db,$insert)) {
        echo "<br> thanks for buy from us";
    }
    else{
        echo "it a system problem";
    }
    header('Location:./products/savauge.php');
    exit;
}
if (isset($_POST['kh-ml'])) {
    $SIZE = 'khomra 100ml';
    $insert = "INSERT INTO `orders` (`size`) VALUE ('$SIZE')";
    if(mysqli_query($connect_db,$insert)) {
        echo "<br> thanks for buy from us";
    }
    else{
        echo "it a system problem";
    }
    header('Location:./products/khomra.php');
    exit;
}
if (isset($_POST['fg-ml'])) {
    $SIZE = 'khomra 30ml';
    $insert = "INSERT INTO `orders` (`size`) VALUE ('$SIZE')";
    if(mysqli_query($connect_db,$insert)) {
        echo "<br> thanks for buy from us";
    }
    else{
        echo "it a system problem";
    }
    header('Location:./products/khomra.php');
    exit;
}
if (isset($_POST['lol-ml'])) {
    $SIZE = 'khomra 50ml';
    $insert = "INSERT INTO `orders` (`size`) VALUE ('$SIZE')";
    if(mysqli_query($connect_db,$insert)) {
        echo "<br> thanks for buy from us";
    }
    else{
        echo "it a system problem";
    }
    header('Location:./products/khomra.php');
    exit;
}
if (isset($_POST['t-ml'])) {
    $SIZE = '30ml';
    $insert = "INSERT INTO `orders` (`size`) VALUE ('$SIZE')";
    if(mysqli_query($connect_db,$insert)) {
        echo "<br> thanks for buy from us";
    }
    else{
        echo "it a system problem";
    }
    header('Location:./products/bakarat roj.php');
    exit;
}
if (isset($_POST['n-ml'])) {
    $SIZE = '100ml';
    $insert = "INSERT INTO `orders` (`size`) VALUE ('$SIZE')";
    if(mysqli_query($connect_db,$insert)) {
        echo "<br> thanks for buy from us";
    }
    else{
        echo "it a system problem";
    }
    header('Location:./products/bakarat roj.php');
    exit;
}
if (isset($_POST['h-ml'])) {
    $SIZE = '100ml';
    $insert = "INSERT INTO `orders` (`size`) VALUE ('$SIZE')";
    if(mysqli_query($connect_db,$insert)) {
        echo "<br> thanks for buy from us";
    }
    else{
        echo "it a system problem";
    }
    header('Location:./products/savauge.php');
    exit;
}
if (isset($_POST['z-ml'])) {
    $SIZE = '50ml';
    $insert = "INSERT INTO `orders` (`size`) VALUE ('$SIZE')";
    if(mysqli_query($connect_db,$insert)) {
        echo "<br> thanks for buy from us";
    }
    else{
        echo "it a system problem";
    }
    header('Location:./products/zara.php');
    exit;
}
if (isset($_POST['j-ml'])) {
    $SIZE = '100ml';
    $insert = "INSERT INTO `orders` (`size`) VALUE ('$SIZE')";
    if(mysqli_query($connect_db,$insert)) {
        echo "<br> thanks for buy from us";
    }
    else{
        echo "it a system problem";
    }
    header('Location:./products/zara.php');
    exit;
}
if (isset($_POST['yy-ml'])) {
    $SIZE = '100ml';
    $insert = "INSERT INTO `orders` (`size`) VALUE ('$SIZE')";
    if(mysqli_query($connect_db,$insert)) {
        echo "<br> thanks for buy from us";
    }
    else{
        echo "it a system problem";
    }
    header('Location:./products/hugo.php');
    exit;
}
if (isset($_POST['th-ml'])) {
    $SIZEw = '30ml';
    $insert = "INSERT INTO `orders` (`size`) VALUE ('$SIZEw')";
    if(mysqli_query($connect_db,$insert)) {
        echo "<br> thanks for buy from us";
    }
    else{
        echo "it a system problem";
    }
    header('Location:./products/guess.php');
    exit;
}
if (isset($_POST['nm-ml'])) {
    $SIZE = '100ml';
    $insert = "INSERT INTO `orders` (`size`) VALUE ('$SIZE')";
    if(mysqli_query($connect_db,$insert)) {
        echo "<br> thanks for buy from us";
    }
    else{
        echo "it a system problem";
    }
    header('Location:./products/guess.php');
    exit;
}
if (isset($_POST['mr-ml'])) {
    $SIZE = '150ml';
    $insert = "INSERT INTO `orders` (`size`) VALUE ('$SIZE')";
    if(mysqli_query($connect_db,$insert)) {
        echo "<br> thanks for buy from us";
    }
    else{
        echo "it a system problem";
    }
    header('Location:./products/mr burberry.php');
    exit;
}
if (isset($_POST['br-ml'])) {
    $SIZE = '100ml';
    $insert = "INSERT INTO `orders` (`size`) VALUE ('$SIZE')";
    if(mysqli_query($connect_db,$insert)) {
        echo "<br> thanks for buy from us";
    }
    else{
        echo "it a system problem";
    }
    header('Location:./products/mr burberry.php');
    exit;
}
if (isset($_POST['vr-ml'])) {
    $SIZE = '200ml';
    $insert = "INSERT INTO `orders` (`size`) VALUE ('$SIZE')";
    if(mysqli_query($connect_db,$insert)) {
        echo "<br> thanks for buy from us";
    }
    else{
        echo "it a system problem";
    }
    header('Location:./products/mr burberry.php');
    exit;
}
if (isset($_POST['tw-ml'])) {
    $SIZE = '125ml';
    $insert = "INSERT INTO `orders` (`size`) VALUE ('$SIZE')";
    if(mysqli_query($connect_db,$insert)) {
        echo "<br> thanks for buy from us";
    }
    else{
        echo "it a system problem";
    }
    header('Location:./products/santa royal.php');
    exit;
}
if (isset($_POST['nh-ml'])) {
    $SIZE = '100ml';
    $insert = "INSERT INTO `orders` (`size`) VALUE ('$SIZE')";
    if(mysqli_query($connect_db,$insert)) {
        echo "<br> thanks for buy from us";
    }
    else{
        echo "it a system problem";
    }
    header('Location:./products/nishane.php');
    exit;
}
if (isset($_POST['ver-ml'])) {
    $SIZE = '100ml';
    $insert = "INSERT INTO `orders` (`size`) VALUE ('$SIZE')";
    if(mysqli_query($connect_db,$insert)) {
        echo "<br> thanks for buy from us";
    }
    else{
        echo "it a system problem";
    }
    header('Location:./products/versace.php');
    exit;
}
if (isset($_POST['ver-mt'])) {
    $SIZE = '50ml';
    $insert = "INSERT INTO `orders` (`size`) VALUE ('$SIZE')";
    if(mysqli_query($connect_db,$insert)) {
        echo "<br> thanks for buy from us";
    }
    else{
        echo "it a system problem";
    }
    header('Location:./products/versace.php');
    exit;
}
if (isset($_POST['a-ml'])) {
    $SIZE = '50ml';
    $insert = "INSERT INTO `orders` (`size`) VALUE ('$SIZE')";
    if(mysqli_query($connect_db,$insert)) {
        echo "<br> thanks for buy from us";
    }
    else{
        echo "it a system problem";
    }
    header('Location:./products/angel share.php');
    exit;
}
if (isset($_POST['i-ml'])) {
    $SIZE = '100ml';
    $insert = "INSERT INTO `orders` (`size`) VALUE ('$SIZE')";
    if(mysqli_query($connect_db,$insert)) {
        echo "<br> thanks for buy from us";
    }
    else{
        echo "it a system problem";
    }
    header('Location:./products/angel share.php');
    exit;
}
if (isset($_POST['order-s'])) {
    $p_name = 'order(savauge)';
    $insert = "INSERT INTO `orders` (`perfumename`) VALUE ('$p_name')";
    if(mysqli_query($connect_db,$insert)) {
        echo "<br> thanks for buy from us";
    }
    else{
        echo "it a system problem";
    }
    header('Location:./products/order.php');
    exit;
}
if (isset($_POST['order-z'])) {
    $z_name = 'order(zara ruby syrup)';
    $insert = "INSERT INTO `orders` (`perfumename`) VALUE ('$z_name')";
    if(mysqli_query($connect_db,$insert)) {
        echo "<br> thanks for buy from us";
    }
    else{
        echo "it a system problem";
    }
    header('Location:./products/order.php');
    exit;
}
// order details sending
if (isset($_POST['sent'])) {
    $address = $_POST['address'];
    $phoneNumber = $_POST['phone'];

    // Check if the input fields are not empty
    if (!empty($address) && !empty($phoneNumber)) {
        // Use prepared statements to prevent SQL injection
        $stmt = $connect_db->prepare("INSERT INTO `orders` (`address`, `phonenumber`) VALUES (?,?)");
        $stmt->bind_param("ss", $address, $phoneNumber);

        if ($stmt->execute()) {
            echo "<br> Thanks for buying from us";
            header('Location:index.php');
            exit;
        } else {
            echo "There was a system problem: ". $stmt->error;
        }
    } else {
        echo "Please fill in all the required fields";
    }
} else {
    echo "Invalid request";
}
if (isset($_POST['order-ba'])) {
    $pe_name = 'order(bakarat roj)';
    $insert = "INSERT INTO `orders` (`perfumename`) VALUE ('$pe_name')";
    if(mysqli_query($connect_db,$insert)) {
        echo "<br> thanks for buy from us";
        header('Location:./products/order.php');
        exit;
    }
    else{
        echo "it a system problem";
    }
}
//versace eros
if (isset($_POST['order-ver'])) {
    $fpe_name = 'order(versace eros 50ml)';
    $insert = "INSERT INTO `orders` (`perfumename`) VALUE ('$fpe_name')";
    if(mysqli_query($connect_db,$insert)) {
        echo "<br> thanks for buy from us";
        header('Location:./products/order.php');
        exit;
    }
    else{
        echo "it a system problem";
    }
}
// angel share
if (isset($_POST['order-an'])) {
    $pr_name = 'order(angel share)';
    $insert = "INSERT INTO `orders` (`perfumename`) VALUE ('$pr_name')";
    if(mysqli_query($connect_db,$insert)) {
        echo "<br> thanks for buy from us";
        header('Location:./products/order.php');
        exit;
    }
    else{
        echo "it a system problem";
    }
}
//order hugo
if (isset($_POST['order-hu'])) {
    $phy_name = 'order(hugo 100ml)';
    $insert = "INSERT INTO `orders` (`perfumename`) VALUE ('$phy_name')";
    if(mysqli_query($connect_db,$insert)) {
        echo "<br> thanks for buy from us";
        header('Location:./products/order.php');
        exit;
    }
    else{
        echo "it a system problem";
    }
}
// order mr berberry
if (isset($_POST['order-br'])) {
    $phy_name = 'order(mr burberry)';
    $insert = "INSERT INTO `orders` (`perfumename`) VALUE ('$phy_name')";
    if(mysqli_query($connect_db,$insert)) {
        echo "<br> thanks for buy from us";
        header('Location:./products/order.php');
        exit;
    }
    else{
        echo "it a system problem";
    }
}
// order guess
if (isset($_POST['order-th'])) {
    $pmee_name = 'order(guess)';
    $insert = "INSERT INTO `orders` (`perfumename`) VALUE ('$pmee_name')";
    if(mysqli_query($connect_db,$insert)) {
        echo "<br> thanks for buy from us";
        header('Location:./products/order.php');
        exit;
    }
    else{
        echo "it a system problem";
    }
}
//order santa
if (isset($_POST['order-sa'])) {
    $pee_name = 'order(santa royal)';
    $insert = "INSERT INTO `orders` (`perfumename`) VALUE ('$pee_name')";
    if(mysqli_query($connect_db,$insert)) {
        echo "<br> thanks for buy from us";
        header('Location:./products/order.php');
        exit;
    }
    else{
        echo "it a system problem";
    }
}
//order nishane
if (isset($_POST['order-nh'])) {
    $psee_name = 'order(nishane ini)';
    $insert = "INSERT INTO `orders` (`perfumename`) VALUE ('$psee_name')";
    if(mysqli_query($connect_db,$insert)) {
        echo "<br> thanks for buy from us";
        header('Location:./products/order.php');
        exit;
    }
    else{
        echo "it a system problem";
    }
}

if (isset($_POST['upload'])) {
    // Sanitize inputs
    $name = trim($_POST['pro-name']);
    $price = trim($_POST['pri-name']);
    
    // Validate inputs
    $errors = [];
    if (empty($name)) {
        $errors[] = "Product name cannot be empty.";
    }
    if (empty($price) || !is_numeric($price) || $price <= 0) {
        $errors[] = "Please provide a valid price greater than zero.";
    }

    // Handle file upload
    $file = $_FILES['file'];
    $allowedTypes = ['image/jpeg', 'image/png', 'image/gif'];

    // Check for upload errors
    if ($file['error'] !== UPLOAD_ERR_OK) {
        $errors[] = "Error uploading file: " . $file['error'];
    } elseif (!in_array($file['type'], $allowedTypes)) {
        $errors[] = "Invalid file type. Only JPG, PNG, and GIF are allowed.";
    }

    // If there are errors, display them
    if (!empty($errors)) {
        foreach ($errors as $error) {
            echo "<p>$error</p>";
        }
    } else {
        // Define upload directory and file path
        $uploadDir = 'img/'; // Ensure this directory exists and is writable
        if (!is_dir($uploadDir)) {
            mkdir($uploadDir, 0755, true); // Create the directory if it doesn't exist
        }

        // Generate a unique file name to prevent overwriting
        $imageName = uniqid() . '-' . basename($file['name']);
        $imagePath = $uploadDir . $imageName;

        // Move uploaded file to the target directory
        if (move_uploaded_file($file['tmp_name'], $imagePath)) {
            // Prepare and execute the SQL statement
            $stmt = $connect_db->prepare("INSERT INTO orders (added, image) VALUES (?, ?)");
            $stmt->bind_param("ssi", $name, $imagePath);

            if ($stmt->execute()) {
                echo "<p>Thanks for adding the product!</p>";
            } else {
                echo "<p>There was a system problem: " . htmlspecialchars($stmt->error) . "</p>";
            }

            // Close the statement
            $stmt->close();
        } else {
            echo "<p>Failed to move uploaded file. Please check directory permissions.</p>";
        }
    }
}
?>