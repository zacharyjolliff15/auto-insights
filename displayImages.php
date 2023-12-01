<?php
$imageFolder = 'uploads/';
$allowedExtensions = array('jpg', 'jpeg', 'png');

// Get all files in the folder
$files = scandir($imageFolder);

// Filter out non-image files based on allowed extensions
$imageFiles = array_filter($files, function($file) use ($allowedExtensions) {
    $fileExtension = pathinfo($file, PATHINFO_EXTENSION);
    return in_array(strtolower($fileExtension), $allowedExtensions);
});

// Display images
foreach ($imageFiles as $imageFile) {
    echo "<img src='$imageFolder$imageFile' alt='Image'>";
}
?>
<!-- this needs to exist inside of where the user reviews will live -->