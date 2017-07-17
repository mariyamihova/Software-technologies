<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>First Steps Into PHP</title>
</head>
<body>
<?php
for($i=0;$i<5;$i++){
    echo"<button style='background-color: blue'>1</button>";
}
echo "<br>";
for ($k=0;$k<3;$k++){
for($j=0;$j<5;$j++){
    if($j==0){
        echo"<button style='background-color: blue'>1</button>";
    }else{
        echo"<button>0</button>";
    }

}
    echo "<br>";
}
for($i=0;$i<5;$i++){
    echo"<button style='background-color: blue'>1</button>";
}
echo "<br>";
for ($k=0;$k<3;$k++){
    for($j=0;$j<5;$j++){
        if($j==4){
            echo"<button style='background-color: blue'>1</button>";
        }else{
            echo"<button>0</button>";
        }

    }
    echo "<br>";
}
for($i=0;$i<5;$i++){
    echo"<button style='background-color: blue'>1</button>";
}
?>
</body>
</html>