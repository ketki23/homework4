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

//public function __destruct()
//{
//print($this->html);
//}
}

class stringFunctions
{
static public function stringReplace($src,$target,$str)
{
$str = str_replace($src,$target,$str);
}
static public function stringComapre($string1,$string2)
{
if($string1==$string2)
{
echo "Oops";
}
else if($string1<$string2)
{
return "future";
}
else if($string1<$string2)
{
return "past";
}
}
static public function printPositions($date,$val)
{
return strpos($date,$val);
//echo $pos1;
}
static public function stringWordcount($string1)
{
return str_word_count($string1);
}
static public function tringLength($string1)
{
return strlen($string1);
}
static public function stringASCII($string1)
{
return ord($string1);
}
static public function stringCharacter($string1,$value)
{
return substr($string1,$value);
}
static public function stringExplode($value,$string1)
{
$arr = explode($value.$string1);

foreach($arr as $a)
echo $a."\r";
}
}

class arrayLeapYear
{
static public function arrayForeach($years)
{
foreach($years as $year)
{
arrayLeapYear::checkLeapYear($year);
}
}

static public function arrayIf($years)
{
for($i=0; $i<count($years); $i++)
{
arrayLeapYear::checkLeapYear($Years[$i]);
}
}

static public function checkLeapYear($year)
{
$val =(($year % 4 == 0) and ($year % 100 != 0) or ($year % 400 == 0));
$str = '';
switch ($val)
{
case 1:
echo 'true'."\r";
break;

default:
echo 'false'."\r";
break;
}
}
}
 
class htmlTags
{
static public function horizontalRule()
{
return '<hr>';
}
static public function headingTwo($text)
{
return '<h2>'.$text.'</h2>';
}
static public function headingThree($text)
{
return '<h3>'.$text.'</h3>';
}
static public function breakLine()
{
return '<br>';
}
}

?>
