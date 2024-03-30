<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>php tutorials</title>
</head>
<body style="background-color:aqua">
    <div class="container">
        This is my first php website
        
    
        <?php
        define('pie',3.14159);   
        echo "Hello world and this is my first php printing statement";
        //Single line comment   
        echo"<br>";
        $var1 =5;
        $var2=2;
        echo $var1;
        echo"<br>";
        echo $var2;
        echo"<br>";
        ECHO $var1+$var2;

        echo"***********************************************";
        echo"<br>";
        echo"<hr>";
        //Operators in php
        echo"<h1><u>Aritmetic Operator In PHP</u> : </h1>";   
       // 1. Arithmetic Operator
         echo "The sum of var1 and var2 is : " , $var1 + $var2 ;
         echo"<br>";
         echo"<hr>";
         echo "The difference of var1 and var2 is : " , $var1 - $var2 ;
         echo"<br>";
         echo"<hr>";
         echo "The product of var1 and var2 is : " ,$var1 * $var2 ;
         echo"<br>";
         echo"<hr>";
         echo "The div of var1 and var2 is : " , $var1 / $var2 ;
         echo"<br>";
         echo"<hr>";
         echo "The remainder  of var1 and var2 is : " , $var1 % $var2 ;
         echo"<br>";
         echo"<hr>";
         echo"<h1><u>Assignment Operator In PHP</u> : </h1>";
       // 2. Assignment Operator

       $NewVar=$var1;
       //$NewVar += 1;
       //$NewVar -= 1;
       //$NewVar /= 2;
        $NewVar *= 5;;
       echo"The value of the NewVar is  : ";
       echo $NewVar;
       echo"<br>";
       echo"<hr>";
        echo"<h1><u>Comparison Operator In PHP</u> : </h1>";
       // 3. Comparison Operator
        echo "The value of 1==4 is : ";
        echo var_dump(1==4);
        echo"<br>";
        echo "The value of 1!=4 is : ";
        echo var_dump(1!=4);
        echo"<br>";
        echo "The value of 1>=4 is : ";
        echo var_dump(1>=4);
        echo"<br>";
        echo "The value of 1<=4 is : ";
        echo var_dump(1<=4);
        echo"<br>";
        echo"<hr>";
        echo"<h1><u>Increment/Decrement Operator In PHP</u> : </h1>";
       // 4.Increment/Decrement Operator
       echo"<br>";
       echo $var1++;
       echo"<br>";
       echo  "post increment";
       echo"<br>";
       echo $var1;
       echo"<br>";
       echo"<br>";
       
       echo $var1--;
       echo"<br>";
       echo  "post decrement";
       echo"<br>";
       echo $var1;
       echo"<br>";
       echo"<br>";

       echo ++$var1;
       echo"<br>";
       echo  "pre increment";
       echo"<br>";
       echo $var1;
       echo"<br>";
       echo"<br>";

       echo --$var1;
       echo"<br>";
       echo  "pre decrement";
       echo"<br>";
       echo $var1;
       echo"<br>";
       echo"<br>";

       echo"<hr>";
       echo"<h1><u>Logical Operator In PHP</u> : </h1>";

       // 5. Logical Operator
       echo "<br>";
       echo"There are mainly 4 types of logical operator<br> 
             1.AND (&&) <br>
             2.OR (||)<br>
             3.XOR<br>
             4.NOT (!)<br>";
        echo "<u>AND : </u> ";
        echo "<br>";
        $mv1= (true and true);
        echo var_dump($mv1);
        echo"<br>";
        $mv1= (true and false);
        echo var_dump($mv1);
        echo"<br>";
        $mv1= (false and true);
        echo var_dump($mv1);
        echo"<br>";
        $mv1= (false and false);
        echo var_dump($mv1);

        echo "<br>";
        echo "<u>OR : </u> ";
        $mv1= (true or true);
        echo var_dump($mv1);
        echo"<br>";
        $mv1= (true or false);
        echo var_dump($mv1);
        echo"<br>";
        $mv1= (false or true);
        echo var_dump($mv1);
        echo"<br>";
        $mv1= (false or false);
        echo var_dump($mv1);

        echo "<br>";
        echo "<u>XOR : </u> ";
        $mv1= (true xor true);
        echo var_dump($mv1);
        echo"<br>";
        $mv1= (true xor false);
        echo var_dump($mv1);
        echo"<br>";
        $mv1= (false xor true);
        echo var_dump($mv1);
        echo"<br>";
        $mv1= (false xor false);
        echo var_dump($mv1);

        echo "<br>";
        echo "<u>NOT : </u> ";
        $mv1= (true != true);
        echo var_dump($mv1);
        echo"<br>";
        $mv1= (true != false);
        echo var_dump($mv1);
        echo"<br>";
        $mv1= (false != true);
        echo var_dump($mv1);
        echo"<br>";
        $mv1= (false != false);
        echo var_dump($mv1);
        echo"<br>";
        echo"<br>";
        echo"<hr>";
        echo"<br>";
        echo"<h1><u>Data Types In PHP</u> : </h1>";
        echo"<br>";
        echo"<u>There are 6 types of Data Types in PHP :- </u><br>
             1 String <br>2 Integer <br> 3 Float <br> 4 Boolean <br> 5 Array <br> 6 Object  ";echo"<br>";
        $v1="This is a string ";
        echo var_dump($v1);
        echo "<br>";
        $v1=25;
        echo var_dump($v1);
        echo "<br>";
        $v1=25.255;
        echo var_dump($v1);
        echo "<br>";
        $v1=True;
        echo var_dump($v1);
        echo "<br>";
        echo "Note: if we want to make any thing to be a constant then we use  <i>define function : </i>
              <br> <b>define('Variable name', value)</b>
             <br> Aways write this at the top of your script..  ";
        
        echo "<Hr>";
        echo"<br>";     
        echo"<h1><u>Conditional Statements In PHP</u> : </h1>"; 
        echo"<br>";
        echo"<hr>";
            
        

         
        
     
         
        
        
      
      
        ?>
    </div>
</body>
</html>