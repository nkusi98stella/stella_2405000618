<!DOCTYPE html>
<html>
<head>
    <title>Document</title>
</head>
<body>
<?php
 $class="University of Academy";
 echo strtoupper($class);
 echo strtolower($class); 
 echo strlen($class);
 echo $class[0];
 $class[0]="T";
 echo $class;
 echo str_replace("University", "Kigali", $class);
 ?>
</body>
</html>