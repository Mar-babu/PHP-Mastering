<?php

$name = "Vutan";

$strng01 = "My name is $name \n \t ";
echo $strng01;

//$heredoc = <<<'EOD'   //now Doc
$heredoc = <<<EOD
Hi
Dear 
Mew line {$name}
Love
EOD;

echo $heredoc;