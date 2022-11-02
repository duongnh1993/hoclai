<?php
if (isset($_POST[''])){
    if (!empty($_FILES['upload']['name'])){
        print_r($_FILES);
    }else {
        $thongBaoLoi = '<p>chua co file vui long up lai</p>';
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
    <h1>File Upload</h1>
    <form action="<?php echo htmlspecialchars($_SERVER['PHP_SELF'])?>" method="post" enctype="multipart/form-data">chose file upload
        <input type="file" name="upload" value="chọn">
        <input type="submit" value="submit" name="submit">
    </form>
    <?php  ?>
</body>
</html>
