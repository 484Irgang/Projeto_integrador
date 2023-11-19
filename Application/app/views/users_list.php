<section id="container_list">
  <?php
    foreach($users as $user){
      echo '<div id="box-card">
      <h2>'.returnUserName($user).'</h2>
      <h3>'.returnUserType($user).'</h3>
  
      <div id="field">
        <p>Nascimento: <span>'.returnUserBorn($user).'</span></p>
      </div>
  
      <div id="field">
        <h3>Contatos</h3>
        <p>Telefone: <span>'.returnTelephone($user).'</span></p>
        <p>Email: <span>'.returnEmail($user).'</span></p>
      </div>
  
      <div id="field">
        <h3>'.returnUserDocument($user).'</h3>
        <p>Documento: <span>'.returnDocumentNumber($user).'</span></p>
      </div>
      '.returnUserTypeInfo($user).'
      <div id="buttons">
        <a href="/user/delete/'.$user->id.'"><button>Excluir</button></a>
        <a  href="/user/update/'.$user->id.'"><button>Editar</button></a>
      </div>
    </div>';
    }
  ?>
</section>