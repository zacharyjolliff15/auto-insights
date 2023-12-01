<?php
$reviewsDir = 'reviews/';

// Check if the directory exists
if (file_exists($reviewsDir)) {
    // Get all files in the directory
    $files = scandir($reviewsDir);

    // Display each review
    foreach ($files as $file) {
        if ($file !== '.' && $file !== '..') {
            $filePath = $reviewsDir . $file;
            $review = file_get_contents($filePath);

            echo "<p><strong>Review:</strong> $review</p>";
        }
    }
} else {
    echo "No reviews found.";
}
?>
