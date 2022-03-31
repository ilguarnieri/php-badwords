<?php

    //testo
    $text = 'Non importa che cosa hai fatto o che cosa eri. Se esci da qui... combatti e combatti per uccidere. Se vuoi restare, va bene. Manderò tuo fratello a cercarti ma se uscirai da quella porta... tu sei un Avenger.';
    //lunghezza testo
    $length_text = strlen($text);
    //GET parola da censurare
    $bad_word = $_GET['badword'];
    //testo modificato
    $mod_text = str_replace([$bad_word, ucwords($bad_word)], '***', $text);
    //lunghezza testo modificato
    $length_mod_text = strlen($mod_text);

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="./css/style.css">
    <link rel="icon" href="./img/bad.png">
    <title>PHP BadWords</title>
</head>
<body>

    <header class="container">
        <h1>PHP BadWords</h1>
    </header>

    <main>
        <div class="container">
            <h2 class="title">Paragrafo</h2>
            <p class="text"><?php echo $text ?></p>
            <p class="description">Lunghezza paragrafo:
                <span class="text_red">
                    <?php echo $length_text ?>
                </span>
            </p>
        </div>
    
        <div class="container">
            <h2 class="title">Paragrafo modificato</h2>
            <p class="text"><?php echo $mod_text ?></p>
            <p class="description">Lunghezza paragrafo modificato:
                <span class="text_red">
                    <?php echo $length_mod_text ?>
                </span>
            </p>
        </div>
    </main>
    
</body>
</html>