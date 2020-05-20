<?php

    $ldap_dn = "uid=".$_POST["username"].",dc=example,dc=com";
    $ldap_password = $_POST["password"];

    $ldap_con = ldap_connect("ldap.forumsys.com");
    ldap_set_option($ldap_con, LDAP_OPT_PROTOCOL_VERSION, 3);

    if (@ldap_bind($ldap_con, $ldap_dn, $ldap_password)) {
      header('Location:admin_clientes.php');
      //echo "Authenticated";
    } else {
      echo "Invalid Credential";
    }

 ?>
