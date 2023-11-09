<?php
  require './bootstrap.php';

  try {
    $routerData = router();
    
    if(!isset($routerData['view'])) {
      throw new Exception("Não foi possível encontrar o valor do view");
    }
    
    if(!file_exists(VIEWS_PATH.$routerData['view'])){
      throw new Exception("Não existe essa página");
    }

    if(isset($routerData['props'])) {
      extract($routerData['props']);
    }
    $title = $routerData['title'];
    $view = $routerData['view'];
    $style_file = $routerData['style_file'];
    require VIEWS_PATH.'app.php';
  }
  catch(Exception $e){
    echo $e->getMessage();
  }
?>