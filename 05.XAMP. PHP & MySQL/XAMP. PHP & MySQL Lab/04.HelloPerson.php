<!doctype html>
<html>
<head>
    <meta charset="UTF-8">
    <title>HelloPerson</title>
</head>
<body>

<?php
    if (isset($_GET['person'])) {
        $person = htmlspecialchars($_GET['person']);
        echo "Hello, $person!";
    }
    else {
?>
<form>
    Name: <input type="text" name="person" />
    <input type="submit" />
</form>

<?php } ?>

</body>
</html>