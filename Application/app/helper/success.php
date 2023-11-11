<?php

function showSuccessIfHave(){
  if(isset($_SESSION['success_message'])){
    $message = $_SESSION['success_message'];
    unset($_SESSION['success_message']);
    echo "<div id='toast'>
          <div class='success_image'></div>
          <p>".$message."</p>
        </div>";
  }
  
  return;
}

function saveSuccessAndRedirect($message, $to){
  $_SESSION['success_message'] = $message;

  return redirect($to);
}