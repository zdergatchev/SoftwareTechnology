<html>
<head>

</head>
<body>
<form>
    Input:
    <br>
    <textarea name="input"></textarea>
    <br>
    Delimiter:
    <br>
    <input type="text" name="delimiter">
    <br>
    <input type="submit">
</form>

<?php
if(isset($_GET['input']) && isset($_GET['delimiter'])) {
    $delimiter = $_GET['delimiter'];
    $lines = $_GET['input'];
    $arr = explode("\n", $lines);
    $arr = array_map('trim', $arr);
    $temp = [];

    for ($i = 0; $i < count($arr); $i++) {
        $student=[];
        $new = explode($delimiter, $arr[$i]);
        $student['Name:'] = $new[0];
        $student['Age:'] = intval($new[1]);
        $student['Grade:'] = doubleval($new[2]);
        $temp[$i]=$student;
    }
    
    for($i=0; $i<count($temp); $i++){
        echo '<ul>';
        foreach($temp[$i] as $key => $value){
            echo'<li>'."{$key} {$value}".'</li>';
        }
        echo '</ul>';
    }
}
?>

</body>
</html>


