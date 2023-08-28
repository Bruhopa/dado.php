<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>Dado em PhP</h1>
    
    <?php
        $roll = rand(1, 6);

        if ($roll == 1) {
            echo '<img src="dado 1.jpg">';
        } elseif ($roll == 2) {
            echo '<img src="dado 2.jpg">';
        } elseif ($roll == 3) {
            echo '<img src="dado 3 .jpg">';
        } elseif ($roll == 4) {
            echo '<img src="dado 4.jpg">';
        } elseif ($roll == 5) {
            echo '<img src="dado 5.jpg">';
        } else {
            echo '<img src="dado 6.jpg">';
        }
    ?>
    <form action="" method="get">
            <button id="bJogar" name="jogar" value="jogar" type="submit"> Jogar Dado </button>
    <h1>Em JS</h1>
    <script language="JavaScript">

    var roll = Math.floor(Math.random() * 6) + 1;

        if (roll == 1) {
            document.write('<img src="dado 1.jpg">');
        } else if (roll == 2) {
            document.write('<img src="dado 2.jpg">');
        } else if (roll == 3) {
            document.write('<img src="dado 3 .jpg">');
        } else if (roll == 4) {
            document.write('<img src="dado 4.jpg">');
        } else if (roll == 5) {
            document.write('<img src="dado 5.jpg">');
        } else {
            document.write('<img src="dado 6.jpg">');
        }
    </script>
</body>
</html>