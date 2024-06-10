<nav class="navbar navbar-expand-lg bg-dark mb-3" data-bs-theme="dark">
  <div class="container">
    <?=anchor("Usuario/index","Biblioteca",['class' => 'navbar-brand'])?>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarSupportedContent">
      <ul class="navbar-nav me-auto mb-2 mb-lg-0">
        <li class="nav-item">
          <?=anchor("Usuario/index","Usuario",['class' => 'nav-link active', 'aria-current'=>'page'])?>
        </li>
        <li class="nav-item">
          <?=anchor("Editora/index","Editora",['class' => 'nav-link active', 'aria-current'=>'page'])?>
        </li>
        <li class="nav-item">
          <?=anchor("Autor/index","Autor",['class' => 'nav-link active', 'aria-current'=>'page'])?>
        </li>
        <li class="nav-item">
          <?=anchor("Obra/index","Obra",['class' => 'nav-link active', 'aria-current'=>'page'])?>
        </li>
        <li class="nav-item">
          <?=anchor("Aluno/index","Aluno",['class' => 'nav-link active', 'aria-current'=>'page'])?>
        </li>
        <li class="nav-item">
        <?=anchor("Livro/index","Livro",['class' => 'nav-link active', 'aria-current'=>'page'])?>
        </li>
        <li class="nav-item">
        <?=anchor("Emprestimo/index","Emprestimo",['class' => 'nav-link active', 'aria-current'=>'page'])?>
        </li>

        <li class="nav-item dropdown">
          <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
            Menu
          </a>
          <ul class="dropdown-menu">
            <li>  <?=anchor("Obra/index","Obra",['class' => 'nav-link active', 'aria-current'=>'page'])?></li>
            <li>  <?=anchor("Editora/index","Editora",['class' => 'nav-link active', 'aria-current'=>'page'])?></li>
            <li><hr class="dropdown-divider"></li>
            <li>  <?=anchor("Autor/index","Autor",['class' => 'nav-link active', 'aria-current'=>'page'])?></li>
            <li>  <?=anchor("Livro/index","Livro",['class' => 'nav-link active', 'aria-current'=>'page'])?></li>
            <li>  <?=anchor("Emprestimo/index","Emprestimo",['class' => 'nav-link active', 'aria-current'=>'page'])?></li>
          </ul>
        </li>
        <li class="nav-item">
        
        </li>
      </ul>
      <form class="d-flex" role="search">
       
      </form>
    </div>
  </div>
</nav>