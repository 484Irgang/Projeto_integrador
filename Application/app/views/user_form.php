<section id="form_user">
    <div class="form_content">
    <h2><?php echo isset($user) ? 'Edição' : 'Cadastro' ?> de usuário <br><?php echo "<span>".$user_type->getLabel()."</span>" ?></h2>
    <form method="post" action="/user/create/<?php echo $user_type->name ?>">

    <div class="form_field">
      <p>nome:</p>
      <input type="text" name="first_name" value="<?php returnField($user ?? null, 'first_name') ?>" required placeholder="e.g. Jhon Doe" />
    </div>

    <div class="form_field">
      <p>sobrenome:</p>
      <input type="text" name="last_name" value="<?php returnField($user ?? null, 'last_name') ?>" placeholder="e.g. Smith"/>
    </div>
    
    <div class="form_field">
      <p>telefone:</p>
      <input type="number" name="telephone" value="<?php returnField($user ?? null, 'telephone') ?>" placeholder="e.g. 47 1234 5678" />
    </div>
    
    <div class="form_field">
      <p>email:</p>
      <input type="email" name="email" value="<?php returnField($user ?? null, 'email') ?>" required placeholder="e.g. jhondoe@gmail.com"/>
      <?php showFieldError('email'); ?>
    </div>
   
    
    <div class="form_field date">
      <p>data de nascimento:</p>
      <input type="date" name="born_date" value="<?php returnField($user ?? null, 'born_date') ?>" required/>
    </div>
    
    <div class="form_field_radio">
      <h4><input type="radio" name="document_type" value="CPF" <?php echo returnCheckedOrSelected($user ?? null, 'document_type', 'CPF', 'checked')?> /> Pessoa Física</h4>
      <h4><input type="radio" name="document_type" value="CNPJ" <?php echo returnCheckedOrSelected($user ?? null, 'document_type', 'CNPJ', 'checked')?>/> Pessoa Jurídica</h4>
    </div>
    
    <div class="form_field">
      <p>numero do documento:</p>
      <input type="text" name="document_number" value="<?php returnField($user ?? null, 'document_number') ?>" required placeholder="e.g. 123.456.789-12"/>
    </div>

    <?php 
      require VIEWS_PATH.$user_type->getForm();
    ?>
    <button type="submit"><?php echo isset($user) ? 'Atualizar' : 'Cadastrar' ?></button>
    </form>
    </div>
</section>