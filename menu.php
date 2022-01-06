<style>
    .offcanvas-end{
    background-color: black;
    }
</style>

<nav class="navbar navbar-dark bg-dark fixed-top">
  <div class="container-fluid text-center">
    <a class="navbar-brand" href="index.php">Sistema</a>
        
    <div class="btn-group btn-group-lg" role="group" aria-label="Basic example">
        <a href='../index.php' class="btn btn-success  link-light" role="button" aria-disabled="true">Home</a>
        <a href='index.php' class="btn btn-transparent  link-light" role="button" aria-disabled="true">Comunidades</a>
        <a href='salvar.php' class="btn btn-transparent  link-light" role="button" aria-disabled="true">Programação</a>
        <a href='pesquisa.php' class="btn btn-transparent  link-light" role="button" aria-disabled="true">Pesquisar</a>
    </div>
    <button class="navbar-toggler" type="button" data-bs-toggle="offcanvas" data-bs-target="#offcanvasNavbar" aria-controls="offcanvasNavbar">
      <span class="navbar-toggler-icon"></span>
    </button>

    <div class="offcanvas offcanvas-end" tabindex="-1" id="offcanvasNavbar" aria-labelledby="offcanvasNavbarLabel">
      <div class="offcanvas-header">
        <h3 class="text-center text-white">Menu</h3>
        <button type="button" class="btn-close btn-close-white" data-bs-dismiss="offcanvas" aria-label="Close"></button>
      </div>
      <div class="offcanvas-body text-center">
        <ul class="navbar-nav justify-content-end flex-grow-1 pe-3">
          <li class="nav-item">
            <a class="nav-link h5" href="index.php">🏠 Menu Principal 🏠</a>
          </li>
           <li class="nav-item">
            <a class="nav-link h5" href="pesquisa.php">🔎 Pesquisar 🔍</a>
          </li>
           <li class="nav-item">
            <a class="nav-link h5" href="salvar.php">➕ Adiconar na Tabela ➕</a>
          </li>
      </div>
    </div>
  </div>
</nav>


<?php
    $pageName = basename($_SERVER['PHP_SELF']);
    echo $pageName;
?>
    

    <div class = 'container'>
        <div class = 'row'>
            <br><br>
<hr>
