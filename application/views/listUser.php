<h1>&nbsp Lista de Usuários</h1>
<br>
<div class="col-md-12">
    <div class="card">
        <div class="card-header">
            <h4>Detalhes do Usuário &nbsp;
                <a href="?page=novo" class="btn btn-primary float-end">Adicionar Usuário</a>
            </h4>
        </div>
    </div>
    <table class='table table-bordered'>
        <tr>
            <th>Id</th>
            <th>Nome</th>
            <th>Email</th>
            <th>Data de Nascimento</th>
            <th>Ações</th>
        </tr>

        <?php foreach ($usuarios as $usuario) :  ?>
            <tr>
                <td><?= $usuario['id']; ?></td>
                <td><?= $usuario['nome']; ?></td>
                <td><?= $usuario['email']; ?></td>
                <td><?= (new \DateTimeImmutable($usuario['data_nasc']))->format('d/m/Y') ?></td>
                <td>
                  
                <button class="btn btn-success">
                <?php echo anchor('page/editar?id=' .$usuario['id'], 'Editar');?>
                </button>

                    <button type="button" class="btn btn-danger">
                        <?php $this->load->helper('url');
                        echo anchor('page/delete/' . $usuario['id'],'Excluir'); ?> </button>

            </tr>
        <?php endforeach ?>
    </table>
</div>