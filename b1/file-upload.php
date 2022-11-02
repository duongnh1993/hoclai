<?php
    if (isset($_POST['submit'])){
        $permitted_extensions = ['png', 'jpg', 'jpeg', 'gif'];
        $file_name = $_FILES['upload']['name'];
        if (!empty($file_name)){
           // print_r($_FILES);
            $file_size = $_FILES['upload']['size'];
            $file_tmp_name = $_FILES['upload']['tmp_name'];
            $destination_path = "uploads/${file_name}";

            $file_extension = explode('.', $file_name);
            $file_extension = strtolower(end($file_extension));
            /*echo $file_size,$file_tmp_name,$destination_path,$file_extension;*/

            //validate file extension permitted
            if (in_array($file_extension, $permitted_extensions)){
                if ($file_size <=1000000){
                    //cắt, paste
                    move_uploaded_file($file_tmp_name, $destination_path);
                    $massage = '<p style="color: aquamarine;">file is uploaded </p>';
                }
            }else{
                $massage = '<p style="color: tomato";>file is too big</p>';
            }
        }else{
            $error_massage = '<p style="color: tomato;">NO FILE SELECTED, PLEASE TRY AGAIN</p>';
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
    <h1>FILE UP LOAD</h1>
    <form action="<?php echo $_SERVER['PHP_SELF']; ?>" method="post" enctype="multipart/form-data">
        choose your inmage to upload
        <input type="file" name="upload">
        <input type="submit" value="submit" name="submit">
    </form>
    <?php $error_massage ?? ''; ?>
</body>
</html>
