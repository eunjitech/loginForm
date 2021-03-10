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
            <h1>Log In</h1>
            <label for="user-id">ID</label>
            <input type="text" name="user-id" id="user-id" placeholder="아이디 입력">
            <label for="user-pw">Password</label>
            <input type="password" name="user-pw" id="user-pw" placeholder="비밀번호 입력">
            <a href="#" class="find-idpw">아이디/비밀번호 찾기</a>
            <input type="submit" value="로그인">
            <button>회원가입</button>
            <sapn class="js-alert"></span>
        </form>
    </div>
    <script src="js/background.js"></script>
    <script src="js/login.js"></script>
</body>

</html>