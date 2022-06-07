<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="Law.css">
    <title>FORMU SHARINGAN</title>
</head>

<h1>Le Formulaire ziak</h1>

<body> 
</body>

<h2>



<?php



    // Les variables des input (le name des input)
    $nom = $_GET["nami"];
    $prenom = $_GET["prenom"];
    $adresse = $_GET["adresse"];
    $mail = $_GET["mail"];
    
    echo "Salut " . $prenom;



    // Information pour la connexion
    $servername = "localhost";
    $username = "root";
    $password = "";
    $dbname = "test_oats";

    try {
            
        // Connexion                             
        $conn = new PDO("mysql:host=$servername;port=3307;dbname=$dbname", $username, $password);

        $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

        // La requête
        //               le nom de ta table
        $sql = "INSERT INTO formulaire (nom, prenom, adresse, mail)

        -- Les variables de tes input
        VALUES ('$nom', '$prenom', '$adresse', '$mail')";

        $conn->exec($sql);

        echo "<br><br>";
        echo "Formulaire envoyé avec succès ";

    } catch(PDOException $e) {

      echo $sql . "<br>" . $e->getMessage();

    }

    $conn = null;

?>





</h2>
</html>