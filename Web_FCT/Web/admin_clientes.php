<?php
session_start();
if (!isset($ldap_dn["username"])) {
    header('Location: '."Login.php");
}

?>
