<!DOCTYPE html>
<?php
// BORRAR UNA COOKIE -> establecer una fecha expiración del pasado con función setcookie

// set the expiration date to one hour ago, la cookie se borra con el tiempo de vida es negativa.
setcookie("contador", "", time() - 3600);
?>
<html>
<body>

<?php
echo "Cookie 'usuario' BORRADA.";
?>

</body>
</html> 