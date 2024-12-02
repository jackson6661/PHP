<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content='width=device-width, initial-scale=1.0'>
    <title>Web-page</title>
</head>

<body>
    <?php
        echo 'Name - ' . $_FILES['filename']['name'] . '<br>';
        echo 'Size - ' . $_FILES['filename']['size'] . '<br>';
        echo 'Type - ' . $_FILES['filename']['type'] . '<br>';
        echo 'Temporary file - ' . $_FILES['filename']['tmp_name'] . '<br>';

            if(move_uploaded_file($_FILES['filename']['tmp_name'], 'temp\\'.$_FILES['filename']['name'])) {
                echo 'File successfully uploaded!';
            } else {
                echo 'There was an error uploading your file!';
            }
    ?>
    <form action="return.php">
        <input type="submit" value="return">
    </form>
</body>
</html>
