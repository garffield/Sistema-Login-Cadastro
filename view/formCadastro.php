<form action="../view/pageCadastro.php?acao=cadastrar" method="post" id="form-cadastro">
    <h1>Cadastrar Usuário</h1>

    <label for="nome">Nome:</label>
    <input type="text" name="nome" id="nome" required>
    
    <label for="email">Email:</label>
    <input type="email" id="email" name="email" required>
    
    <label for="dataNasc">Data de Nascimento:</label>
    <input type="date" id="dataNasc" name="dataNasc" required>
    
    <label for="senha">Senha:</label>
    <input type="password" name="senha" id="senha" required>
    
    <label for="endereco">Endereço:</label>
    <input type="text" name="endereco" id="endereco" required>

    <input type="submit" placeholder="Cadastrar">
    
    <p>Já possui Cadastro? <a href="./../index.php" id="btn-register">Faça Login</a></p>

</form>