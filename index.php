<!DOCTYPE html>
<html>
    <head>
        <title>Chambers For Sport</title>
        <?php include 'header.php'; ?>
    </head>
<body>
    <form action="process.php" method="post" enctype="multipart/form-data">
        <input type="file" name="uploadedFile">
        <button type="submit">Submit</button>
    </form>
    <?php include 'coaches.php'; ?>
</body>
</html>