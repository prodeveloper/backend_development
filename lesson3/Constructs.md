---
title: Basic constructs in PHP 
author: Chencha Jacob <jacob[at]chenchatech.com>
header-includes:
    - \usepackage{fancyhdr}
    - \pagestyle{fancy}
---

\newpage


## Months of the year

Our goal today is to generate this output
```
January - 31 days
February - 28 days
March - 31 days
April - 30 days
May - 31 days
June - 30 days
July - 31 days
August - 31 days
September - 30 days
October - 31 days
November - 30 days
December - 31 days

That is the number of days in a month for the current year.

```
\newpage

##Loop to generate generic date each month

```php
<?php

$months= ["January","February","March","April","May","June",
"July","August","September","October","November","December"];

foreach ($months as $month) {
        $firstDateInMonth="1st " . "{$month} " . date("Y");
        echo $firstDateInMonth;
}
```

\newpage

##Generating days of the month

```php
<?php

$months= ["January","February","March","April","May","June",
"July","August","September","October","November","December"];

foreach ($months as $month) {
        $firstDateInMonth="1st " . "{$month} " . date("Y");
        $dayAsTimeStamp=strtotime($firstDateInMonth);
        $dayInMonth=date("t",$dayAsTimeStamp);
        echo $dayInMonth;
}

```

\newpage

##Formatting the date

```php
<?php
$months= ["January","February","March","April","May","June",
"July","August","September","October","November","December"];

foreach ($months as $month) {
        $firstDateInMonth="1st " . "{$month} " . date("Y");
        $dayAsTimeStamp=strtotime($firstDateInMonth);
        $dayInMonth=date("t",$dayAsTimeStamp);
        echo "{$month} - {$dayInMonth} </br>";

}
```
\newpage

##Reusing Code

Our code so far works and gives the desired output. However suppose we wanted to know the number of days in a month given the month?


\newpage

##Roping in functions

```php
<?php

$months= ["January","February","March","April","May","June",
"July","August","September","October","November","December"];

foreach ($months as $month) {
        $dayInMonth=daysOfMonth($month);
        echo "{$month} - {$dayInMonth} </br>";

}


function daysOfMonth($month){
        $firstDateInMonth="1st " . "{$month} " . date("Y");
        $dayAsTimeStamp=strtotime($firstDateInMonth);
        $dayInMonth=date("t",$dayAsTimeStamp);
        return $dayInMonth;
}
```
Now we have neatly packed this bit of logic into a function that we can use another day. 

As an exercise, try think of how you could make the exercise more robust.

\newpage

##Sample Usage

```php

<?php
$month=$_REQUEST["month"];
$dayInMonth=daysOfMonth($month);
echo "This month has $dayInMonth";
function daysOfMonth($month){
        $firstDateInMonth="1st " . "{$month} " . date("Y");
        $dayAsTimeStamp=strtotime($firstDateInMonth);
        $dayInMonth=date("t",$dayAsTimeStamp);
        return $dayInMonth;
}
```
\newpage

##End of month pains

Now let us suppose that we get broke on 29th and salary checks in on 1st. Then for days with 31 days we would be in a sorry state. We would like to have a system that prints out status of our wallet. 

Something like


January - Broke 
February - Good
March - Broke
April - Good
May - Broke
June - Good
July - Broke
August - Broke
September - Good
October - Broke
November - Good
December - Broke

How do you suppose we would impliment something of this sort?

\newpage

##Teaching your computer to decide
```php
<?php
$months= ["January","February","March","April","May","June",
"July","August","September","October","November","December"];
foreach ($months as $month) {
        $dayInMonth=daysOfMonth($month);
        if($dayInMonth > 30){

                echo "{$month} - Broke </br>";
        }
        else {

                echo "{$month} - Good </br>";
        }

}


function daysOfMonth($month){
        $firstDateInMonth="1st " . "{$month} " . date("Y");
        $dayAsTimeStamp=strtotime($firstDateInMonth);
        $dayInMonth=date("t",$dayAsTimeStamp);
        return $dayInMonth;
}


```

\newpage

##Assignment

Write a PHP script that shows the day of the week for the last day of the month.

Eg

January first day was Thursday
February first day was Sunday

etc
