---
title: Introduction Backend Development
author: Chencha Jacob <jacob[at]chenchatech.com>
header-includes:
    - \usepackage{fancyhdr}
    - \pagestyle{fancy}
---

\newpage

##What is backend development
- Typically interacts with other machines
- Holds business logic
- Runs on server
![Designing System](https://dl.dropboxusercontent.com/u/56723580/blog/robot_design.jpg)

\newpage

##Why backend development
- Protect your IP
- Runs powerful machines
- Easily scalable (if written right)
- Serve many clients

\newpage


##How
- Code written on remote machine
- Typical languages include PHP, Python, Ruby, Java, JS

\newpage

##Major Areas
- Database 
- Routing
- Queuing
- Validation
- APIs (Interaction with frontend and other applications)

![sqllite](https://dl.dropboxusercontent.com/u/56723580/blog/sqllite_logo.png "SQL Lite Logo")

\newpage


##Tools
- Languages :  PHP, Python, Ruby, Java, JS
- Editors: Netbeans, PHPStorm, SublimeText, VIM
- Frameworks: Laravel, RoR, Django

\newpage
##Install PHP, MySQL, Apache

- Please see [https://www.digitalocean.com/community/tutorials/how-to-install-linux-apache-mysql-php-lamp-stack-on-ubuntu ](https://www.digitalocean.com/community/tutorials/how-to-install-linux-apache-mysql-php-lamp-stack-on-ubuntu "https://www.digitalocean.com/community/tutorials/how-to-install-linux-apache-mysql-php-lamp-stack-on-ubuntu")

- Install POSTMan https://www.getpostman.com/

\newpage

##Task 1 Basic Computation

Create a html/cli program that takes in two numbers and outputs their sum.

\newpage

##Task 1 Sample solution

1. Write out php file with the code
```php
<?php
$sum=$_REQUEST['val1']+$_REQUEST['val2'];
echo $sum;
```
2. Name the file add_two.php
3. Serve the file
```bash
php -S 0.0.0.0:8888 -t . add_two.php
```

\newpage

##Task 2 Sum numbers

Write script that takes in an integer and gives the sum of all numbers preceding it. The number itself inclusive.

eg

Given 5 The system would return 15, (5+4+3+2+1)

\newpage

##Task 2 Suggested solution
```php
<?php
$number=$_REQUEST['number'];
$total=0;

for ($i = 0; $i < $number; $i++) {
        $total+=$i;
}
echo $total;

//Alternative solution
echo "<hr>";
$total=$number * ($number-1) * 0.5;

echo $total;
```

The steps for serving this file are the same as previous

\newpage

##Assignment
Write a php application that accepts comma delimited string  and gives us their average

eg 

Accepts string such as "12,15,25" and prints out 17.33333

\newpage

##Thank You




