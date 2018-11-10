<!DOCTYPE html>
<html>
<body>

<h1>My first PHP success</h1>

<?php
$message = "truer words have never been written";
$message = wordwrap($message, 70);
mail('zbatool@brynmawr.edu','Zainab is the bestest',$message);
header('Location: box.php');
?>

</body>
</html>
