<?php

require 'header.php';

if (isset($_GET['id'])) {
  $_SESSION["id"] = $_GET['id'];
  $_SESSION["ap"] = $_GET['ap'];
}

?>

<!doctype html>
<html>

<head>
  <meta charset="utf-8">
  <title>HKHC</title>
  <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no" />
  <link rel="icon" type="image/png" href="../assets/images/favicomatic/favicon-32x32.png" sizes="32x32" />
  <link rel="icon" type="image/png" href="../assets/images/favicomatic/favicon-16x16.png" sizes="16x16" />
  <link rel="stylesheet" href="../assets/styles/style.css" />
  <link rel="stylesheet" href="../assets/styles/bulma.min.css" />
</head>

<body>
  <div class="bg">

    <figure id="logo">
      <img src="../assets/images/logo.png">
    </figure>

    <br>

  <form id="form_login" method="post" action="connect.php">
    <div class="control has-text-centered">
      <button class="button is-danger">Accept & Continue</button>
    </div>
  </form>

  </div>

</body>
</html>