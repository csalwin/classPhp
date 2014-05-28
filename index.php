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

        <?php include($session->content);?>
           <h3>Categories</h3>

        <ul><?php
                foreach($session->categories as $row):

            echo '<li>'.$row['category'].'</li>';
            endforeach;



            ?>

                </ul>

        <h3>locations</h3>

        <ul><?php foreach($session->locations as $row):
            echo '<li>'.$row['locations'].'<li>';
            endforeach;

            ?>
        </ul>

        <form method="get" action="index.php">
            <input type="text" name="category"/><input type="submit" name="submit" value="Add Category">
        </form>

        <form method="get" action="index.php">
            <input type="text" name="locations"/><input type="submit" name="submit" value="Add Location">
        </form>




        </body>
    </html>