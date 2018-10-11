<!DOCTYPE <!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Page Title</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" type="text/css" media="screen" href="main.css" />
    <script src="main.js"></script>
</head>
<body>
<body></p></p>
    <p>Numéro de la conférence<p>
    <?php ?>
    <p>Titre de la conférence<p>
    <input type='text' value='' name='Titre conference' ><br>
    <p>Contenu de la conférence<p>
    <input type='text' value='' name='Contenu conference' >
    <p>Choix du niveau<p>
    <select id='niveau'>";  
    <?php
    foreach($lesNiveau as $unNiveau)
    {
        ?>
        <option name="niveau" value="<?php echo $unNiveau->idNiveau ; ?>" ><?php echo $unNiveau->niveau ; ?>
        <?php
    }
    ?>
    </select>;<br>
    <p>Choix du thème<p>
    <select id='theme'>;  
    <?php
    foreach($lesTheme as $unTheme)
    {
    ?>
        <option name="theme" value="<?php echo $unTheme->idTheme ; ?>" ><?php echo $unTheme->libelleTheme ; ?>    
        <?php
    }
    ?>
    </select>;<br>
    <p>Choix des technologies<p>
    <?php

foreach($lesTechnologies as $uneTechnologie)
{  
   
        echo "<input checked type='checkbox' name='present[]' value='".$uneTechnologie->idTechno."'>".$uneTechnologie->nomTechno."<br>"; 
    
}
echo "<input type='button' value = 'Insérer une conférence' onclick='InsererConference()'>";
?>
</body>
</html>