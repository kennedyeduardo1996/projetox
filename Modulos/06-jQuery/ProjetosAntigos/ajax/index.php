<?php



?>
<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <title>Inserir Usuário</title>
    <style type="text/css">
        form{
            text-align: center;
        }
        #div{
            width: 200px;
            height: 200px;
            background-color: cornflowerblue;
        }
    </style>
</head>
<body>

<form id="formAjax">
    primeiro num: <br>
    <input name="primeiro" id="primeiro" type="number"><br>
    segundo num:<br>
    <input name="segundo" id="segundo" type="number"><br>

    <button>Enviar</button>
</form>
<div id="div">

</div>

</body>
<script src="../js/jquery-3.3.1.min.js"></script>
<script src="../js/script.js"></script>
</html>
