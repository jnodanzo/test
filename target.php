<!DOCTYPE html>
    <html lang="fr">
        <head>
            <meta charset="UTF-8">
            <title>TEST en PHP</title>
            <link rel="stylesheet" href="formul.css" type="text/css">
            <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.css">
        </head>
        <body>
            <p> bienvenue, vous etes bien Mr/Mme 
            <?php
                echo $_POST['nom'];
                echo ' ' .$_POST['prenom']. '<br/> ';
                echo 'vous avez ' .$_POST['age']. ' ans.';
            ?>
            </p>
            <p>cliquez <a href="index.php"> 'ici'</a> pour retaper votre nom</p>
        </body>
    
    </html>
            