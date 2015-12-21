<!DOCTYPE html>
<!--
-->
<html>
    <head>
        <meta charset="UTF-8">
        <title><?php echo $titre ?></title>
        <link rel="stylesheet" type="text/css" href="../vue/main.css">
    </head>
    <body>
        <div id = "header">
            <a href = "../controleur/Accueil.php"><div class = "boutonMenuLeft"> Accueil </div></a>
            <a href = ""><div class = "boutonMenuLeft"> Notre Association </div></a>
            <a href = ""><div class = "boutonMenuLeft"> Nos Photos </div></a>
            <a href = ""><div class ="boutonMenuRight"> Contacts </div></a>
        </div>
        <div id = "corps"><div id = "cadre"><?php echo $content ?></div></div>
        <div id ="footer"></div>
    </body>
</html>
