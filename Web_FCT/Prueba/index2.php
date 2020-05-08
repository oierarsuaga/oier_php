<?php

    $ldap_dn = "cn=read-only-admin,dc=example,dc=com";
    $ldap_password = "password";

    $ldap_con = ldap_connect("ldap.forumsys.com");

    ldap_set_option($ldap_con, LDAP_OPT_PROTOCOL_VERSION, 3);

    if (ldap_bind($ldap_con, $ldap_dn, $ldap_password)) {

          $filter = "(uid=*)";
          $result = ldap_search($ldap_con, "dc=example,dc=com", $filter) or exit("unable to search");
          $entries = ldap_get_entries($ldap_con, $result);

          print "<pre>";
          print_r ($entries);
          print "</pre>";
    } else {
          echo "Invalid user/pass or other errors";
    }


 ?>
