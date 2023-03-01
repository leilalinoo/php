<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>php1</title>
</head>
<body>
    <p>ezt a html írta</p>
    <?php
    echo '<p> ezt a php írta<p>';
    $nev1 = "danda";
    $nev2 = 'szerelem';
    $nevEgyben = $nev1." ".$nev2;
    echo $nevEgyben;
    echo "<br>";
    var_dump($nevEgyben);
    echo "<br>";
    define("GREETING", "hello darling");
    echo GREETING;
    echo "<br><br>";
    $tort1 = 3.14;
    $tort2 = 5.86;
    $osszeg = $tort1 + $tort2;
    echo $osszeg;
    var_dump($osszeg);


    $tomb0 = array(333,666);
    $tomb1 = array();
    $tomb2[0] = "bambi";
    $tomb2[1]= "phötsch";

    echo "<br>";
    print_r($tomb2)
    ?>
</body>
</html>