

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <title>Log In</title>
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Do+Hyeon&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="style.css">
</head>

<body>
    <div class="form-margin">
        <form action="login.php" method="post">
            <h1><?php echo $_POST["user-id"]; ?>님, 반갑습니다</h1>
            
        </form>
    </div>
    <script src="js/background.js"></script>
    <script src="js/login.js"></script>
</body>

</html>