<html>
<head>

</head>
<body>
<?php
if(isset($_GET['delimiter'])&&isset($_GET['input'])) {
    $delimiter = $_GET['delimiter'];
    $arr = explode("\n", $_GET['input']);
    $data = array();
    for ($i=0; $i < count($arr) ; $i++) {
        $temp = explode($delimiter, $arr[$i]);
        $temp = array_map('trim', $temp);
        if ($temp[0]!=""&&$temp[1]!=null) {
            if (is_numeric($temp[1])) {
                $temp[1] = doubleval($temp[1]);
            }
            $data[$temp[0]] = $temp[1];
        }
    }
    $jsonobj = json_encode($data, JSON_UNESCAPED_SLASHES);
    echo $jsonobj;
}
?>
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
</body>
</html>



