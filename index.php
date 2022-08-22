<?php 
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
            $variabileTesto = "Lorem ipsum dolor sit, amet consectetur adipisicing elit.";
            echo $variabileTesto;
            echo strlen($variabileTesto);

            // var_dump($variabileTesto);
            // var_dump($_GET['word']); 
        ?>
    </p>
    <p>
        <?php 
            $testoCensurato = str_replace($_GET['word'],'***',$variabileTesto);
            echo $testoCensurato;
            echo strlen($testoCensurato);

        ?>
    </p>
</body>
</html>