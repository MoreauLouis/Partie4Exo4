<!DOCTYPE html>
<html lang="fr" dir="ltr">
  <head>
    <meta charset="utf-8" />
    <title>Exo3</title>
  </head>
  <body>
    <?php function chaine ($firstname = 'Jerry' , $name = 'Golet' , $age = 21 )
    {
       return ('Bonjour ' . $firstname . ' ' . $name . ', tu as ' . $age . ' ' . 'ans' );
    }
    echo chaine ()
    ?>


  </body>
</html>
