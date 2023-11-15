<section id="form_user">
    <div class="form_content">
    <h2>Cadastro de usuário <br><?php echo "<span>".$user_type->getLabel()."</span>" ?></h2>
    <form method="post" action="/user/create/<?php echo $user_type->name ?>">

    <div class="form_field">
      <p>nome:</p>
      <input type="text" name="first_name" required placeholder="e.g. Jhon Doe" />
    </div>

    <div class="form_field">
      <p>sobrenome:</p>
      <input type="text" name="last_name" placeholder="e.g. Smith"/>
    </div>
    
    <div class="form_field">
      <p>telefone:</p>
      <input type="number" name="telephone" placeholder="e.g. 47 1234 5678" />
    </div>
    
    <div class="form_field">
      <p>email:</p>
      <input type="email" name="email" required placeholder="e.g. jhondoe@gmail.com"/>
      <?php showFieldError('email'); ?>
    </div>
   
    
    <div class="form_field date">
      <p>data de nascimento:</p>
      <input type="date" name="born_date" required/>
    </div>
    
    <div class="form_field_radio">
      <h4><input type="radio" name="document_type" value="CPF" checked /> Pessoa Física</h4>
      <h4><input type="radio" name="document_type" value="CNPJ" /> Pessoa Jurídica</h4>
    </div>
    
    <div class="form_field">
      <p>numero do documento:</p>
      <input type="text" name="document_number" required placeholder="e.g. 123.456.789-12"/>
    </div>

    <?php 
      require VIEWS_PATH.$user_type->getForm();
    ?>
    <button type="submit">Cadastrar</button>
    </form>
    </div>
</section>
