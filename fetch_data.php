<?php
include "db_connect.php";
// Function to sanitize input data
// Add these lines at the beginning of fetch_data.php
echo "<pre>";
print_r($_POST);
echo "</pre>";

function sanitizeInput($data) {
    global $conn;
    return mysqli_real_escape_string($conn, htmlspecialchars(trim($data)));
}

// Check if the form is submitted
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Process each card item
    for ($i = 1; $i <= 16; $i++) {
        // Assuming your form has inputs like rating, image_path, item_name, description, and price
        $rating = sanitizeInput($_POST["rating"][$i]);
        $imagePath = sanitizeInput($_POST["image_path"][$i]);
        $itemName = sanitizeInput($_POST["item_name"][$i]);
        $description = sanitizeInput($_POST["description"][$i]);
        $price = sanitizeInput($_POST["price"][$i]);
        $category = sanitizeInput($_POST["category"][$i]); // You need to add an input for category in your HTML

        echo "Category: $category<br>";
        // Insert data into the respective database table
        $sql = "INSERT INTO $category (item_name, image, description, price,rating) VALUES ('$itemName', '$imagePath', '$description', '$price', '$rating')";

        if ($conn->query($sql) === TRUE) {
            echo "Record for $itemName added successfully!";
        } else {
            echo "Error: " . $sql . "<br>" . $conn->error;
        }
    }

    // Close the database connection
    $conn->close();
}
?>

