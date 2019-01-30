<!DOCTYPE html>

<?php
// HABILITAR UNA COOKIE -> comprobar si una cookie está habilitada o no
setcookie("test_cookie", "test", time() + 3600, '/');
?>
<html>
<body>

<?php
//$_COOKIE es un array asociativo donde se almacenan las cookies, si las cookies estan deshabilitadas $_COOKIE es igual a 0
if(count($_COOKIE) > 0) {
    echo "Cookies HABILITADAS.";
} else {
    echo "Cookies NO HABILITADAS.";
}
?>

</body>
</html> 