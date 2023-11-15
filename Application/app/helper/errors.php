<?php

function showErrorIfHave(){
  if(isset($_SESSION['error_message'])){
    $message = $_SESSION['error_message'];
    unset($_SESSION['error_message']);
    echo "<div id='toast'>
          <div class='error_image'></div>
          <p>".$message."</p>
        </div>";
  }
  
  return;
}

function saveError($message) {
  $_SESSION['error_message'] = $message;
  return;
}

function saveErrorAndRedirect($message, $to){
  $_SESSION['error_message'] = $message;

  return redirect($to);
}

function showFieldError($field){
  if(isset($_SESSION['error_'.$field])){
    $message = $_SESSION['error_'.$field];
    unset($_SESSION['error_'.$field]);

    echo '<span class="error_field_message">'.$message.'</span>';
  }

  return;
}

function saveErrorFieldAndRedirect($field,$message, $to){
  $_SESSION['error_'.$field] = $message;

  redirect($to);
}