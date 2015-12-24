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
            <a href = "../controleur/Accueil.php"><div class = "boutonMenuLeft"><h2> Accueil </h2></div></a>
            <a href = ""><div class = "boutonMenuLeft"><h2> Notre Association </h2></div></a>
            <a href = ""><div class = "boutonMenuLeft"><h2> Nos Photos </h2></div></a>
            <a href = ""><div class ="boutonMenuRight"><h2> Contacts </h2></div></a>
        </div>
        <div id = "corps"><div id = "cadre"><?php echo $content ?></div></div>
        <div id ="footer"></div>
    </body>
</html>
