<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi" crossorigin="anonymous">
<!-- JavaScript Bundle with Popper -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-OERcA2EqjJCMA+/3y+gxIOqMEjwtxJY7qPCqsdltbNJuaOe923+mo//f6V8Qbsw3" crossorigin="anonymous"></script>

<nav class="navbar navbar-expand-lg bg-light">
  <div class="container-fluid">
    <a class="navbar-brand" href="#">Cadastro</a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavDropdown" aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarNavDropdown">
      <ul class="navbar-nav">
        <li class="nav-item">
          <a class="nav-link active" aria-current="page" href="index.php">Home</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="new-user.php">Novo usuario</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="enlisted-user.php">Lista usuario</a>
        </li>
      </ul>
    </div>
  </div>
</nav>



<h1> Novo usuario</h1>

<form action="?page=salvar" method="POST">
  <input type="hidden" nome="acao" Value="cadastrar">
  
  <div class="mb-3">
    <label>Nome</label>
    <input type="text" name="nome" class="form-control" placeholder="digite seu Nome">
  </div>

  <div class="mb-3">
    <label>Email</label>
    <input type="email" name="email" class="form-control" placeholder="digite seu Email">
  </div>

  <div class="mb-3">
    <label>Senha</label>
    <input type="password" name="senha" class="form-control" placeholder="digite sua Senha">
  </div>

  <div class="mb-3">
    <label>Data de nascimento</label>
    <input type="date" name="data_nasc" class="form-control" placeholder="digite sua Data de nascimento">
  </div>

  <div class="mb-3">
    <button type="submit" class="btn btn-primary"> Enviar</button>
  </div>

</form>