<section>
  <h2>Cadastro de usuário - <?php echo $user_type->getLabel() ?></h2>
  <form method="post" action="/user/create/<?php echo $user_type->name ?>">
    <input type="text" name="first_name" required value="Guilherme" />
    <input type="text" name="last_name" />
    <input type="text" name="telephone" />
    <input type="email" name="email" required value="tainaracs200sc@gmail.com"/>
    <?php showFieldError('email'); ?>
    <input type="date" name="born_date" required/>
    <p><input type="radio" name="document_type" value="CPF" checked /> Pessoa Física</p>
    <p><input type="radio" name="document_type" value="CNPJ" /> Pessoa Jurídica</p>
    <input type="text" name="document_number" required value="241414151512"/>
    <?php 
      require VIEWS_PATH.$user_type->getForm();
    ?>
    <button type="submit">Cadastrar</button>
  </form>

</section>
