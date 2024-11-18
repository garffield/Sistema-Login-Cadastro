<form action="../view/pageCadastro.php?acao=logar" id="form-login" method="post">
    <h1>Login</h1>

    <label for="email">Email:</label>
    <input type="email" id="email" name="email" required>

    <label for="password">Senha:</label>
    <input type="password" id="password" name="senha" required>

    <input type="submit" placeholder="Cadastrar">

    <p id="faca-cadastro">Não possue login? <a href="formCadastro.php">Faça Cadastro</a></p>
</form>