<!DOCTYPE html>
<html>
<body>

<h1>My first PHP success</h1>

<?php
$code = intval($_GET['code']);  
$message = "your code is $code";
$message = wordwrap($message, 70);
mail('zbatool@brynmawr.edu','Zainab is the bestest',$message);
header('Location: box.php');  
print "code is $code";
?>

</body>
</html>
