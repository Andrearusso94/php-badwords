<?php

//creo variabili per la parola da censurare(name) e per il testo del paragrafo

$words = $_GET['words'];
$testo = $_GET['testo'];
$greetings = "Il tuo testo: $testo ";
//creo nuova variabile per nasconder il nome inserito
$newText = str_ireplace($words, '***', $testo);
//$newText = "$testo, $name";
var_dump($words, $testo, $newText)
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <!--stampo a schermo il paragrafo con la sua lunghezza-->
    <h1> <?php echo $greetings; ?></h1>
    <h2> <?php echo 'Il tuo paragrafo è lungo '.strlen($testo) .' caratteri'; ?> </h2>
    <!--anche se non richiesto stampo a schermo il nome inserito-->
    <h3><?php echo $words; ?></h3>
    <!--stampo nome censurato-->
    <h3> <?php echo 'Ho censurato il nome ' . $words; ?></h3>
    <h3> <?php echo 'newText ' . $newText; ?></h3>
    <h4> <?php echo 'Ora il tuo paragrafo è lungo '. strlen($newText) .' caratteri e la parola viene censurata ' ; ?></h4>
</body>
</html>