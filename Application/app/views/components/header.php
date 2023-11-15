<section id="header_container">
  <h2>Olá, <?php echo $_SESSION['LOGGED']->first_name?></h2>

  <ul>
    <li><a href="/home">home</a></li>
    <li><a href="/user/all">usuários</a></li>
    <li><a href="/login/destroy">log out</a></li>
  </ul>
</section>