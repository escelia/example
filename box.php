
<!DOCTYPE html>
<html>
<body>

<h1>My first PHP success -  Change</h1>

<?php
$code = intval($_GET['code']);  
$message = "your code is $code";
$message = wordwrap($message, 70);
header('Location: default.html');  
?>

</body>
</html>
