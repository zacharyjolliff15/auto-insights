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


    <div class="vehicle-details-section">
        <div class="input-section">
            <h2>Enter your vehicle specifications below</h2>
            
            <div class="vehicle-dets">
            <label for="brand">Vehicle Brand:</label>
                <form id="formBrand" action="process_form_brand.php" method="POST">
                 <input type="text" id="sentence" name="sentence" required>
                
                  </form>
                  </div>

            <div class="vehicle-dets">
            <label for="brand">Vehicle Model:</label>
                <form id="formModel" action="process_form_model.php" method="POST">
                <input type="text" id="sentence" name="sentence" required>
              
                </form>
            </div>

            <div class="vehicle-dets">
            <label for="brand">Vehicle Year:</label>
                <form action="process_form_year.php" method="POST">
                <input type="text" id="sentence" name="sentence" required>
                <button type="submit">Submit</button>
                </form>
            </div>

            <div class="vehicle-dets">
            <label for="brand">Vehicle Price:</label>
                <form action="process_form_price.php" method="POST">
                <input type="text" id="sentence" name="sentence" required>
                <button type="submit">Submit</button>
                </form>
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
                <form action="process_form_rating.php" method="POST">
                <input type="text" id="sentence" name="sentence" required>
                <button type="submit">Submit</button>
                </form>
                    </div>
                </div>
            </div>

            <button type="button" class="sub_btn" onclick="submitAllForms()">Submit Review</button>
        </div>
    </div>
</form>
</body>


<footer id="Website-footer">
<span id="footer-text">
    Copyright of Auto Insights &copy; 2023</span    >
</footer>
<script>
    async function submitAllForms() {
        const formBrand = document.getElementById('formBrand');
        const formModel = document.getElementById('formModel');
        const formReview = document.getElementById('formReview');
        const formRating = document.getElementById('formRating');

        // Submit formBrand asynchronously
        await fetch(formBrand.action, {
            method: formBrand.method,
            headers: { "Content-type": "application/x-www-form-urlencoded" },
            body: new URLSearchParams(new FormData(formBrand))
        });

        // Submit formModel asynchronously
        await fetch(formModel.action, {
            method: formModel.method,
            headers: { "Content-type": "application/x-www-form-urlencoded" },
            body: new URLSearchParams(new FormData(formModel))
        });

        // Submit other forms as needed...

        // Submit formReview asynchronously
        await fetch(formReview.action, {
            method: formReview.method,
            headers: { "Content-type": "application/x-www-form-urlencoded" },
            body: new URLSearchParams(new FormData(formReview))
        });

        // Submit formRating asynchronously
        await fetch(formRating.action, {
            method: formRating.method,
            headers: { "Content-type": "application/x-www-form-urlencoded" },
            body: new URLSearchParams(new FormData(formRating))
        });

        // Optionally, you can perform additional actions after all forms are submitted.
        console.log("All forms submitted successfully!");
    }
</script>
</body>
</html>
