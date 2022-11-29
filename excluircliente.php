<html>
    <head>
        <title>Excluir Cliente</title>
    </head>
    <body bgcolor="#7744aa">
        <?php
        //Aqui é a conexão do sql
        $connect = mysqli_connect("localhost:3306", "root", "root", "agenda");
        //Aqui vai deleter os usuarios com o determinado codigo
        $sql = "delete from usuario where codigo = " . $_GET['codigo'];
        //O query roda os comandos no sql
        $query = mysqli_query($connect, $sql);
        ?>
        <script>
            //A função alerta retorna a mensagem, vai para outra tela
            alerta();
            function alerta() {
                alert("Excluído com sucesso!")
            }
            window.location.href = "http://localhost/agenda/consultadocliente.php";
        </script>
    </body>
</html>