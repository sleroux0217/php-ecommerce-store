<?php

include('../server/connection.php');

if(isset($_POST['create_product'])){
    // Extracting product details from the form
    $product_name = $_POST['name'];
    $product_description = $_POST['description'];
    $product_price = $_POST['price'];
    $product_special_offer = $_POST['offer'];
    $product_category = $_POST['category'];
    $product_color = $_POST['color'];

    // Validating and moving uploaded images
    $imageNames = [];
    $uploadErrors = [];
    for ($i = 1; $i <= 4; $i++) {
        $imageKey = 'image' . $i;
        if(isset($_FILES[$imageKey]) && $_FILES[$imageKey]['error'] === UPLOAD_ERR_OK){
            $tmpName = $_FILES[$imageKey]['tmp_name'];
            $imageName = $product_name . $i . ".jpeg";
            $destination = "../assets/images/products/" . $imageName;
            if(move_uploaded_file($tmpName, $destination)){
                $imageNames[] = $imageName;
            }else{
                $uploadErrors[] = "Failed to upload $imageKey";
            }
        }else{
            $uploadErrors[] = "No file uploaded for $imageKey";
        }
    }

    // Checking for upload errors
    if(!empty($uploadErrors)){
        header('location: products.php?product_failed=' . urlencode(implode(', ', $uploadErrors)));
        exit();
    }

    // Inserting product into database
    $stmt = $conn->prepare("INSERT INTO products (product_name, product_description, product_price, product_special_offer,
                                                  product_image, product_image2, product_image3, product_image4,
                                                  product_category, product_color)
                            VALUES (?, ?, ?, ?, ?, ?, ?, ?, ?, ?)");

    // Binding parameters
    $stmt->bind_param('ssssssssss', $product_name, $product_description, $product_price, $product_special_offer,
                                 $imageNames[0], $imageNames[1], $imageNames[2], $imageNames[3],
                                 $product_category, $product_color);

    // Executing the statement
    if($stmt->execute()){
        header('location: products.php?product_created=Product has been created successfully');
        exit();
    }else{
        header('location: products.php?product_failed=Error occurred while creating the product');
        exit();
    }
}

?>