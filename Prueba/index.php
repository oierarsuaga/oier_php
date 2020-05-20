<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title></title>
    <style>
    body {text-align: center;}
    form {margin: 0 auto; width: 500px;}
    input {padding: 10px; font-size: 20;}
    </style>
  </head>
  <body>
    <h1>Authentication with Active Directory</h1>
    <form action="ldap.php" method="post">
    <input type="text" name="username" /> <br>
    <input type="password" name="password" /> <br>
    <input type="submit" name="Login"/>
  </form>
  </body>
</html>
