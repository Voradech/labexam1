<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP Variable via reference</title>
</head>
<body>
    <?php
    function addFive($num)
    {
        $num += 5;
    }

    function addSix(&$num)
    {
        $num += 6;
    }
    $orignum =10;
    addFive($orignum);
    echo"Original is $orignum";
    echo "<br>";
    addSix($orignum);
    echo"Original is $orignum";
    
    ?>
    
</body>
</html>