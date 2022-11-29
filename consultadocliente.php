<html>
    <head>
        <title>Consulta do Cliente</title>
        <style>
            a{
                text-decoration:none;
            }

            body{
                font-family: arial;
                color: black;
                background-color:#7744aa;

            }

            h1{

                padding: -20px;
            }
            div#interface{
                width: 500px;
                background-color:white;
                color: black;
                margin:50px auto 0px auto;
                box-shadow: 0px 0px 10px black;
                padding: 20px;

            }

            table{
                color: black; 
            }

        </style>
    </head>
    <body>
    <center><h1>Consulta do Cliente</h1></center>
    <hr>
    <br><br>
    <div id="interface">
        <form action="consultadocliente.php" method="post">
            <center>
                <label>Nome:</label> <input type="text" name="nome">
                <input type="submit" value="Consultar">
                <a href="cadastrodocliente.php"><input type="button" value="Voltar"></a>
                <br/>
        </form>
        <br>
        <table width="100%" border="2"><br>
            <tr>
                <th>Nome</th>
                <th>Telefone</th>
                <th>Email</th>
                <th>Excluir Cliente</th>
                <th>Editar Cliente</th>
            </tr>
            </center>
    </div>
    <?php
    //Serve para setar o campo nome
    if (isset($_POST['nome'])) {
        //Aqui é a conexão do sql
        $connect = mysqli_connect("localhost:3306", "root", "root", "agenda");
        //Aqui seleciona todos os usuarios cujo o nome for parecido
        $sql = "Select * from usuario where nome like '%" . $_POST['nome'] . "%'";
        //O query roda os comandos no sql
        $query = mysqli_query($connect, $sql);
        while ($dados = mysqli_fetch_array($query)) {
            $nome = $dados['nome'];
            $telefone = $dados['telefone'];
            $email = $dados['email'];
            $codigo = $dados['codigo'];
            ?> 
            <tr>
                <td><?php echo $nome; ?></td>
                <td><?php echo $telefone; ?></td>
                <td><?php echo $email; ?></td> 
                <td><center><a href="http://localhost/agenda/excluircliente.php?codigo=<?php echo $dados['codigo'] ?>"><img src="excluircliente.png" width="50px" height="50px"></a></center></td>
        <td><center><a href="http://localhost/agenda/editarcliente.php?codigo=<?php echo $dados['codigo'] ?>&nome=<?php echo $dados['nome'] ?>&telefone=<?php echo $dados['telefone'] ?>&email=<?php echo $dados['email'] ?>"><img src="alterarcliente.png" width="50px" height="50px"></a></center></td>

        </tr>
        <?php
    }
}
?>
</table>
</body>
</html>
