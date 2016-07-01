<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>First Steps Into PHP</title>
</head>
<body>
    <?php
        for ($i = 1; $i <= 5; $i++){
            echo "<button style='background-color: blue;'>1</button>";
        }
        echo "<br>";
        for ($j =1; $j <=3; $j++){
            echo "<button style='background-color: blue;'>1</button>";
            for ($i = 1; $i <= 4; $i++){
                echo "<button>0</button>";
            }
            echo "<br>";
        }
        for ($i = 1; $i <= 5; $i++){
            echo "<button style='background-color: blue;'>1</button>";
        }
        echo "<br>";
        for ($j =1; $j <=3; $j++){
            for ($i = 1; $i <= 4; $i++){
                echo "<button>0</button>";
            }
            echo "<button style='background-color:blue;'>1</button>";
            echo "<br>";
        }
        for ($i = 1; $i <= 5; $i++){
            echo "<button style='background-color: blue;'>1</button>";
        }
    ?>
</body>
</html>