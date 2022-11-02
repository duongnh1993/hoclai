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

    <?php
        $state = $_GET['state'] ?? '';
    ?>
    <?php if ($state === 'ok'):?>
        <h4>la so nguyen to</h4>
    <?php elseif ($state === 'error'): ?>
        <h4>không là số nguyên tố</h4>
    <?php endif; ?>
    <form action="../songuyento/xuly/xulysonguyento.php" method="post">
        <label for="number">number</label>
        <input type="number" id="number" name="number">
        <br><br>
        <button type="submit" name="checkbtn">check</button>
    </form>
</body>
</html>