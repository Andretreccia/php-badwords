<? 
$testo_a_scelta= "Questo è il testo che ho scelto per questo censura di esercizio ";

var_dump($testo_a_scelta);
var_dump(strlen($testo_a_scelta));

echo $testo_a_scelta;
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>php-badwords</title>
</head>
<body>
    <h1>Testo:</h1>
    <p> 
       <?= $testo_a_scelta ?>
  </p>
  <h2>Lunghezza:</h2>
    <p>
       <?= strlen($testo_a_scelta) ?>
    </p>
</body>
</html>