<?php
    session_start();
?>
<!DOCTYPE html>
<html>
    <head>
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    </head>
    <body>

        <h1>My First Heading</h1>
        <form action="any.php" method="post">
            <input type="text" name="prenom" placeholder="Entrez votre prenom"/>
            <input type="submit" name="validation" value="valider" />
        </form>
        <div>
            <?php
                $prenom = "";
                if(!(empty($_POST['validation']))){
                    $prenom = $_POST['prenom'];
                }
                $GLOBALS['mon_prenom'] = $prenom;
            ?>
        </div>
        <div id="code">
            <?php
                $heure = date('h:i:s a');
                echo "Bonjour ".$mon_prenom." il est ".$heure;
            ?>
        </div>

        <script>
            setInterval(load,1000)
            function load(){
                $("#code").load("any.php #code");
            }
        </script>
    </body>
</html>
