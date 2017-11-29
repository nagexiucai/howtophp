<?php
// https://github.com/nagexiucai/howtophp

session_start();

$_SESSION["username"] = 9527;

foreach ($_SESSION as $key=>$value) {
    echo $key . "=>" . $value . "<br/>";
}

foreach ($_COOKIE as $key=>$value) {
    echo $key . "=>" . $value . "<br/>";
}

foreach ($_GET as $key=>$value) {
    echo $key . "=>" .$value . "<br/>";
}

if (isset($_GET["password"])) {
    echo "password hashed by default is " . password_hash($_GET["password"], PASSWORD_DEFAULT) . "<br/>";
    echo "password hashed by bcrypt is " . password_hash($_GET["password"], PASSWORD_BCRYPT) . "<br/>";
}

echo password_hash("nagexiucai.com", PASSWORD_DEFAULT) . "<br/>";
echo password_hash("nagexiucai.com", PASSWORD_BCRYPT) . "<br/>";

password_verify("nagexiucai.com", "$2y$10$fjX.v43XmlP1OpS5r3C0/usTWedIkLS0PF3CG3WCNf/TttpJZhaui");