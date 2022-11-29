<html>
    <head>
        <title>Cadastro do Cliente</title>
    </head>
    <body bgcolor="#7744aa">
        <?php
        //Aqui é a conexão do sql
        $connect = mysqli_connect("localhost:3306", "root", "root", "agenda");
        //Aqui seleciona todos os usuarios com o email atribuido do campo email no cadastro
        $sql = "select * from usuario where email='" . $_GET['email'] . "'";
        //O query roda os comandos no sql
        $query = mysqli_query($connect, $sql);
        //A condição para vereficar se existe email vazios
        if (mysqli_num_rows($query) == 0 || $_GET['email'] == "") {
            //Inserir os dados na tabela usuario
            $sql2 = "insert into usuario(nome,telefone,email) values ('" . $_GET['nome'] . "','" . $_GET['telefone'] . "','" . $_GET['email'] . "')";
            //A condição para vereficar se existe email vazios
            $query2 = mysqli_query($connect, $sql2);
            ?><script>
                //A função alerta retorna a mensagem, vai para outra tela
                alerta();
                function alerta() {
                    alert("Cadastrado com sucesso!");
                }
                window.location.href = "http://localhost/agenda/cadastrodocliente.php";
            </script><?php
        } else {
            ?><script>
                //A função alerta retorna a mensagem, vai para outra tela
                alerta();
                function alerta() {
                    alert("já existe um cliente com esse email!");
                }
                window.location.href = "http://localhost/agenda/cadastrodocliente.php";
            </script><?php
        }
        ?>
    </body>
</html>

