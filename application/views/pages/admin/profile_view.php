<!DOCTYPE html>
<html lang="en" dir="ltr">
    <head>
        <meta charset="utf-8">
        <title>Infinistyle</title>
        <?php echo $css; ?>
    </head>
    <body data-gr-c-s-loaded="true">
        <?php
            echo $sidenav;
            echo $header;
        ?>
            <!--Page Content-->
            <div class="container-fluid mt--7">
                <?php
                    echo $profile;
                    echo $footer;
                ?>
            </div>
            <?php echo $js; ?>
    </body>

</html>
