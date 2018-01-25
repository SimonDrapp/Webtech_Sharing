View file @ 7fec5c65

<!DOCTYPE html>

<html lang="en">

<head>

    <meta charset="UTF-8">

    <title>Amazon S3 File Upload Example</title>

</head>

<body>



<h1>File Upload Form</h1>



<form action="/upload" method="post" enctype="multipart/form-data">

    {{ csrf_field() }}

    Select image to upload:

    <input type="file" name="fileToUpload" id="fileToUpload">

    <input type="submit" value="Upload Image" name="submit">

</form>



</body>

</html>
