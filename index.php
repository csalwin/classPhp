<?php
    ini_set('display_errors','1');//TODO remove from production
    include ('app/controllers/BaseController.php');
    $session = new app\controllers\BaseController();
?>

<!DOCTYPE html>
    <html class="no-js">
        <head>
            <meta charset="utf-8"/>
            <title><?php echo($session->title); ?></title>


        </head>

        <body>

        <?php include($session->content); ?>
            <h3>categories</h3>
        <ul><?php
                foreach($session->categories as $row):

            echo '<li>'.$row['category'].'</li>';
            endforeach;





            ?>

                </ul>
        </body>
    </html>