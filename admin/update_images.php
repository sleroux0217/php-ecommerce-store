<?php

include('../server/connection.php');

if (isset($_POST['update_images'])) {

    $product_name = $_POST['product_name'];
    $product_id = $_POST['product_id'];

    // Check if all required files are uploaded
    if (
        isset($_FILES['image1']) && $_FILES['image1']['error'] === UPLOAD_ERR_OK &&
        isset($_FILES['image2']) && $_FILES['image2']['error'] === UPLOAD_ERR_OK &&
        isset($_FILES['image3']) && $_FILES['image3']['error'] === UPLOAD_ERR_OK &&
        isset($_FILES['image4']) && $_FILES['image4']['error'] === UPLOAD_ERR_OK
    ) {
        $image1 = $_FILES['image1']['tmp_name'];
        $image2 = $_FILES['image2']['tmp_name'];
        $image3 = $_FILES['image3']['tmp_name'];
        $image4 = $_FILES['image4']['tmp_name'];

        // Generate unique image names
        $image_name1 = $product_name . "1.jpeg";
        $image_name2 = $product_name . "2.jpeg";
        $image_name3 = $product_name . "3.jpeg";
        $image_name4 = $product_name . "4.jpeg";

        // Move uploaded files to the destination folder
        if (
            move_uploaded_file($image1, "../assets/images/products/" . $image_name1) &&
            move_uploaded_file($image2, "../assets/images/products/" . $image_name2) &&
            move_uploaded_file($image3, "../assets/images/products/" . $image_name3) &&
            move_uploaded_file($image4, "../assets/images/products/" . $image_name4)
        ) {
            // Update the database with new image names
            $stmt = $conn->prepare("UPDATE products SET product_image=?, product_image2=?, product_image3=?, product_image4=? WHERE product_id=?");
            $stmt->bind_param('ssssi', $image_name1, $image_name2, $image_name3, $image_name4, $product_id);

            if ($stmt->execute()) {
                header('location: products.php?images_updated=Images have been updated successfully');
                exit(); // Always exit after header redirects
            } else {
                header('location: products.php?images_failed=Error occurred while updating images');
                exit(); // Always exit after header redirects
            }
        } else {
            header('location: products.php?images_failed=Failed to move uploaded images');
            exit(); // Always exit after header redirects
        }
    } else {
        header('location: products.php?images_failed=One or more images failed to upload');
        exit(); // Always exit after header redirects
    }
}
?>