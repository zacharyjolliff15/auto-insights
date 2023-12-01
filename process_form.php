<?php
// Directory to store the reviews
$reviewsDir = 'reviews/';

// Ensure the directory exists, create it if not
if (!file_exists($reviewsDir)) {
    mkdir($reviewsDir, 0777, true);
}

// Handle form submission
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Retrieve the sentence from the form
    $sentence = $_POST["sentence"];

    // Generate a unique filename based on timestamp
    $filename = $reviewsDir . 'review_' . time() . '.txt';

    // Write the sentence to the file
    file_put_contents($filename, $sentence);

    echo "Review successfully stored in the file: $filename";
}
?>
