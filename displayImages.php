<?php
$imageFolder = 'uploads/';
$allowedExtensions = array('jpg', 'jpeg', 'png');

// Print the name of the image folder
echo "Image Folder: $imageFolder<br>";

// Get all files in the folder
$files = scandir($imageFolder);

// Print the list of files in the folder (for debugging)
echo "All Files: " . implode(', ', $files) . "<br>";

// Filter out non-image files based on allowed extensions
$imageFiles = array_filter($files, function($file) use ($allowedExtensions) {
    $fileExtension = pathinfo($file, PATHINFO_EXTENSION);
    return in_array(strtolower($fileExtension), $allowedExtensions);
});

// Print the list of image files (for debugging)
echo "Image Files: " . implode(', ', $imageFiles) . "<br>";

// Display only one image if available
if (!empty($imageFiles)) {
    // You can change the index to display a different image
    $selectedImage = $imageFiles[2]; //BC GIT INDEX STARTS AT 2 just ACCEPT IT 

    echo "<img src='$imageFolder$selectedImage' alt='Image'>";
} else {
    echo "No images found.";
}
?>
