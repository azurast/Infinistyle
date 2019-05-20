<!DOCTYPE html>
<html lang="en" dir="ltr">
    <head>
        <meta charset="utf-8">
        <title>Infinistyle</title>
        <?php echo $css; ?>
    </head>
    <body class="bg-default g-sidenav-show g-sidenav-pinned" data-gr-c-s-loaded="true">
        <?php
            echo $login;
        ?>
    </body>
        <?php echo $js; ?>
    <script>
        $(document).ready(function(){
            let message = `<?php echo $message?>` ;

            message && alert(message);
        })
    </script>

</html>
