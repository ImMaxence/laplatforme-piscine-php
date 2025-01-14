<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <?php
    function estPremier($n)
    {
        if ($n <= 1) {
            return false; // Pas premier si <= 1
        }
        for ($i = 2; $i <= sqrt($n); $i++) {
            if ($n % $i == 0) {
                return false; // Divisible par un nombre autre que 1 et lui-même
            }
        }
        return true; // C'est un nombre premier
    }

    for ($i = 2; $i <= 1000; $i++) {
        if (estPremier($i)) {
            echo "$i<br>";
        }
    }
    ?>
</body>

</html>