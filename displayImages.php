<?php
// Directory to store the reviews
$imageFolder = 'uploads/';

// Ensure the directory exists, create it if not
if (!file_exists($imageFolder)) {
    mkdir($imageFolder, 0777, true);
}

// Function to display a specific image from the 'uploads/' folder
function displayImage($index) {
    global $imageFolder;


    $allowedExtensions = array('jpg', 'jpeg', 'png');

    // Get all files in the folder
    $files = scandir($imageFolder);

    // Filter out non-image files based on allowed extensions
    $imageFiles = array_filter($files, function($file) use ($allowedExtensions) {
        $fileExtension = pathinfo($file, PATHINFO_EXTENSION);
        return in_array(strtolower($fileExtension), $allowedExtensions);
    });

    // Display the specified image if available
    if (!empty($imageFiles) && isset($imageFiles[$index])) {
        $selectedImage = $imageFiles[$index];
        echo "<img src='$imageFolder$selectedImage' alt='Image'>";
    } else {
        echo "Image not found.";
    }
}

// Check if the 'index' query parameter is set
if (isset($_GET['index'])) {
    $index = intval($_GET['index']); // Convert to integer for security
    displayImage($index);
} else {
    echo "Invalid request. Please specify the 'index' parameter.";
}
?>
