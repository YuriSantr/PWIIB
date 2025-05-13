<?php
    include "cabecalho.php"; 
    include "conexao.php";
    require_once 'UsuarioRepository.php';

    //Crio um objeto do tipo UsuarioRepository chamado repo
    //E recebe a conexão como parametro
    $repo = new UsuarioRepository($conexao);

    if( isset($_GET['busca']) && !empty($_GET['busca']) )
    {
        $usuarios = $repo->Pesquisar( $_GET['busca'] )
    }
    else
    {
        //Chamei o metodo BuscarTodos para puxar 
        // todos usuarios do banco de dados
        $usuarios = $repo->buscarTodos();
    }
    

?>
<div class="row">
    <div class="col-12">
        <br />
        <div class="card">
            <div class="card-header">
                <b>Lista de usuários</b>
            </div>
            <div class="card-body">
             <form action="usuarios.php" method="get">
                <div class="row">
                        <div class="col-4">
                            <a href="novo_usuario.php" class="btn btn-success">
                            Novo usuário
                            </a>
                        </div>
                        <div class="col-4">
                            <input name="busca" class="form-control" />
                        </div>
                        <div class="col-4">
                            <button type="submit" class="btn btn-primary">
                                Pesquisar
                            </button>
                        </div>
                </div>
            </form>   

              <div class="row">
                <table class="table table-striped table-hover">
                    <thead>
                        <tr>
                            <th>Id</th>
                            <th>Login</th>
                            <th>Ativo</th>
                            <th></th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php
                            //foreach serve para ler todos os usuarios 
                            // vindos do banco em formato de array chave valor
                            foreach ($usuarios as $user) {
                                echo "<tr>
                                        <td>".$user['ID']."</td>
                                        <td>".$user['LOGIN']."</td>
                                        <td>".$user['ATIVO']."</td>
                                        <td>
                                            <a class='btn btn-danger'
                                                 href='excluir_usuario.php?id=".$user['ID']."'>Excluir</a>
                                            <a class='btn btn-warning'
                                                 href='editar_usuario.php?id=".$user['ID']."'>Editar</a>
                                        </td> 
                                      </tr>";
                            }
                        ?>
                    </tbody>
                </table>
              </div>
            </div>
        </div>

    </div>
</div>



<?php

    include "rodape.php"; 
?>