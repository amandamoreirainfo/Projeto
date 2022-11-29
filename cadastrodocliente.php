<html>
    <head>
        <meta charset="UTF-8">
        <title>Cadastro do Cliente</title>
        <style>
            a{
                text-decoration:none;
            }
            body{
                font-family: arial;
                background-color:#7744aa;

            }   

            h1{

                padding: -20px;
            }
            div#interface{
                width: 500px;
                background-color:white;
                margin:50px auto 0px auto;
                box-shadow: 0px 0px 10px black;
                padding: 20px;

            }



            fieldset#formulario{
                width:400;
                height:300;
                margin: -20px auto 0px auto;
                padding: 20px;
                background-color:white;



            </style>

            <script>
                //Aqui fica a validação dos campos aonde criamos a função
                function mostra() {
                    //Criamos a variavel "n" vai receber o valor do campo nome
                    var n = document.getElementById('nome').value;
                    //Se a condição "n" for igual a vazio, aparece o alerta de erro na tela
                    if (n == "")
                        alert("Campo nome obrigatório !")

                    //Criamos a variavel "t" vai receber o valor do campo telefone
                    var t = document.getElementById('telefone').value;
                    //Se a condição "t" for igual a vazio, aparece o alerta de erro na tela
                    if (t == "")
                        alert("Campo telefone obrigatório !")
                    //Se os dois campos não estiverem vazios, vai para proxima tela, recebendo os valores dos campos na url 
                    else if (document.getElementById('telefone').value != "" && document.getElementById('nome').value != "")
                        window.location.href = "http://localhost/agenda/salvarcadastro.php?nome=" + document.getElementById('nome').value + "&telefone=" + document.getElementById('telefone').value + "&email=" + document.getElementById('email').value;
                }
            </script>
        </head>
        <body>
        <center><h1>Agenda Telefônica</h1></center>
        <hr>
        <div id="interface">
            <center>
                <fieldset id=formulario>
                    <legend><h2>Cadastro do Cliente</h2></legend>
                    <form action="cadastrocliente.php" method="post">
                        <p>Nome: <input type="text" name="nome" id="nome"></p>
                        <p>Telefone: <input type="text" name="telefone" id="telefone"></p>
                        <p>Email: <input type="text" name="email" id="email"></p>
                        <input type="button" value="Salvar" onclick="mostra()">
                        <input type="reset" value="Limpar">
                        <a href="consultadocliente.php"><input type="button" value="Consulta do Cliente"></a>
                    </form>
                </fieldset>
            </center>
        </div>
    </body>
</html>
