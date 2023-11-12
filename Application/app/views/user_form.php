<section id="form_user">
    <div class="form_content">
    <h2>Cadastro de usuário - <?php echo $user_type->getLabel() ?></h2>
    <form method="post" action="/user/create/<?php echo $user_type->name ?>">

    <div class="form_field">
      <p>nome:</p>
      <input type="text" name="first_name" required value="Guilherme" placeholder="exemplo@gmail.com" />
    </div>

    <div class="form_field">
      <p>sobrenome:</p>
      <input type="text" name="last_name" placeholder="Nome de Exemplo"/>
    </div>
    
    <div class="form_field">
      <p>telefone:</p>
      <input type="number" name="telephone" />
    </div>
    
    <div class="form_field">
      <p>email:</p>
      <input type="email" name="email" required value="tainaracs200sc@gmail.com"/>
      <?php showFieldError('email'); ?>
    </div>
   
    
    <div class="form_field">
      <p>data de nascimento:</p>
      <input type="date" name="born_date" value="1999-05-14" required/>
    </div>
    
    <div class="form_field">
      <h4><input type="radio" name="document_type" value="CPF" checked /> Pessoa Física</h4>
      <h4><input type="radio" name="document_type" value="CNPJ" /> Pessoa Jurídica</h4>
    </div>
    
    <div class="form_field">
      <p>numero do documento:</p>
      <input type="text" name="document_number" required value="241414151512"/>
    </div>

    <?php 
      require VIEWS_PATH.$user_type->getForm();
    ?>
    <button type="submit">Cadastrar</button>
  </form>
    </div>
</section>
