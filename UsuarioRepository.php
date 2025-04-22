<?php
class UsuarioRepository {
    private $conexao;

    public function __construct(mysqli $conexao)
    {
        $this->conexao = $conexao;
    }

    public function buscarTodos() {
        $result = $this->conexao->query(
            "SELECT * FROM usuarios");

        $usuarios = [];
        while ($row = $result->fetch_assoc()) {
            array_push($usuarios, $row);
        }
        return $usuarios;
    }

    public function buscarPorId($id) {
        $stmt = $this->conexao->prepare(
            "SELECT * FROM usuarios WHERE id = ?");
        $stmt->bind_param("i", $id);
        $stmt->execute();

        $resultado = $stmt->get_result();
        return $resultado->fetch_assoc();
    }
}

//inclui o arquivo da classr repository do usuario
require_once "usuarioRepository.php";


//crio um objeto do tipo UsuarioRepository chamado repo 
//e recebe a conexao como parametro
$repo = new UsuarioRepository($conexao);


//chamei o metodo BuscarTodos para puxar
//todos usuarios do banco de dados
$usuarios = $repo->buscarTodos();

//foreach serve para ler todos os usuarios
//vindos do banco em formato de array chave valor
