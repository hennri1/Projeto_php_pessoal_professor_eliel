<?php
require_once("config.php");

$acao = $_REQUEST['acao'] ?? '';

switch ($acao) {

    case 'cadastrar':
        $sql = "INSERT INTO boostador (
                    nome_boostador,
                    email_boostador,
                    discord_boostador,
                    elo_id
                ) VALUES (
                    '{$_POST['nome_boostador']}',
                    '{$_POST['email_boostador']}',
                    '{$_POST['discord_boostador']}',
                    '{$_POST['elo_id']}'
                )";

        $conn->query($sql);
        header("Location: index.php?page=lista-boostador");
    break;


    case 'editar':
        $sql = "UPDATE boostador SET
                    nome_boostador='{$_POST['nome_boostador']}',
                    email_boostador='{$_POST['email_boostador']}',
                    discord_boostador='{$_POST['discord_boostador']}',
                    elo_id='{$_POST['elo_id']}'
                WHERE id_boostador={$_POST['id_boostador']}";

        $conn->query($sql);
        header("Location: index.php?page=lista-boostador");
    break;


    case 'excluir':
        $sql = "DELETE FROM boostador
                WHERE id_boostador=" . $_GET['id'];

        $conn->query($sql);
        header("Location: index.php?page=lista-boostador");
    break;
}
