<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>All Caps Words</title>
</head>
<body>

<?php
    if (isset($_GET['text'])){
        $text = $_GET['text'];
        preg_match_all('/\w+/', $text, $words);
        $words = $words[0];
        $upperWords = array_filter($words, 'isUpperCaseWord');
        echo implode(', ',$upperWords);
    }

    function isUpperCaseWord($word){
        return strtoupper($word) == $word;
    }
?>

    <form>
        <textarea rows="20" name="text"></textarea>
        <br>
        <input type="submit">
    </form>

</body>
</html>