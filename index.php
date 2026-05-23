<?php
$str = $_GET["key"];
echo $str;
?>

<!DOCTYPE html>
<html lang="en">
<head>
    
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>表单</title>
</head>
<body><center>
    <form action="index.php" method="GET">
        <input type="text" name="key" value="">
        <input type="submit" value="提交">
    </form>
   </center>
</body>      
</html>