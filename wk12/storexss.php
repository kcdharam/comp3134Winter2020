<!DOCTYPE html>
<html>
<body>

<?php
$file1 = fopen("./storedxss.txt", "r") or die("Unable to open file!");
var_dump($file1);

while(!feof($file1)) {
    echo fgets($file1) . "<br>";
    var_dump( fgets($file1) . "<br>");
    echo("one");
}
echo ("two");
fclose($file1);
?>

</body>
</html>