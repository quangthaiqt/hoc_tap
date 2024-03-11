<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Quang Thai</title>
</head>
<body>
    <?php
    $frist = '<u><i> hello </i></u>';
   
    echo $frist ;
    
    echo "<br/>";

    $frist1 = " Hello world";
    echo "<b>";
    echo $frist1;
    echo "</b>";
    echo "<br/>";
    
    define('NAME', 'Vo Van Teo');
    echo "<h1>";
    echo NAME;
    echo "</h1>"
    ?>

    <?php
    $a = '1';
    $b = '2';
    if ($a > $b) {
        echo " a is bigger than b " ;
    } else if ( $a == $b ) {
        echo " a is equal  to b" ;
    } else{
        echo " a smaller than b" ;
    }   echo "<br/>";
    ?>

    <?php
    $x = '8';
    echo " gia tri x là : $x ";
    echo "<br/>";
    $y = '6';
    echo " gia tri y là : $y ";
    echo "<br/>";
    $z = '7';
    echo " gia tri x là : $z ";
    echo "<br/>";
   
    $max = $x;
    if ( $y > $max) {
        $max = $y;
    } if( $z > $max) {
        $max = $z;
    }; echo "gia tri lon nhat la : $max";
    echo "<br/>";

    $min = $x;
    if ( $y < $min) {
        $min = $y;
    } if( $z < $min) {
        $min = $z;
    }  echo "gia tri nho nhat la : $min";
    echo "<br/>";
    $tong = $x + $y + $z;
    echo " tong cua 3 bien la : $tong";
    echo "<br/>";
    $tbinh = ( $x + $y + $z ) /3;
    echo " gia tri trung binh cua 3 bien la : $tbinh" ;
    ?>




</body>
</html>