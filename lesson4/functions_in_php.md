---
title: Functions 
author: Chencha Jacob <jacob[at]chenchatech.com>
header-includes:
    - \usepackage{fancyhdr}
    - \pagestyle{fancy}
---

\newpage

##Syntax of a function

```php
function name($arg1,$arg2) {
 statement1;
 statement2;
}
```

- Function names are case insensitive
- Use meaningful names
- Not called automatically
- Definition order does not matter

\newpage

##Function arguments

```php

<?php

function say_hello_to($name){
    echo "Hey {$name}! <br/>";
}

$name="class";
say_hello_to($name);
```

- Arguments are scoped as local variables

```php
function say_hello_with_title($name,$title="Honorable"){
       echo "Hey {$title} {$name} ";
}

$name="Anna";
$title="Ms";

say_hello_with_title($name,$title);
```

- Argument order must be maintained
- Predefined arguments must appear last


\newpage

##Returning values

```php
<?php

function sum_over($val1,$val2){
        return $val1 + $val2; 
        }

        $val1=5;
        $val2=10;
```
- Provides more flexibility
- Easily testable (Try *assert*)
- Always return a value
- Function will stop executing immediately

```php

<?php

function sum_over($val1,$val2){
        return $val1 + $val2; 
}

$val1=5;
$val2=10;

echo $val1 + $val2;

```

- You must print out externally


\newpage

##Using functions inline

```php

function chinese_zodiac($year){
        switch (($year-4)%12) {
                case 0: return 'Rat';
                case 1: return 'Ox';
                case 2: return 'Tiger';
                case 3: return 'Rabbit';
                case 4: return 'Dragon';
                case 5: return 'Snake';
                case 6: return 'Horse';
                case 7: return 'Goat';
                case 8: return 'Monkey';
                case 9: return 'Rooster';
                case 10: return 'Dog';
                case 11: return 'Pig';
                        
        }
}

echo "2015 is the year of " . chinese_zodiac(2015);
```

\newpage

##Complex return values

```php
<?php

function stats(array $values){
        $results=["min"=>min($values),"max"=>max($values),
        "average"=>array_sum($values)/count($values)];
        return $results;

}

$values=[5,7,8];
$results=stats($values);
var_dump($results);
```
- Return more than one result
- Perform multiple related operations
- Can you format the results?


\newpage

##Assignment

- Write a function that calculates area of a triangle given its base and height
- Write a function that calculates area of a circle given its radius
- Write a function that calculates area and circumference of a circle given its radius



