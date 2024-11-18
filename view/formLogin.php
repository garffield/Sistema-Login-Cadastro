<form action="./view/pageLogin.php?acao=login" id="form-login" method="post">
    <h1>Login</h1>

    <label for="email">Email:</label>
    <input type="email" id="email" name="email" required>

    <label for="password">Senha:</label>
    <input type="password" id="password" name="senha" required>

    <input type="submit" placeholder="Logar">

    <p id="faca-cadastro">Não possue login? <a href="view/pageCadastro.php">Faça Cadastro</a></p>
</form>