<!DOCTYPE html>
<html lang="en" dir="ltr">

<head>
    <meta charset="UTF-8">
    <link rel="stylesheet" href="index.css" />
    <title>PARTIE 2 EXO 3</title>
</head>

<body>
    <p>
        <?php
        $age = 40;
        $gender = 'homme';

        if ($age >= 18 && $gender === 'homme') {
            echo 'Vous êtes un homme et vous êtes majeur';
        } else if ($age < 18 && $gender === 'homme') {
            echo 'Vous êtes un homme et vous êtes mineur';
        }
        if ($age >= 18 && $gender === 'femme') {
            echo 'Vous êtes une femme et vous êtes majeure';
        } else if ($age < 18 && $gender === 'femme') {
            echo 'Vous êtes une femme et vous êtes mineur';
        }

        ?>
    </p>

</body>

</html>