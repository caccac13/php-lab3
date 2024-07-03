<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action="<?php echo $_SERVER['PHP_SELF'];?>" method="post">
        <input type="text" name="text" id="">
        
        <input type="submit" value="transform">
    </form>

    <?php
    if ($_SERVER["REQUEST_METHOD"] == "POST"){
        $text = htmlspecialchars($_REQUEST['text']);
        echo 'After transform to uppercase letters: ' .strtoupper($text);
        echo '<br>After transform to lowercase letters: ' .strtolower($text);
        echo '<br>After make a strings first character uppercase: ' .ucfirst($text);
        echo '<br>After transform to lowercase letters: ' .ucwords($text);
    }
    ?>
</body>
</html>