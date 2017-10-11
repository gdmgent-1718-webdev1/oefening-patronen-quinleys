<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <title>Document</title>
    <link rel="stylesheet" href="screen.css">
</head>

<body>
   

    <?php
    
    $k=1;
    for($i=0;$i<9;$i++){
        for($j=1;$j<=$i;$j++){
            echo '<div class="dotFilled"></div>'.'&nbsp;';
            $k++;
        }
        echo "<br>";
    }

    
    ?>
</body>

</html>
