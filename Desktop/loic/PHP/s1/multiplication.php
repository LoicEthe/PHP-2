<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Table multiplication</title>
</head>
<body>
    <table>
        <?php
        echo "<tr>";
        for($i=1 ; $i <=10 ; $i++){
            for($j=1 ; $j <=10 ; $j++){
                echo "<td>";
                echo $i*$j;
                echo "</td>";
            }
            echo "</tr>";
        }
        ?>
    </table>
</body>
</html>