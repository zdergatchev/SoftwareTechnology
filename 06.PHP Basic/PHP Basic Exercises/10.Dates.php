<html>
<head>

</head>
<body>
<form>
    Start Date:
    <br>
    <input type="text" name="date">

    <br>
    Output Format:
    <br>
    <input type="text" name="format">
    <br>
    Commands:
    <br>
    <textarea name="commands"></textarea>
    <br>
    <input type="submit">
</form>

<?php
    if(isset($_GET['commands']) && isset($_GET['date']) && isset($_GET['format'])) {
        $outputFormat = $_GET['format'];
        $startDate = $_GET['date'];
        $commands = $_GET['commands'];

        $date = DateTime::createFromFormat('d/m/Y', $startDate);
        $commands = array_map('trim', explode("\n", $commands));

        for ($i = 0; $i < count($commands); $i++) {
            $commandArgs = explode(" ", $commands[$i]);
            $commands = $commandArgs[0];
            $value = $commandArgs[1];

            if($commands == "add")
            {
                $date -> add(new DateInterval('P'.$value.'D'));
            }
            else
            {
                $date -> sub(new DateInterval('P'.$value.'D'));
            }
         }
        echo $date->format($outputFormat);
    }
?>
</body>
</html>

