<?php
$string="Able was I ere Isaw Elba";
$stringws=str_replace(" ", "", $string);
$stringlower=strtolower($stringws);
$stringreverse=strrev($stringlower);
$compvalue= strcmp($stringlower,$stringreverse);
if ($compvalue==0)
{
echo " The String "." ".$string." "."is a palindrome";
}
else
{
	echo "The String"." ". $string." "."is not  a palindrome";

}
?>