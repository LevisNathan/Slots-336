<!DOCTYPE html>
    <?php
        include 'inc/funcition.php';
    ?>
    <html>
        <head>
            <link rel="stylesheet" type="text/css" href="css/styles.css">
            <meta charset="utf-8" />
            <title>
                Lab2
            </title>
        </head>
        <body>
            <header>
                <h1> Welcome To the slots!!! </h1>
            </header>
            <main>
                <div id="main">
                   <?php
                   play();
                   ?>
                   <form>
                       <input type="submit" value="Spin!"/>
                   </form>
                </div>
            </main>
        </body>
    </html>