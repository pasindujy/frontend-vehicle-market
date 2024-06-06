<!DOCTYPE html>
<html>
    <head>
        <title>PHP Test</title>
    </head>
    <body>
        <?php echo '<p>Vehicle Rent Market</p>';
        if($URI = getenv('DBDataserviceURI'))
        echo $URI;
        ?>
         <div>
             <img src="banner.jpg" alt="banner" />
         </div>
    </body>
</html>