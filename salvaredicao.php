<html>
    <head>
        <title>Editar Cliente</title>
    </head>
    <body bgcolor="#7744aa">
        <?php
        //Aqui é a conexão do sql
        $connect = mysqli_connect("localhost:3306", "root", "root", "agenda");
        //Aqui seleciona todos os usuarios com o email atribuido do campo email no cadastro
        $sql = "select * from usuario where email='" . $_POST['email'] . "'";
        //O query roda os comandos no sql
        $result = mysqli_query($connect, $sql);
        $dados = mysqli_fetch_array($result);
        ////A condição para vereficar a conexão
        if (mysqli_num_rows($result) != 0) { //Se retornar algo
            if ($dados['codigo'] != $_POST['codigo'] && $_POST['email'] != "") { //Se os codigos forem diferentes não cadastra
                ?>
                <script>
                    alerta();
                    function alerta() {
                        alert("Já existe um cliente com esse email!");
                        window.location.href = "http://localhost/agenda/consultadocliente.php";
                    }
                </script>   
                <?php
            }if ($_POST['email'] == "") { //Se o email estiver vazio cadastra
                $sql2 = "update usuario set nome='" . $_POST['nome'] . "',telefone='" . $_POST['telefone'] . "',email='" . $_POST['email'] . "' where codigo=" . $_POST['codigo'];
                $query2 = mysqli_query($connect, $sql2);
                ?>
                <script>
                    alerta();
                    function alerta() {
                        alert("Editado com sucesso!");
                        window.location.href = "http://localhost/agenda/consultadocliente.php";
                    }
                </script>
                <?php
            }if ($dados['codigo'] == $_POST['codigo']) { //Se o codigo estiver igual, cadastra
                $sql2 = "update usuario set nome='" . $_POST['nome'] . "',telefone='" . $_POST['telefone'] . "',email='" . $_POST['email'] . "' where codigo=" . $_POST['codigo'];
                $query2 = mysqli_query($connect, $sql2);
                ?>
                <script>
                    alerta();
                    function alerta() {
                        alert("Editado com sucesso!");
                        window.location.href = "http://localhost/agenda/consultadocliente.php";
                    }
                </script>
                <?php
            }
        } else { //Se retornar nada, cadastra
            $sql2 = "update usuario set nome='" . $_POST['nome'] . "',telefone='" . $_POST['telefone'] . "',email='" . $_POST['email'] . "' where codigo=" . $_POST['codigo'];
            $query2 = mysqli_query($connect, $sql2);
            ?>
            <script>
                alerta();
                function alerta() {
                    alert("Editado com sucesso!");

                    window.location.href = "http://localhost/agenda/consultadocliente.php";
                }
            </script> <?php
        }
        ?>
    </body>
</html>