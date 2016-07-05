<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Document</title>
</head>
<body>
<?php
    if(isset($_GET['lines'])){
        $lines = $_GET['lines'];
        $arr = explode("\n", $lines);
        $arr = array_map('trim',$arr);
        for ($i = 0; $i < count($arr); $i++){
            if($arr[$i] == 'Stop'){
                break;
            }
            echo $arr[$i].'<br>';
        }
    }
?>

<form>
    Input:<textarea rows="5" name="lines"></textarea>
    <input type="submit">
</form>

</body>
</html>