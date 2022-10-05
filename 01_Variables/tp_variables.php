<?php

$var1 = 3;
$var2 = 4;
echo "var1= $var1, var2= $var2 \n";

// ************

$var1 = $var2;
$var2 = 5+2;
echo "var1= $var1, var2= $var2 \n";

// ************

$var1 = $var2 + 2;
echo "var1= $var1, var2= $var2 \n";

// ************

$var2 = $var2 + 1;
echo "var1= $var1, var2= $var2 \n";
echo "$var1, var2 \n";