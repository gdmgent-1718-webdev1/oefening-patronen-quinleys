<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <title>Document</title>
    <link rel="stylesheet" href="screen.css">
</head>

<body>
   

    <?php
    
    for($i=1;$i<=9;$i++){
        for($j=0;$j<=9;++$j){
            echo '<div class="dotFilled"></div>'.'&nbsp;';
        }
        echo "<br>";

    }
    
    ?>
</body>

</html>
