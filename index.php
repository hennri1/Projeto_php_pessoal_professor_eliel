<!DOCTYPE html>
<html>
<head>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<title>Elo Job LoL</title>
<link rel="stylesheet" href="css/bootstrap.min.css">
<style>
/* (seu CSS LoL aqui — pode colar o bloco já usado) */
body{ background: url('https://cdnb.artstation.com/p/assets/images/images/057/141/141/large/papadakos-g-champion-splash-art-23.jpg?1671481325') no-repeat center center fixed; background-size:cover;color:#e6e6e6;}
.container{background:rgba(0,0,0,0.65);padding:25px;border-radius:10px;box-shadow:0 0 25px rgba(0,0,0,0.7);}
.navbar{background:#0a0f1a!important;border-bottom:2px solid #c8aa6e;}
.navbar-brand,.nav-link,.dropdown-item{color:#c8aa6e!important;font-weight:bold;}
.dropdown-item:hover{background:rgba(200,170,110,0.2);color:#f0d8a8!important;}
h1,h2,h3{color:#c8aa6e}
table{border:2px solid #c8aa6e!important;background:rgba(20,20,30,0.7);color:white;}
th{background:#1c2433!important;color:#c8aa6e;border-bottom:2px solid #c8aa6e!important;}
td{background:rgba(5,10,20,0.6);}
.btn-primary{background:linear-gradient(90deg,#c8aa6e,#a8894e);border:none;color:#0a0f1a;font-weight:bold;}
.btn-danger{background:#742121;border:none;}
</style>
</head>
<body>
<nav class="navbar navbar-expand-lg bg-dark" data-bs-theme="dark">
  <div class="container-fluid">
    <a class="navbar-brand" href="index.php">EloJob</a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent"><span class="navbar-toggler-icon"></span></button>
    <div class="collapse navbar-collapse" id="navbarSupportedContent">
      <ul class="navbar-nav me-auto mb-2 mb-lg-0">
        <li class="nav-item dropdown">
          <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown">Jogadores</a>
          <ul class="dropdown-menu">
            <li><a class="dropdown-item" href="?page=cadastrar-jogador">Cadastrar</a></li>
            <li><a class="dropdown-item" href="?page=lista-jogador">Listar</a></li>
          </ul>
        </li>
        <li class="nav-item dropdown">
          <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown">Boostadores</a>
          <ul class="dropdown-menu">
            <li><a class="dropdown-item" href="?page=cadastrar-boostador">Cadastrar</a></li>
            <li><a class="dropdown-item" href="?page=lista-boostador">Listar</a></li>
          </ul>
        </li>
        <li class="nav-item dropdown">
          <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown">Serviços</a>
          <ul class="dropdown-menu">
            <li><a class="dropdown-item" href="#">Elo Boost</a></li>
            <li><a class="dropdown-item" href="#">MD10 (Colocação)</a></li>
            <li><a class="dropdown-item" href="#">Duo Boost</a></li>
            <li><a class="dropdown-item" href="#">Coaching Individual</a></li>
            <li><a class="dropdown-item" href="#">Coaching de Rotas</a></li>
            <li><a class="dropdown-item" href="#">Aprimoramento de Mecânica</a></li>
            <li><a class="dropdown-item" href="#">Up de Maestria</a></li>
            <li><a class="dropdown-item" href="#">Farm de Honra</a></li>
            <li><a class="dropdown-item" href="#">Subida de Nível da Conta</a></li>
            <li><a class="dropdown-item" href="#">Consultoria para Rotas</a></li>
             </ul>
        </li>
      </ul>
    </div>
  </div>
</nav>

<div class="container mt-3">
  <div class="row"><div class="col">
<?php
include_once('config.php');
$page = $_REQUEST['page'] ?? '';

switch ($page) {
  // jogador
  case 'cadastrar-jogador': include('cadastrar-jogador.php'); break;
  case 'editar-jogador': include('editar-jogador.php'); break;
  case 'lista-jogador': include('lista-jogador.php'); break;
  case 'salvar-jogador': include('salvar-jogador.php'); break;

  // boostador
  case 'cadastrar-boostador': include('cadastrar-boostador.php'); break;
  case 'editar-boostador': include('editar-boostador.php'); break;
  case 'lista-boostador': include('lista-boostador.php'); break;
  case 'salvar-boostador': include('salvar-boostador.php'); break;
  
  default:
    echo "<h1>Bem-vindo ao sistema Elo Job LoL!</h1>";
}
?>
  </div></div>
</div>

<script src="js/bootstrap.bundle.min.js"></script>
</body>
</html>
