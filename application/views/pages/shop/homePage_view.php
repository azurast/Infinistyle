<!DOCTYPE html>
<html lang="en" dir="ltr">
    <head>
        <meta charset="utf-8">
        <?php echo $css ?>
        <title>Infinistyle</title>
    </head>
    <body>
        <?php echo $header ?>
        <?php echo $content ?>
        <?php echo $footer ?>
        <?php echo $js ?>
    </body>
    <script>
    $(document).ready(function(){
        let message = `<?php echo $message?>` ;

        message && alert(message);
    })
    </script>
</html>
