<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>

    <link rel="stylesheet" href="CSS/style.css">

</head>
<body class="ex05">

    <?php
        $imagemPais = array();
        $nomePais = array();
        $continente = array();        

        $imagemPais[0] = "images/brasil.jpg";
        $nomePais[0] = "Brasil";
        $continente[0] = "América";

        $imagemPais[1] = "images/argentina.jpg";
        $nomePais[1] = "Argentina";
        $continente[1] = "América";

        $imagemPais[2] = "images/alemanha.jpg";
        $nomePais[2] = "Alemanha";        
        $continente[2] = "Europa";

        $imagemPais[3] = "images/japao.jpg";
        $nomePais[3] = "Japão";
        $continente[3] = "Ásia";

        for($i=0;$i<count($nomePais);$i++){            
            echo "<h1> $nomePais[$i] </h1>";            
            echo "<img src='$imagemPais[$i]' />";
            echo "<p> $continente[$i] </p>";              
        }    
    ?>
</body>
</html>