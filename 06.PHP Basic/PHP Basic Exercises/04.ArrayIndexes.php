<html>
<head>

</head>
<body>
    <form>
        Delimiter: <input type="text" name="delimiter">
        Array-size: <input type="text" name="array-size">
        Input: <textarea name="key-value-pairs"></textarea>
        <input type="submit">
    </form>

    <?php
    
        if(isset($_GET['key-value-pairs']) && isset($_GET['delimiter']) && isset($_GET['array-size'])) {
            $delimiter = $_GET['delimiter'];
            $lines = $_GET['key-value-pairs'];
            $arr = explode("\n", $lines);

            $arr = array_map('trim', $arr);
            $size = $_GET['array-size'];
            $temp = [];
            for ($i = 0; $i < $size; $i++) {
                $temp[$i] = 0;
            }

            for ($i = 0; $i < count($arr); $i++) {
                $new = explode($delimiter, $arr[$i]);
                $index = $new[0];
                $value = $new[1];
                $temp[$index] = $value;
            }

            for ($i = 0; $i < $size; $i++) {
                echo $temp[$i] . '<br>';
            }
        }
    ?>


</body>
</html>
