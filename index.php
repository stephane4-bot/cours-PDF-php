<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>cours-pdf-php</title>
</head>
<body>
    
</body>
</html>
<?php
echo "hello;php" . '<br>';
$a = 5;
$b = 4;
$c = 1.2;

echo "addition : " . ($a+$b) . '<br>' ;
echo "soustraction : " . ($a-$b) . ' <br> ';
echo "multiplication : " . ($a*$b) . '<br>';
echo "division :" . ($a/$b) . '<br>';
echo "modulo :" . ($a%$b) . '<br>';
'<br>';
echo "addition : " . ($a+=$b) . '<br>';
echo "soustraction : " . ($a-=$b) . '<br>';
echo "multiplication : " . ($a*=$b) . '<br>';
echo "division : " . ($a/=$b) . '<br>';
echo "modulo : " . ($a%=$b) . '<br>';

$a=5;
echo "post-incrément (\$a++):" . $a++ . '<br>';
echo "pré-incrément (++\$a):" . ++$a . '<br>';

echo "post-decrément (\$a--):" . $a-- . '<br>';
echo "pré-decrément (--\$a):" . --$a. '<br>';

echo "is_float (1.25) :" . (is_float(1.25) ? 'true' : 'false') . '<br>' ;
echo "is_int(3.4) :" . (is_int(3.4) ? 'true' : 'false') . '<br>' ;
echo "is_numeric(\"3.45\") :" . (is_numeric("3.45") ? 'true' : 'false') . '<br>' ;
echo "is_numeric(\"3g.45\") :" . (is_numeric("3g.45") ? 'true' : 'false') . '<br>' ;
jggyy2jwhewj

?>