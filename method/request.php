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
<form action="./requestfolder/testrequest.php.php" method="post">
    <label for="number">NUMBER</label>
    <input type="text" name="number1" id="number">
    <br><br>
    <label for="number2">NUMBER2</label>
    <input type="text" name="number2" id="number2">
    <br><br>
    <select name="gender">
        <option value="">--chon giới tính--</option>
        <option value="1">Nam</option>
        <option value="0">Nu</option>
    </select>
    <br><br>
    <input type="checkbox" name="agree" value="11">
    <!--        không có value nó sẽ nhận giá trị là on hoặc null, nếu có nó hiển thị giá trị value-->
    <br><br>

    <input type="radio" name="radioCheck" value="22">
    <br><br>
    <button type="submit" name="btnLogin">tính tổng</button>

<!--    -->
</form>
</body>
</html>
