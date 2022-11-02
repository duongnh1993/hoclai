<?php
    session_start();
    if (isset($_SESSION['email'])){
        echo "welcome to Dashboard page";
        echo "email: " . $_SESSION['email'];
        echo "<a href='logout.php'>logout</a>";
    }else {
        echo "welcome guest to dashboard";
        echo "<a href='session.php'>back to login</a>";
    }
?>