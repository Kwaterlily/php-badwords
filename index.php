<!-- PHP Badwords -->

<!-- Creiamo una variabile con un paragrafo di testo a scelta.
Stampiamo a schermo il paragrafo e la sua lunghezza.
Passiamo sulla barra del browser in query string una parola che vogliamo censurare
Recuperiamo la parola da censurare via PHP e  sostituiamo tutte le sue occorrenze nel paragrafo con 3 asterischi.
Stampiamo di nuovo il paragrafo e la sua nuova lunghezza. -->

<?php
$paragraph = "Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Quisque non tellus orci ac auctor augue mauris. Enim nulla aliquet porttitor lacus luctus accumsan. Libero volutpat sed cras ornare arcu dui vivamus. Dui nunc mattis enim ut tellus elementum sagittis vitae et. Lorem dolor sed viverra ipsum nunc. Blandit massa enim nec dui. Ultrices tincidunt arcu non sodales neque sodales ut. Semper quis lectus nulla at volutpat diam. Sed enim ut sem viverra aliquet. Tellus in hac habitasse platea dictumst vestibulum. Interdum consectetur libero id faucibus nisl. Quam pellentesque nec nam aliquam sem et tortor consequat. Adipiscing elit duis tristique sollicitudin nibh. Hac habitasse platea dictumst quisque sagittis purus sit. Luctus venenatis lectus magna fringilla urna porttitor. Mattis ullamcorper velit sed ullamcorper.";

$badword = $_GET["badword"];
$censored_words = str_replace($badword, "* * *", $paragraph);
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
    <p><?=$paragraph ?></p>
    <div><em>La lunghezza del paragrafo é: </em><?=  strlen($paragraph)?></div>

    <p><?=$censored_words ?></p>
    <div><em>La lunghezza del paragrafo é: </em><?=  mb_strlen($censored_words)?></div>
</body>
</html>