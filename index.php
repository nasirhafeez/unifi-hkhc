<?php
session_start();

require __DIR__ . '/vendor/autoload.php';

$dotenv = Dotenv\Dotenv::createImmutable(__DIR__ . "/../");

$dotenv->load();

include 'parameters.php';

$_SESSION["mac"] = $_GET["id"];
$_SESSION["ap"] = $_GET["ap"];

?>

<!doctype html>
<html>

<head>
  <meta charset="utf-8">
  <title>HKHC</title>
  <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no" />
  <link rel="stylesheet" href="bulma.min.css" />
  <link rel="icon" type="image/png" href="favicomatic\favicon-32x32.png" sizes="32x32" />
  <link rel="icon" type="image/png" href="favicomatic\favicon-16x16.png" sizes="16x16" />
  <link rel="stylesheet" href="style.css" />
</head>

<body>
  <div class="bg">

    <figure id="logo">
      <img src="logo.png">
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