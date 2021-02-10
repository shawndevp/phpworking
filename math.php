<pre>
<?php


/* // ----- 1

for($x=0; $x <= 1000; $x++) {
    if ($x % 3==0)  {
        echo $x . "<br>";
    }
} */

/* function fibbe($nummer) {

    if ($nummer == 0)
    return 0;
    else if ($nummer == 1)
    return 1;

    else
    return (fibbe($nummer -1) + fibbe($nummer -2));

    $nummer = 100;

    for ($räkna = 0; $räkna < $nummer; $räkna++){
        echo fibbe($räkna), " ";
    }


} */

function fibbo($n){

    $nummer1 = 0;
    $nummer2 = 1;

    $räkna = 0;
    while ($räkna < $n){

        echo ' '.$nummer1;
        $nummer3 = $nummer2 + $nummer1;
        $nummer1 = $nummer2;
        $nummer2 = $nummer3;
        $räkna = $räkna + 1;
    }

}

$n = 10;
    fibbo($n);

?>
<pre>