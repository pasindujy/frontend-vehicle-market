<!DOCTYPE html>
<html>
    <head>
        <title>PHP Test</title>
    </head>
    <body>
        <?php echo '<p>Hello World</p>';
        if($URI = getenv('DBDataserviceURI'))
        echo $URI;
        ?>
    </body>
</html>