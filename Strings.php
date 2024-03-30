<?php
echo "<p><u>Note</u> : The (.) is the concatenation operatot in php. Here you can see the  illustration . </p>";
echo "<br>";
$str="Abhishek Bohra ";
echo"$str";
$len=strlen($str);
echo'<h1>strlen()</h1>';
echo"The lenght of the string is : ".$len ."<br> The quick brown fox jumps over the lazy";
echo'<h1>str_word_count()</h1>';
echo"The word count of the string is : ".str_word_count($str) ."<br> The quick brown fox jumps over the lazy dogs.";
echo'<h1>strrev()</h1>';
echo" The reversed string will be : ".strrev($str),"<br> The quick brown fox jumps over the lazy dogs.";
echo'<h1>str_replace(Your_Defined_String , YourDesiredStringThatHasToBeUpdated ,$VariableNameOfString )</h1>';
echo "The replaced String will be : " .str_replace("Abhishek Bohra","Andrew Huberman",$str); 
?>