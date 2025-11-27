<?php
require_once("config.php");

$acao = $_REQUEST['acao'] ?? '';

switch ($acao) {

    case 'cadastrar':
        $sql = "INSERT INTO jogador (
                    nome_jogador,
                    email_jogador,
                    discord_jogador,
                    elo_id
                ) VALUES (
                    '{$_POST['nome_jogador']}',
                    '{$_POST['email_jogador']}',
                    '{$_POST['discord_jogador']}',
                    '{$_POST['elo_id']}'
                )";

        $conn->query($sql);
        header("Location: index.php?page=lista-jogador");
    break;


    case 'editar':
        $sql = "UPDATE jogador SET
                    nome_jogador='{$_POST['nome_jogador']}',
                    email_jogador='{$_POST['email_jogador']}',
                    discord_jogador='{$_POST['discord_jogador']}',
                    elo_id='{$_POST['elo_id']}'
                WHERE id_jogador={$_POST['id_jogador']}";

        $conn->query($sql);
        header("Location: index.php?page=lista-jogador");
    break;


    case 'excluir':
        $sql = "DELETE FROM jogador
                WHERE id_jogador=" . $_GET['id'];

        $conn->query($sql);
        header("Location: index.php?page=lista-jogador");
    break;
}