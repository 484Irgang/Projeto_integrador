<!DOCTYPE html>
<html lang="pt-br">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title><?php echo $title?></title>
  <link rel="stylesheet" type="text/css" href="/assets/styles/app.css" />
  <?php 

    echo '<link rel="stylesheet" type="text/css" href="/assets/styles/'.$style_file.'" />'
  ?>
</head>
<body>
  <?php 
    require VIEWS_PATH.$view;
    showErrorIfHave();
    showSuccessIfHave();
  ?>
</body>
</html>