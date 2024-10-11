<?php
require("config.php");

switch($_REQUEST["acao"]) {
    case 'cadastrar':
        $nome = $conn->real_escape_string($_POST["nome"]);
        $email = $conn->real_escape_string($_POST["email"]);
        $data = $conn->real_escape_string($_POST["data"]);  // Alterado para "data"
        $horario = $conn->real_escape_string($_POST["horario"]);
        $servico = $conn->real_escape_string($_POST["servico"]);

        $sql = "INSERT INTO agendamentos (NOME, EMAIL, DATA, HORARIO, SERVICO)
                VALUES ('$nome', '$email', '$data', '$horario', '$servico')"; // Correção na tabela "agendamentos"

        if ($conn->query($sql) === TRUE) {
            echo "<script>alert('Agendamento realizado com sucesso!');</script>";
            echo "<script>location.href='?page=listar';</script>";
        } else {
            echo "<script>alert('Não foi possível agendar!');</script>";
            echo "<script>location.href='?page=listar';</script>";
        }
        break;
            case 'editar':
                $id = intval($_POST["id"]);
                $nome = $conn->real_escape_string($_POST["nome"]);
                $email = $conn->real_escape_string($_POST["email"]);
                $data = $conn->real_escape_string($_POST["data"]);  
                $horario = $conn->real_escape_string($_POST["horario"]);
                $servico = $conn->real_escape_string($_POST["servico"]); // Agora recebendo o serviço do campo oculto
        
                $sql = "UPDATE agendamentos SET NOME='$nome', EMAIL='$email', DATA='$data', HORARIO='$horario', SERVICO='$servico' WHERE id=$id";
        
                if ($conn->query($sql) === TRUE) {
                    echo "<script>alert('Atualizado com sucesso!');</script>";
                    echo "<script>location.href='?page=listar';</script>";
                } else {
                    echo "<script>alert('Não foi possível atualizar!');</script>";
                    echo "<script>location.href='?page=listar';</script>";
                }
                break;
    case 'excluir':
        $id = intval($_REQUEST["id"]);

        $sql = "DELETE FROM agendamentos WHERE id=$id"; // Correção para a tabela "agendamentos"

        if ($conn->query($sql) === TRUE) {
            echo "<script>alert('Excluído com sucesso!');</script>";
            echo "<script>location.href='?page=listar';</script>";
        } else {
            echo "<script>alert('Não foi possível excluir!');</script>";
            echo "<script>location.href='?page=listar';</script>";
        }
        break;
}
?>
