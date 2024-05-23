<?php $info = file_get_contents ("info.txt");

?>

<html>
    <head></head>
    <body>
        <h1>お知らせ</h1>
        <p><?php echo $info;?><P>
    </body>
</html>