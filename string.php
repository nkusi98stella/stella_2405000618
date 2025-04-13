<!DOCTYPE html>
<html>
<head>
    <title>work</title>
</head>
<body>
    <?php
    $sentence="The main body of book";
    echo strtoupper($sentence);
    echo strtolower($sentence); 
    echo strlen($sentence);
    echo $sentence[0];
    $sentence[0]="m";
    echo $sentence;
    echo str_replace("book", "college", $sentence);



    ?>
</body>
</html>