<!DOCTYPE html>
<html>

<head>
    <title>Ianworks</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css">
    <link rel="stylesheet" href="./assets/css/main.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.0/jquery.min.js"></script>
    <script src="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"></script>
</head>

<body>

    <?php
        include_once('./functions/db-connection.php'); // for database connections
        include_once('./functions/class.php') ; // for functions
    
        include_once('./templates/header.php'); /* ========================== */
        include_once('./templates/app.php'); /* front end content */
        include_once('./templates/footer.php');  /* ========================== */
    ?>

</body>

</html>