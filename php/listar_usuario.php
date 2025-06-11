<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.6/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-4Q6Gf2aSP4eDXB8Miphtr37CMZZQ5oXLH2yaXMJ2w8e2ZtHTl7GptT4jmndRuHDT" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.6/dist/js/bootstrap.bundle.min.js" integrity="sha384-j1CDi7MgGQ12Z7Qab0qlWQ/Qqz24Gc6BM0thvEMVjHnfYGF0rmFCozFSxQBxwHKO" crossorigin="anonymous"></script>
        <script src="https://kit.fontawesome.com/c0f408d1cc.js" crossorigin="anonymous"></script>

    <title>Usuários Cadastrados</title>
</head>

<body>
<div class="container">
<nav class="navbar bg-body-tertiary">
  <div class="container-fluid">
    <a class="navbar-brand" href="#">Navbar</a>
  </div>
</nav>
<table class="table">
  <thead>
    <tr>
        <th scope="col">ID</th>
        <th scope="col">NOME</th>
        <th scope="col">EMAIL</th>
        <th scope="col">SETOR</th>
        <th scope="col">DELETE</th>
        <th scope="col">EDITAR</th>
        
    </tr>
  </thead>
  <tbody>
    <?php
    include 'conexao.php';
    $select = "SELECT * FROM tb_user";
    $query = $conexao->query($select);
    while ($resultado = $query->fetch_assoc()){
    ?>
    <tr>
      <th scope="row"> <?php echo $resultado ['id_user'] ?> </th>
      <td> <?php echo $resultado ['nm_user']?></td>
      <td> <?php echo $resultado ['email']?></td>
      <td> <?php echo $resultado ['setor']?></td>
      <td> <i class="fa-solid fa-trash"></i></td>
      <td> <i class="fa-solid fa-pen-to-square"></i></td>

    </tr>

<?php }; ?>
  </tbody>
</table>
</div>
</body>

</html>