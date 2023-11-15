<!DOCTYPE html>
<html lang="pt-br">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title><?php echo $title?></title>
  <link rel="stylesheet" type="text/css" href="/assets/styles/app.css" />
  <link rel="icon" type="image/x-icon" href="/assets/img/favicon.ico">
  <?php 

    echo '<link rel="stylesheet" type="text/css" href="/assets/styles/'.$style_file.'" />'
  ?>
</head>
<body>
  <div id="root">
  <?php
    if($view !== 'login.php') {
      require VIEWS_PATH.'components/header.php';
    }
  ?>
  <?php
    require VIEWS_PATH.$view;
    showErrorIfHave();
    showSuccessIfHave();
  ?>
  </div>
</body>
</html>