<html>
<head>

</head>
<body>
<form>
    Delimiter: <input type="text" name="delimiter">
    Input: <textarea name="key-value-pairs"></textarea>
    Target Key: <input type="text" name="target-key">
    <input type="submit">
</form>

<?php
if(isset($_GET['key-value-pairs']) && isset($_GET['delimiter']) && isset($_GET['target-key'])) {
    $delimiter = $_GET['delimiter'];
    $lines = $_GET['key-value-pairs'];
    $arr = explode("\n", $lines);
    $arr = array_map('trim', $arr);
    $target = $_GET['target-key'];
    $temp = [];

    for ($i = 0; $i < count($arr); $i++) {
        $new = explode($delimiter, $arr[$i]);
        $index = $new[0];
        $value = $new[1];
        if (isset($temp[$index])){
            array_push($temp[$index], $value);

        } else {
            $temp[$index] = [];
            array_push($temp[$index], $value);
        }
    }
    
    if (array_key_exists($target, $temp)) {        
        echo implode("<br>", $temp[$target]);

    }else {
        echo "None";
    }
}
?>
</body>
</html>

