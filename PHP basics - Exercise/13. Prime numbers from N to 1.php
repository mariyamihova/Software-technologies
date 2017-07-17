<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Prime numbers</title>

</head>
<body>
<form>
    N: <input type="text" name="num" />
    <input type="submit" />
</form>

<?php
if(isset($_GET['num'])) {
    $num = intval($_GET['num']);
    for($i= $num; $i>=2; $i--) {
        $isPrime = true;
        for($j = 2; $j <= sqrt($i); $j++) {
            if($i % $j == 0) {
                $isPrime = false;
            }
        }
        if($isPrime) {
            echo $i . " ";

        }
    }
}
?>
</body>
</html>