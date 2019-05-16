<!DOCTYPE html>
<html lang="en" dir="ltr">
    <head>
        <meta charset="utf-8">
        <?php echo $title; ?>
        <?php echo $css; ?>
    </head>
    <body>
            <?php
                echo $sidenav;
                echo $header;
                echo $dashboard;
                echo $footer;
            ?>
            <?php echo $js; ?>
    </body>
    <script>
    $(document).ready(function(){
        let message = `<?php echo $message?>` ;

        message && alert(message);
    })
    </script>

</html>
