<!DOCTYPE html>
<html>
<body>

<h1>My first PHP page</h1>

<?php
$message = "hi";
$message = wordwrap($message, 70);
mail('zbatool@brynmawr.edu','VIBRATOR MADNESS',$message);
header('Location: box.php')
?>

</body>
</html>
