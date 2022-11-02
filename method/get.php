<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
<!--  sd thẻ a để gửi dữ liệu lên url của trình duyệ = get  -->
    <a href="./home/home.php?id=10&name=duong&age=3">send data to home.php</a>
    <form action="./home/home.php" method="get">
        <label for="user">USERNAME</label>
        <input type="text" name="userName" id="userr">
        <br><br>
        <label for="pass">PASSWORD</label>
        <input type="password" name="passWord" id="passs">
        <br><br>
        <button type="submit" name="btnLogin">LOGIN</button>
    </form>

</body>
</html>