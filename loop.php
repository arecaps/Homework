<html>
<head></head>
<body>
<form action="loop.php" method="POST">
Print all the squares between 1 and <input type="text" name="limit" size="4" maxlength="4">
<input type="submit" name="submit" value="Go">
</form>
<?php

// set variables from form input
$upperLimit = $_POST['limit'];
$lowerLimit = 1;

// keep printing squares until lower limit = upper limit
while ($lowerLimit <= $upperLimit) {
    echo ($lowerLimit * $lowerLimit).'&nbsp;';

    $lowerLimit++;
}
// print end marker
echo 'END';
?>
</body>
</html>


