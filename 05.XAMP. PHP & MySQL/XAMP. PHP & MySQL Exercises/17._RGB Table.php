<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>First Steps Into PHP</title>
	<style>
		table * {
			border: 1px solid black;
			width: 50px;
			height: 50px;
		}
    </style>
</head>
<body>
<table>
    <tr>
        <td>
            Red
        </td>
        <td>
            Green
        </td>
        <td>
            Blue
        </td>
    </tr>
    <?php
        for ($i = 0; $i <= 255; $i += 51){
            echo "<tr>";
            $color1 = "rgb($i,0,0)";
            $color2 = "rgb(0,$i,0)";
            $color3 = "rgb(0,0,$i)";

            echo "<td style='background-color:$color1'></td>";
            echo "<td style='background-color:$color2'></td>";
            echo "<td style='background-color:$color3'></td>";

            echo "</tr>";
        }
    ?>
</table>
</body>
</html>