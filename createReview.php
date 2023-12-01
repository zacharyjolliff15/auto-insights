<!DOCTYPE html>
<html>
<head>
    <title></title>
</head>
<body>
<form action="upload.php" method="POST" enctype="multipart/form-data">
    <input type="file" id="image" name="file">
    <button type="submit" name="submit">UPLOAD</button>
</form>
<form action="process_form.php" method="POST">
        <label for="sentence">Enter your sentence:</label>
        <input type="text" id="sentence" name="sentence" required>
        <button type="submit">Submit</button>
    </form>


</body>
</html>
