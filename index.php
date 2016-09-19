<?php

$students = [
    "Emmanuel"  => 42,
    "Thierry"   => 51,
    "Pascal"    => 45,
    "Eric"      => 48,
    "Nicolas"   => 19
];

$total = ('');
$nbre = count($students);

foreach ($students as $keys => $value) {

    $total += $value;
    echo $keys . ' => ' . $value . '<br />';
}

$moyenne = $total / $nbre;

    echo '<br />' . 'Age moyen est de ' . $moyenne . 'ans';

?>