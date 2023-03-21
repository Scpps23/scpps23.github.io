<?php
date_default_timezone_set('India/Delhi');
?>

<!DOCTYPE html>
<html>
    <head>
        <meta charset ="UTF-8">
        <title>Title of the document</title>
        <link rel="stylesheet" type="text/css" href="style.css">
    </head>
<body>
    <video width="320" height ="240" controls>
        <source src="movie.mp4" type="video/mp4">
        <source src="movie.ogg" type="video/ogg">
        Your browser does not support the video tag.
</video>
<?php
echo "<form>
<input type='hidden' name='uid' value='Anonymous'>
<input type='hidden' name='date' value='".date('Y-m-d H:i:s')."'>
    <textarea name='message'></textarea><br>
    <button type='submit' name='submit'>Comment</button>
</form>";
?>
</body>
</html>