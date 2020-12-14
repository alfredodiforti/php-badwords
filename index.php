<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>php-badwords</title>
</head>
<body>

<?php
$testo = 'È arrivato: M1 è il primo chip Apple creato su misura per il Mac, e offre prestazioni incredibili, tecnologie dedicate e un’efficienza energetica straordinaria. In più, è stato pensato fin dall’inizio per avere un’intesa perfetta con macOS Big Sur, il sistema operativo desktop più evoluto al mondo. Grazie a livelli mai visti di performance per watt, il Mac con chip M1 rappresenta l’inizio di una nuova era. Non è un aggiornamento. È una vera e propria rivoluzione.'
?>
<?php 
$badword = $_GET['badword'];
?>

<?php $testobarrato = str_replace($badword,'***',$testo) ;?>
<p>il seguente testo è inserito tramite php: <?php echo $testobarrato;  ?> </p>
<?php echo strlen($testo);
?>



   
</body>
</html>