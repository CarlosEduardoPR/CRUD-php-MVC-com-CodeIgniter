
<h1>Editar Usuário</h1>

<!-- Bootstrap CSS -->
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">

<form action='salvar/<?= $usuario['id'] ?>' method='POST'>
    <input type='hidden' name='id' value='<?= $usuario['id']; ?>'>
    <div class='form-group'>
        <label for='exampleFormControlInput1'>Nome</label>
        <input type='text'  class='form-control' name='nome' id='exampleFormControlInput1' value = "<?= $usuario['nome'] ?>">
    </div>
    <div class='form-group'>
        <label for='exampleFormControlInput1'>Email</label>
        <input type='email' class='form-control' name='email' id='exampleFormControlInput1' value = "<?= $usuario['email'] ?>">
    </div>
    <div class='form-group'>
        <label for='exampleFormControlInput1'>Senha</label>
        <input type='password' class='form-control' name='senha' id='exampleFormControlInput1' placeholder='Digite sua nova Senha' value = "<?= $usuario['senha'] ?>">
    </div>
    <div class='form-group'>
        <label for='exampleFormControlInput1'>Data de Nascimento</label>
        <input type='date'  class='form-control' id='exampleFormControlInput1' min="1923-04-01" max="2005-02-28" name='data_nasc' value = "<?= $usuario['data_nasc'] ?>">
    </div>
    <button type='submit' class='btn btn-primary btn-lg'>Salvar</button>

    <a class="btn btn-secondary btn-sm" href="/projeto_mvc/index.php/?page=listar">Clique para Voltar</a>