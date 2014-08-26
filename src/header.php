<?php

include 'inc/variables.php';

?>
<!doctype html>
<html lang="nl">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0, minimum-scale=1.0, maximum-scale=1.0, user-scalable=no">
  <link rel="stylesheet" href="<?php echo $template_directory; if ($dev) { echo '/css/main.css'; } else { echo '/css/main.min.css'; } ?>">
  <script src="<?php echo $template_directory;?>/lib/jquery-2.1.1.min.js"></script>
</head>
<body>
