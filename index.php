<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Title</title>
</head>
<body>
<?php

$hello = "Hello world!";
echo $hello;

echo "<br> <br>";

$table = ["first ", "second", "third", "fourth"];
for($i = 0; $i < count($table)-1; $i++){
    echo " un truc! <br>";
}
?>

<ul></ul>   <?php

foreach ($table as $elem) {
    echo $elem . "<br>";
}
?>





</body>
</html>