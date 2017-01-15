<?php

$GLOBALS['x'] = 10;
$GLOBALS['y'] = 5;


println("\$x=".$x);
println("\$y=".$y);

println();
println("Arithmetic Operators");
println("---------------------------");

println("\$x+\$y=",$x+$y);
println("\$x-\$y=",$x-$y);
println("\$x*\$y=",$x*$y);
println("\$x/\$y=",$x/$y);
println("\$x%\$y=",$x%$y);
println("\$x**\$y=",$x**$y);


println();
println("Assignment Operators");
println("---------------------------");

$z=$y;
println("\$z=\$y, \$z=",$z);
println("\$x+=\$y =",$x+=$y);
println("\$x-=\$y =",$x-=$y);
println("\$x*=\$y =",$x*=$y);
println("\$x/=\$y =",$x/=$y);
println("\$x%=\$y =",$x%=$y);


println();
println("Comparison Operators");
println("---------------------------");

printlnBoolean("\$x==\$y =",$x==$y);
printlnBoolean("\$x===\$y =",$x===$y);
printlnBoolean("\$x!=\$y =",$x!=$y);
printlnBoolean("\$x<>\$y =",$x<>$y);
printlnBoolean("\$x!==\$y =",$x!==$y);
printlnBoolean("\$x>\$y =",$x>$y);
printlnBoolean("\$x<\$y =",$x<$y);
printlnBoolean("\$x>=\$y =",$x>=$y);
printlnBoolean("\$x<=\$y =",$x<=$y);

println();
println("Increment/Decrement Operators");
println("---------------------------------------");
println("++\$x=",++$x);
println("\$x++=",$x++);
println("--\$x=",--$x);
println("\$x--=",$x--);

println();
println("Logical Operators");
println("----------------------");

printlnBoolean("\$x and \$y =",$x and $y);
printlnBoolean("\$x or \$y =",$x or $y);
printlnBoolean("\$x xor \$y =",$x xor $y);
printlnBoolean("\$x && \$y =",$x && $y);
printlnBoolean("\$x || \$y =",$x || $y);
printlnBoolean("\$x!= =",!$x );

println();
println("String Operators");
println("----------------------");

$text1 = "Hello";
$text2 = "World!";

println("\$text1.\$text2 =",$text1.$text2);
println("\$text1.=\$text2 =",$text1.=$text2);

println();
println("Array Operators");
println("----------------------");

$a = array("a" => "red", "b" => "green");  
$b = array("c" => "blue", "d" => "yellow"); 

println("\$a=",print_r($a));
println("\$b=",print_r($b));

println();

echo "\$a+\$b = ";
print_r($a + $b);
echo "</br>";

printlnBoolean("\$a==\$b = ",$a==$b);
printlnBoolean("\$a===\$b = ",$a===$b);
printlnBoolean("\$a!=\$b = ",$a!=$b);
printlnBoolean("\$a<>\$b = ",$a<>$b);
printlnBoolean("\$a!==\$b = ",$a!==$b);


function println($text="",$value=""){
	echo $text.$value."</br>";
	$GLOBALS['x'] = 10;
	$GLOBALS['y'] = 5;
}

function printlnBoolean($text,$expression){
	echo $text.($expression ? "true":"false")."</br>";
}




?>
