<?php
define("BASE_URL", "http://localhost:8888/");

if (!isset($RELATIVE_PATH)) {
    $RELATIVE_PATH = '';
}

if (!isset($page_title)) {
    $page_title = 'Elite Eats - Development Version';
}

if (!isset($stylesheet)) {
  $stylesheet = 'assets/css/style.css';
}
?>

<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8" />
  <meta http-equiv="X-UA-Compatible" content="IE=edge" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title><?=$page_title;?></title>
  <link rel="shortcut icon" href="<?=$RELATIVE_PATH;?>assets/img/favicon.png" type="image/x-icon" />
  <link rel="stylesheet" href="<?=$RELATIVE_PATH . $stylesheet;?>" />
</head>

<body>
  <header>
    <div class="container row-header">
      <div>
        <a href="<?=$RELATIVE_PATH;?>index.php">
          <img src="<?=$RELATIVE_PATH;?>assets/img/elite-eats-logo-white-text-color-icon.png" class="logo" />
        </a>
      </div>
      <nav class="large-screen">
        <ul>
          <li><a href="<?=$RELATIVE_PATH;?>index.php">Home</a></li>
          <li><a href="<?=$RELATIVE_PATH;?>about.php">About</a></li>
          <li><a href="<?=$RELATIVE_PATH;?>services.php">Services</a></li>
          <li><a href="<?=$RELATIVE_PATH;?>contact.php">Contact</a></li>
        </ul>
      </nav>
    </div>
  </header>

  <nav class="small-screen">
    <ul>
      <li><a href="<?=$RELATIVE_PATH;?>index.php">Home</a></li>
      <li><a href="<?=$RELATIVE_PATH;?>about.php">About</a></li>
      <li><a href="<?=$RELATIVE_PATH;?>services.php">Services</a></li>
      <li><a href="<?=$RELATIVE_PATH;?>contact.php">Contact</a></li>
    </ul>
  </nav>