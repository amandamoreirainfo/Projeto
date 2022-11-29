<html>
    <head>
        <meta charset="UTF-8">
        <style>
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

            }

            table{
                color: black; 
            }

        </style>
    </head>  
    <body>
    <center> <h1>Editar Cliente</h1> </center>  
    <hr>
    <div id="interface">
        <br><fieldset id="formulario">
            <legend>Cliente</legend>
            <center> 
                <form action="salvaredicao.php" method="post">  
                    <p>Nome: <input type="text" name="nome" id="nome" value="<?php echo $_GET['nome']; ?>" required></p>
                    <p>Telefone: <input type="text" name="telefone" id="telefone" value="<?php echo$_GET['telefone']; ?>" required></p>
                    <p>Email: <input type="text" name="email"  id="email" value="<?php echo $_GET['email']; ?>"></p>
                    <input type="hidden" name="codigo"  id="codigo" value="<?php echo $_GET['codigo']; ?>">
                    <input type="submit" value="Salvar">
                    <input type= "reset" value="Limpar"> 
                </form>
            </center>
        </fieldset>
    </div>
</body>
</html>

