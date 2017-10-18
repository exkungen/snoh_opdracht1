<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Title</title>
</head>
<body>
<form method="post" action="">
<label for="email">Email:</label>
<input id="email" value="Email" type="text" name="email"/>



<input type="submit" value="SUBMIT">

</form>
<?php
$email = $_POST['email'];


if(filter_var($email, FILTER_VALIDATE_EMAIL)) {
    echo  '<p> Dit is een geldig email adress :)';
}

else {
    echo '<p>Dit is geen geldig email adress :(</p>';
}



?>
</body>
</html>