<?php 
    $variabileTesto = "Lorem ipsum dolor sit, amet consectetur adipisicing elit.";
    $badWord = $_GET['word'];
    $testoCensurato = str_replace($badWord,'***',$variabileTesto);
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>BAD WORDS</title>
</head>
<body>
    <h1>BAD WORDS</h1>
    <p>
        <?php 
            echo $variabileTesto . " " . strlen($variabileTesto);    
        ?>
    </p>
    <p>
        <?php
            echo $testoCensurato . " " . strlen($testoCensurato);    
        ?>
    </p>
</body>
</html>