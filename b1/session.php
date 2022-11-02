<?php

//echo "<pre>";
//print_r($_SERVER);
session_start();
if (isset($_POST['submit'])){
    $email = filter_input(INPUT_POST,'email', FILTER_SANITIZE_SPECIAL_CHARS);
    $password = $_POST['password'];
    if ($email == 'duong@gmail.com'  && $password == '123456'){
        $_SESSION['email'] = $email;
        header('location: dashboard.php');
    } else {
        echo "incorrect email or password";
    }
}
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
    <h1>login to your account</h1>
    <form action="<?php echo htmlspecialchars($_SERVER['PHP_SELF']); ?>" method="POST">
        <div>
            <label for="email">your name</label>
            <input type="text" name="email">
        </div>
        <div>
            <label for="password">Password</label>
            <input type="password" name="password">
        </div>
        <button type="submit" value="Submit" name="submit">login</button>
    </form>
</body>
</html>
