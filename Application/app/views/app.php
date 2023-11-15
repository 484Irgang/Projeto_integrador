<!DOCTYPE html>
<html lang="pt-br">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title><?php echo $title?></title>
  <link rel="stylesheet" type="text/css" href="/assets/styles/app.css" />
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.1/dist/umd/popper.min.js"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
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