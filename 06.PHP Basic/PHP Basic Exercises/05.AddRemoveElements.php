<html>
<head>

</head>
<body>
    <form>
        Delimiter: <input type="text" name="delimiter">
        Input: <textarea name="commands"></textarea>
        <input type="submit">
    </form>


    <?php
        if(isset($_GET['commands']) && isset($_GET['delimiter'])) 	   {
            $commands = $_GET['commands'];
            $delimiter = $_GET['delimiter'];
            $arr = explode("\n", $commands);
            $arr = array_map('trim', $arr);

            $temp = [];
            
            for ($i = 0; $i < count($arr); $i++) {
                $new = explode($delimiter, $arr[$i]);
                $command = $new[0];
                $value = $new[1];
                
                if($command == "add")
                {
                    array_push($temp, $value);                    
                }
                if($command == "remove")
                {
                    array_splice($temp, $value, 1);                    
                }
            }

            foreach($temp as $item){
                echo "$item<br>";
            }            
        }
    ?>

</body>
</html>


