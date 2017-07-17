<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>N Factorial</title>

</head>
<body>
<form>
    N: <input type="text" name="num" />
    <input type="submit" value="Submit"/>
</form>
<?php
if(isset($_GET['num'])) {
    $n = intval($_GET['num']);
    $result=1;
    for($i = 1; $i <= $n; $i++) {
        $result*=$i;

    }
    echo "$result";
}
?>
</body>
</html>