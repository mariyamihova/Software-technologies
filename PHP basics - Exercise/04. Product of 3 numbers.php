<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Product of 3 numbers</title>

</head>
<body>
<form>
    N: <input type="text" name="num1" />
    M: <input type="text" name="num2" />
    L: <input type="text" name="num3" />
    <input type="submit" value="Submit" />
</form>
<?php
if (isset($_GET['num1'])&&(isset($_GET['num2']))&&(isset($_GET['num3']))){
    $n=intval($_GET['num1']);
    $m=intval($_GET['num2']);
    $l=intval($_GET['num3']);
    if ($n==0||$m==0||$l==0){
        echo "Positive";
    }else{
        $counter=0;
        if($n<0){
            $counter++;
        }
        if($m<0){
            $counter++;
        }
        if($l<0){
            $counter++;
        }

        if($counter%2==0){
            echo"Positive";
        }else{
            echo "Negative";
        }
    }
}
?>
</body>
</html>