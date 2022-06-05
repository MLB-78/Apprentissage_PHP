<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="Les bases.css">
    <title>OATS</title>
</head>

<body>

    <h1>Bonjour de chez html</h1>

    <h2>
    <?php 

    echo "Bonjour de chez php ";

    

    // Les variables en php

    $âgeMaxime ;
    $âgeAnais = 17;
    $âgeMaxime = $âgeAnais +1 ;

    echo "<br><br> Maxime a " . $âgeMaxime . " ans <br> ";

    if($âgeMaxime > $âgeAnais) {

        echo "Je suis plus grand que toi et ton père";

    } else {
        
        echo "tu es plus grande que moi";
    }

    echo "<br><br>";

    // Les arrays en php

    $foot = array("salam","josko","oats");
    echo $foot[2] . " est une abréviation";


    // Les fonctions en php

    echo "<br><br>";

    function zua () {

        echo "Toi même tu sais : On A Trop Souffert";

    }

    zua();


    // Import Export en php

    echo "<br><br>";

    include 'import - export.php';



    ?>

    <hr>

    </h2>
    

    



</body>

</html>