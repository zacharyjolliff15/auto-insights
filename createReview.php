<!DOCTYPE html>
<html>
<head>
    <title>Create a New Review</title>
    <link rel="stylesheet" type="text/css" href="css/createReview.css">
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
</head>
<body class="Create_rev_body">
<div class="header">
    <div>
      <img class="logo" src="images/autoInsights.png" alt="Logo">
    </div>
    <div>
      <h1>Auto Insights</h1>
    </div>
    <div>
        <a class="logout-button" href="index.php">Log Out</a>
    </div>
</div>

<form action="upload.php" method="POST" enctype="multipart/form-data">
    <div class="vehicle-details-section">
        <div class="input-section">
            <h2>Enter your vehicle specifications below</h2>
            <div class="vehicle-dets">
                <label for="brand">Vehicle Brand:</label>
                <input type="text" id="brand" name="brand" placeholder="Enter brand">
            </div>

            <div class="vehicle-dets">
                <label for="model">Vehicle Model:</label>
                <input type="text" id="model" name="model" placeholder="Enter model">
            </div>

            <div class="vehicle-dets">
                <label for="year">Vehicle  Year: </label>
                <input type="text" id="year" name="year" placeholder="Enter model year">
            </div>

            <div class="vehicle-dets">
                <label for="price">Vehicle Price:</label>
                <input type="text" id="price" name="price" placeholder="Enter price">
            </div>

            <div class="upload-section">
                <h2>Upload Picture</h2>
                <form action="upload.php" method="POST" enctype="multipart/form-data">
                <input type="file" id="image" name="file">
                <button type="submit" name="submit">UPLOAD</button>
  
</form>
            </div>

            <div class="review-text-section">
                <div class="review-text">
                <form action="process_form.php" method="POST">
                <label for="review">Enter Your Review Text:</label>
      
        <input type="text" id="sentence" name="sentence" required>
        <button type="submit">Submit</button>
                     </form>
                </div>

                <div class="rating-section">
                    <h2>Vehicle Rating (1-10)</h2>
                    <div class="vehicle-dets">
                        <label for="rating">Vehicle Rating:</label>
                        <input type="number" id="rating" name="rating" min="1" max="10" placeholder="Enter Rating">
                    </div>
                </div>
            </div>

            <!-- <button type="button" class="sub_btn" onclick="submitForm()">Submit Review</button> -->
        </div>
    </div>
</form>
</body>


<footer id="Website-footer">
<span id="footer-text">
    Copyright of Auto Insights &copy; 2023</span    >
</footer>


</body>
</html>
