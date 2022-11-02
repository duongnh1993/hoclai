<?php
echo "<pre>";
//print_r($_SERVER);
$email = htmlspecialchars($_POST['email']) ?? '';
$age = htmlspecialchars($_POST['password']) ?? '';
?>
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
    <form action="<?php echo htmlspecialchars($_SERVER['PHP_SELF']); ?>" method="POST">
        <div>
            <label for="name">your name</label>
            <input type="text" name="email">
        </div>
        <div>
            <label for="password">Password</label>
            <input type="text" name="age">
        </div>
        <button type="submit" value="Submit" name="submit">login</button>
    </form>
</body>
</html>
