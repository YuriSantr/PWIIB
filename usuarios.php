<?php
    include "cabecalho.php"; 
    include "conexao.php";
    require_once 'UsuarioRepository.php';

    $repo = new UsuarioRepository($conexao);

    $usuarios = $repo->buscarTodos();

    foreach ($usuarios as $item) {
        echo "<h1>Login: " . $item['LOGIN'] .
            "   ID: " . $item['ID'] .
            "   Ativo: " . $item['ATIVO'] . 
            "</h1><br>";
    }
?>
<div class="row">
    <div class="cow-12">
        <div class="card">
            <div class="card-header">
                <b>lista de usuarios</b>
            </div>
                <div class="card-body">
                    <div class="row">
                    <div class="col-4">
                        <a class="btn btn-success">
                            novo usuario 
                        </a>
                     </div>
                    <div class="col-4">
                        <input name="busca" class="form-control"/>
                     </div>
                    <div class="col-4">
                        <button type="submit" class="btn btn-primary">
                        pesquisar
                        </button>
                     </div>
                     </div>
                    <div class="row">
                        <table class=" table table-striped">
                            <thead> 
                                <tr>
                                    <th>ID</th>
                                    <th>Login</th>
                                    <th>Ativo</th>
                                    <th></th>
                                </tr>
                            </thead>
                            <tbody>
                            <?php
                            foreach ($usuarios as $user) {
                                echo "<tr>
                                     <td> $user[ID]</td>
                                     <td> $user[LOGIN]</td>
                                     <td> $user[ATIVO]</td>
                                    </tr>";
                            }
                            ?>
                            </tbody>
                        </table>
                     </div>
                </div>
    </div>
</div>

  <?php
    include "rodape.php"; 
?>