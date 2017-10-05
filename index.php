<?php

$obj= new main();
class main 
{
//private $html;
public function __construct()
{
$date =  date('Y-m-d', time());
echo "The value of \$date: ".$date."<br>";

$tar = "2017/05/24";
echo "The value of \$tar: ".$tar."<br>";

$year = array("2012", "396", "300","2000", "1100", "1089");
echo "The value of \$year: ";
print_r($year);

echo htmlTags::breakline();

echo htmlTags::headingTwo("Replace string Example");
$date = stringFunctions::stringReplace('-', '/', $date);
echo $date;
echo htmlTags::breakLine();

echo htmlTags::headingTwo("compare String Example");
echo stringFunctions::stringCompare($date,$tar);
echo htmlTags::breakLine();

echo htmlTags::headingTwo("word count example");
echo stringFunctions::stringWordcount($date);
echo htmlTags::breakLine();

echo htmlTags::headingTwo("Find position");
echo stringFunctions::printPositions($date,"/");
echo htmlTags::breakLine();

echo htmlTags::headingTwo("StringLength");
echo stringFunctions::stringLength($date);
echo htmlTags::breakLine();

echo htmlTags::headingTwo("ASCII Value Example");
echo stringFunctions::stringASCII('2');
echo htmlTags::breakLine();

echo htmlTags::headingTwo("Last two characters of the string are:");
echo stringFunctions::stringCharacter($date,8);
echohtmlTags::breakLine();

echo htmlTags::headingTwo("String into Array Example");
echo stringFunctions::stringExplode("/",$date);
echo htmlTags::breakLine();

echo htmlTags::headingTwo("check Leap year using for each:");
echo arrayLeapYear::arrayForeach($year);
echo htmlTags::breakLine();

echo htmlTags::headingTwo("check leap year using for loop");
echoarrayLeapYear::arrayIf($year);
echo htmlTags::breakLine();
}


?>
