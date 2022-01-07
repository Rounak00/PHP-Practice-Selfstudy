<!--  $VAriable_name;  -->


<!-- ................................................................Operators.................................................... -->
<!-- 
             PHP Arithmetic Operators-> +,-,/,*
             PHP Assignment Operators-> +=,*=,-=,/=,=
             PHP Comparison Operators-> ==,<,>,<=,>=,!=
             PHP Incrementing and Decrementing Operators-> ++$var,$var++,$var--,--$var
             PHP Logical Operators-> And,Or,Xor,!(not),||(we can also right or like this),&&(we can also write and like this)
-->
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP Tutorials</title>
</head>
<body>
    <div class="container">
      <?php
       echo "Hello World";
       echo "<br>"; //for new line
       $var=2;
       echo "$var"; 
      echo "<br>"
      echo var_dump(1==4);//Return if its true or false
      ?>
    </div>
</body>
</html>

<!-- NB: no matter how many time we use a variable but always use $ sign -->

<!-- .............DataTypes.................. -->
<!-- 
Data type is the classification of data into a category.

Alphanumeric characters are classified as strings.
Whole numbers are classified as integers.
Numbers with decimal points are classified as floating points.
True or false values are classified as Boolean.
Collection of similar types of elements are called Array.
An object is a specific instance of a class that serves as templates for objects.
 
for show the type of any variable we again use var_dumo($var); and it display type(value) onloy for string in the section of value it shows string size
-->


<!--  PHP Constant
Just by the name,
 we can understand that constant is something whose value cannot be changed. 
It is basically an identifier. A good practice is always to define it in the starting.
Use like this->

define(name, value);

in then code we can use that name without $ sign
-->
