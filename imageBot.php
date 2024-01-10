<?php
// error_reporting(E_ALL);
// ini_set('display_errors', 1);

require 'conn.php';

$sql = "SELECT data FROM images WHERE id = 3";
$result = $conn->query($sql);

if ($result && $result->num_rows > 0) {
    $row = $result->fetch_assoc();

    // Set appropriate headers for an image
    header("Content-Type: images/jpeg");
     // Change the content type based on your image format

   
    header("Content-Disposition: inline; filename=image.jpg");
    header("Content-Length: " . strlen($row['data']));

    // Output the image data
    echo $row['data'];
} else {
    echo "Image not found";
}

$conn->close();
?>