<?php
include 'conexao.php';

$insert = "INSERT INTO tb_user VALUES (null, 'carol', 'carol@gmail.com', 'Secretaria, '123456')";

$query = ($conexao->query($insert));

if($conexao->query($insert)){
    echo "<script>alert('Usuário Cadastrado com Sucesso!') location.href = '../cadastro.html'</script>";
    
}


?>
