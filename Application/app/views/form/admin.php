<div class="form_field">
  <p>senha:</p>
  <input type="password" name="password" id="password_input" value="<?php returnField($user ?? null, 'password')?>" required/>
  <button onclick="fadePassword(event)" id="eye_button"></button>
</div>
<script>
  function fadePassword(event){
    event.preventDefault();
    const password_input = document.querySelector("#password_input");
    return password_input.type = password_input.type === 'password' ? 'text' : 'password';
  }
</script>