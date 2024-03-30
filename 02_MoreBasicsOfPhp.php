<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title> Php tutorials </title>
</head>
<body>
<style>
    *
    {
        margin: 0;;
        padding :0;
        box-sizing: border-box;
    }
   .container
    {
        max-width : 80%;
        background-color: rgb(228, 195, 195);
        margin : auto;
        padding : 23px;
        
    }
</style>

    <div class="container">
        <h1 style="text-align:center;" ><i><u>Let's Learn More About Php</i></u></h1>
        This is a container <bt>

     
    <?php
    echo"<br>";
   $age=3   ;
   if($age>18){echo"you can go to the party ";}
   else if($age==7){echo "You are only 7 year old ";}
   else{echo "you cannot go to the party ";}
   echo "<br>";

   echo"<u>Loops in PHP : </u>";
   echo "<br>";
   
   
   $lan=array("C","C++","JAVA","PYTHON","Php");
   
   
   for($i=0;$i<5;$i++){echo $lan[$i];
                       echo "<br>";};
echo "<h1><u> Array Functions</u></h1>";
echo"<br>";
echo"1. Count-: To Count the elements of the array";
echo "<br>";
echo count($lan);
echo "<br>";    
echo "<br>";    
echo "<hr>";
echo "<br>";  

echo "<h1><u> Loops in Php </u></h1>";
echo "There are  4 types of Looping Statement in  Php : ";
echo "<br>";
echo"<h3><u>while loop:-</u></h3>";
$a=0;
while($a<=10)
{
    echo"The value of a is : ";
    echo $a;
    echo "<br>";
    $a++;
}
echo "<br>";
echo "<u>Iterating Array in php using <pre><u><b>while</b></u> </pre> loops :-</u> ";
echo "<br>";    

$a=0;
while($a<count($lan))
{
    echo "The values of languages are : ";
    echo $lan[$a];
    echo"<br>";
    $a++;
}
echo "<br>";
echo"<h3><u>do while loop:-</u></h3>";
echo "<br>";
echo "<u>Iterating Array in php using <pre><u><b>do while</b></u> </pre> loops :-</u> ";
echo "<br>";    

$a=0;
do 
{
    echo "The values of languages are : ";
    echo $lan[$a];
    echo"<br>";
    $a++;
}while($a<count($lan));
echo "<br>";
echo "<u>Basic Iterations Using do while Loop   </u> : ";
echo "<br>";    
$a=0;
do{
    echo " The values of a : ";
    echo $a;
    echo "<br>";
    $a++;
}while($a<=10);
echo"<i>Note</i> : <b>The do while runs atleast for one time because it will first execute the term presernt in the scope . </b>";
echo"<br>";
echo"<br>";
echo"<h3><u>for loop:-</u></h3>";
echo "<br>";
echo "<u>Basic Iterations Using for Loop   </u> : ";
echo "<br>"; 
for($a=0;$a<=10;$a++)
{
    echo"The value of a is : ";
    echo $a;
    echo "<br>";   
}  
echo"<br>";
echo"<h3><u>for each loop:-</u></h3>";
echo "<br>";

echo "<u>Basic Iterations Using foreach Loop   </u> : ";
echo "<br>";
foreach($lan as $value)
{
    echo "The value is : ";
    echo $value;
    echo "<br>";    

}
echo "<br>";
echo"<hr>";
echo "<br>";  
echo "<h1><u> Functions in Php </u></h1>";
echo "<br>";
echo "<br>";

function print5()
{
  for($i=1;$i<6;$i++)  {echo "Five is printed  $i time "; echo "<br>";}
}
print5();
echo "<br>";
echo "Making the parameterised function : ";
echo "<br>";
function print_number($number)
{
    //echo "<br>Your number is : ";
    //echo $number;
    $i=0;
    while($i<=$number*$number){echo $i;echo"<br>";$i++;}
    
}
print_number(4);



    
    ?>
    </div>
</body>
</html>