<?php
if( $_SERVER['REQUEST_METHOD']=='POST' )
{

    $values = Array();
    for( $i=0; $i<count( $_POST['nome'] ); $i++ )
    {
        $values[] = filter( $_POST['nome'][$i] ).
        $values[] = filter( $_POST['email'][$i])."<br>";
        $values[] = filter( $_POST['telefone'][$i] )."<br>";


    }
    print_r($values);
}
function filter( $str ){
    return addslashes( $str );//deixo demais filtros e validações por sua conta
}
?>
<html>
<head>
    <script type="text/javascript" src="http://ajax.googleapis.com/ajax/libs/jquery/1.5.1/jquery.min.js"></script>
    <script type="text/javascript">
        $(document).ready(function(){
            $('#form_prepare').submit(function(){
                var $this = $( this );

                var nome = $this.find("input[name='nome']").val(),
                    email = $this.find("input[name='email']").val(),
                    telefone = $this.find("input[name='telefone']").val();

                var tr = '<tr>'+
                    '<td>'+nome+'</td>'+
                    '<td>'+email+'</td>'+
                    '<td>'+telefone+'</td>'+
                    '</tr>'
                $('#grid').find('tbody').append( tr );

                var hiddens = '<input type="hidden" name="nome[]" value="'+nome+'" />'+
                    '<input type="hidden" name="email[]" value="'+email+'" />'+
                    '<input type="hidden" name="telefone[]" value="'+telefone+'" />';

                $('#form_insert').find('fieldset').append( hiddens );

                return false;
            });
        });
    </script>
    <style type="text/css">
        #main {
            width: 700px; margin: 0 auto;
        }
    </style>
</head>
<body>
<div id="main">
    <form action="" method="post" id="form_prepare">
        <fieldset>
            <label>Nome: <input type="text" name="nome" /></label>
            <label>Telefone: <input type="text" name="email" /></label>
            <label>Email: <input type="text" name="telefone" /></label>

            <label><input type="submit" name="ok" value="Ok" /></label>
        </fieldset>
    </form><!-- /form_prepare -->

    <table id="grid">
        <thead>
        <tr>
            <th>Nome</th>
            <th>Telefone</th>
            <th>Email</th>
        </tr>
        </thead>
        <tbody>
        </tbody>
    </table><!-- /grid -->
    <form action="" method="post" id="form_insert">
        <fieldset style="display: none;"></fieldset>
        <label><input type="submit" name="cadastrar" value="Cadastrar" /></label>
    </form><!-- /form_insert -->
</div><!-- /main -->
</body>
</html>
<script type="text/javascript" src="../jquery-3.3.1.min.js"></script>

