<?php

function showErrorIfHave(){
  if(isset($_SESSION['error_message'])){
    $message = $_SESSION['error_message'];
    unset($_SESSION['error_message']);
    echo "<div id='error_toast'>
          <div class='error_image'></div>
          <p>".$message."</p>
        </div>";
  }
  
  else return;
}