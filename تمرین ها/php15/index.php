<?php
echo '<h1>logical operators </h1>';
echo '</br>';
echo '</br>';

echo 'true and true=>';
echo true and true;
echo '</br>';

echo 'true and false=>';
echo true and false;
echo '</br>';

echo 'false and true=>';
echo false and true;
echo '</br>';

echo 'false and false=>';
echo false and false;
echo '</br>';

echo 'true or true=>';
echo true or true;
echo '</br>';

echo 'true or false=>';
echo true or false;
echo '</br>';

echo 'false or true=>';
echo false or true;
echo '</br>';

echo 'false or false=>';
echo false or false;
echo '</br>';

echo '(18<9)or(true or false)=>';
echo (18<9)or(true or false);
echo '</br>';
echo '</br>';

echo '<h1>numeric arrays</h1>';
echo '</br>';
echo '</br>';

$bb1='maream';
echo $bb1;
echo '</br>';

$bb2='zahra';
echo $bb2;
echo '</br>';

$bb3='fatemah';
echo $bb3;
echo '</br>';

$bb4='bahareh';
echo $bb4;
echo '</br>';

$bb=['zahra','bahareh','maream',18,15,12.5];
echo '</br>';

echo $bb[0];
echo $bb[4];
echo '</br>';

print_r($bb);
echo '</br>';
echo '</br>';
echo '</br>';
echo '</br>';

$name=array('zahra','bahareh','zenab','maedeh');
print_r($name);
echo '</br>';
echo '</br>';
echo '</br>';

//مثال
$نمرات=array(16,19,20,9.5,14);
$میانگین=($نمرات[0]+$نمرات[1]+$نمرات[2]+$نمرات[3]+$نمرات[4])/5;
echo $میانگین;
echo '</br>';


$name=[2,4,6,8,10];
$variance= array_variance($name);
$standard_deviation=arrey_standard_deviation($name);
echo 'variance'. $variance.PHP_EOL;
echo 'standard deviation'.$standard_deviation.PHP_EOL;

?>