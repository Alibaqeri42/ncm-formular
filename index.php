
<?php
require_once 'engine/do-resgister.php';

?>

<!DOCTYPE html>
<html lang="">
<head>
    <title>Kontaktformular</title>
    <link rel="stylesheet" type="text/css" href="style.css">
</head>
<body>

<div id="users">
    <form action="index.php" method="post">
        <input type="text" name="display-name" class="input" Placeholder="Name"><br>
        <input type="email" name="email" class="input" Placeholder="E-mail"><br>
        <input type="password" name="password" class="input" Placeholder="Password"><br>
        <input type="password" name="password-conf" class="input" Placeholder="Password-conform"><br>



        <input type="submit" name="do" value="Registrieren">
    </form>
</div>

</body>
</html>
