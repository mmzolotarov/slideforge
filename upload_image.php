<?php

// Check if a file was uploaded
if (isset($_FILES['image'])) {
  $image = $_FILES['image'];

  // Move the uploaded file to the images folder
  $uploadPath = 'images/' . uniqid() . '.jpg';
  move_uploaded_file($image['tmp_name'], $uploadPath);

  // Respond with the uploaded file path
  echo $uploadPath;
} else {
  // No file was uploaded
  http_response_code(400);
  echo 'No image file was uploaded.';
}
