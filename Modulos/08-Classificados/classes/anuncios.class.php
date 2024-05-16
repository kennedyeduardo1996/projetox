<?php

/*
 * Classe Anuncios 
 * 
 * 
 * Função getTotalAnuncios($filtros)
 * Esse método faz um SELECT no banco e pega o numero de anuncios .
 * de acordo com o filtros.
 * @param $filtros(categoria,preco,estado) é o filtro recebido pelo usuario 
 * onde muda as quantidades dos anuncios totais de retorno de acordo com filtro.
 * @return int(quantidade de anuncios).
 * 
 * 
 * Função getUltimosAnuncios($page, $perPage, $filtros)
 * Esse método faz um SELECT no banco e pega os ultimos anuncios .
 * de acordo os parametros($page, $perPage, $filtros) recebido.
 * @param $page é numero da pagina dos anuncios.
 * @param $perPage é a quantidade de anuncios que terá por pagina.
 * @param $filtros(categoria,preco,estado) é o filtro recebido pelo usuario .
 * @return array() com os ultimos anuncios inseridos no banco.
 * 
 * 
 * Função getMeusAnuncios()
 * Esse método faz um SELECT no banco e pega todos os anuncios de um usuario que 
 * esteja logado(usando a $_SESSION).
 * @return array() com os anuncios do usuario logado.
 * 
 * 
 * Função MeuAnuncio($id)
 * Esse método faz um SELECT no banco e pega um anuncio de acordo com o parametro.
 * @param $id é o identificado do anuncio selecionado pelo usuario.
 * @return array() com os dados do anuncio de id.
 * 
 * 
 * Função adicionarAnuncio($categoria, $titulo, $valor, $descricao, $estado)
 * Esse método faz um INSERT  no banco com os paramentros recebidos.
 * @param $categoria é o id_categoria da categoria que é o mesmo do banco da tabela categorias.
 * @param $titulo é o tutulo do anuncio descrito pelo usuario.
 * @param $valor é o valor do anuncio descrito pelo usuario.
 * @param $descricao é a descrição do anuncio descrito pelo usuario.
 * @param $estado é o estado de conservação do anuncio descrito pelo usuario.
 * 
 * 
 * Função editarAnuncio($categoria, $titulo, $valor, $descricao, $estado, $fotos, $id)
 * Esse método faz um UPDATE no banco com os paramentros recebidos se o anuncio existir.
 * @param $categoria é o id_categoria da categoria que é o mesmo do banco da tabela categorias.
 * @param $titulo é o tutulo do anuncio descrito pelo usuario.
 * @param $valor é o valor do anuncio descrito pelo usuario.
 * @param $descricao é a descrição do anuncio descrito pelo usuario.
 * @param $estado é o estado de conservação do anuncio descrito pelo usuario.
 * @param $fotos é array com os dados da imagem/s escolhida/s pelo usuario para o anuncio.
 * @param $id é o identificador do anuncio selecionado para o UPDATE. 
 * 
 * 
 * Função salvarFoto($fotos, $id)
 * Esse método recebe os dados da/s imagem/s onde cria uma copia menor da mesma de um 
 * tamanho padrão no maximo 500px, onde salva no em uma pasta do projeto 
 * então faz um INSERT no banco com o diretório da imagem recriada.
 * @param $foto é um array com os dados da/s imagem/s escolhidas pelo usuario para o anuncio.
 * 
 * 
 * Função excluirAnuncio($id)
 * Esse método faz um DELETE no banco na tabela anuncios e anuncios_imagens.
 * de acordo com o parametro recebido.
 * @param $id é identificador do anuncio.
 * 
 * 
 * Função excluirfoto($id)
 * Esse método faz um SELECT e DELETE no banco na tabela anuncios_imagens .
 * de acordo com o parametro recebido.
 * @param $id é o identificador da imagem que será exclida.
 * @return o identificador do anuncio que foi deletado a imagem.
 * 
 * 
 * @package projetox 
 * @author Kennedy E M Silva <kennedyeduardomartins@gmail.com>
 * 
 */

//by Kennedy E M Silva
class Anuncios {

    public function getTotalAnuncios($filtros) {
        $dado = array();
        global $pdo;

        $filtrosstring = array("1=1");
        if (!empty($filtros["categoria"])) {
            $filtrosstring[] = "anuncios.id_categoria = :id_categoria";
        }
        if (!empty($filtros["preco"])) {
            $filtrosstring[] = "anuncios.valor BETWEEN :preco1 AND :preco2";
        }
        if (!empty($filtros["estado"])) {
            $filtrosstring[] = "anuncios.estado = :estado";
        }

        $sql = $pdo->prepare("SELECT COUNT(id) as total_anuncios "
                . "FROM anuncios WHERE " . implode(" AND ", $filtrosstring));

        if (!empty($filtros["categoria"])) {
            $sql->bindValue(":id_categoria", $filtros["categoria"]);
        }
        if (!empty($filtros["preco"])) {
            $preco = explode("-", $filtros["preco"]);
            $sql->bindValue(":preco1", $preco[0]);
            $sql->bindValue(":preco2", $preco[1]);
        }
        if (!empty($filtros["estado"])) {
            $sql->bindValue(":estado", $filtros["estado"]);
        }



        $sql->execute();
        if ($sql->rowCount() > 0) {
            $dado = $sql->fetch();
        }

        return $dado;
    }

    public function getUltimosAnuncios($page, $perPage, $filtros) {
        global $pdo;
        $page = (($page - 1) * $perPage);

        $filtrosstring = array("1=1");
        if (!empty($filtros["categoria"])) {
            $filtrosstring[] = "anuncios.id_categoria = :id_categoria";
        }
        if (!empty($filtros["preco"])) {
            $filtrosstring[] = "anuncios.valor BETWEEN :preco1 AND :preco2";
        }
        if (!empty($filtros["estado"])) {
            $filtrosstring[] = "anuncios.estado = :estado";
        }



        $sql = $pdo->prepare("SELECT *, "
                . "(select anuncios_imagens.url"
                . " from anuncios_imagens where anuncios_imagens.id_anuncio = anuncios.id limit 1)"
                . " as url, "
                . "(select categorias.nome from categorias where categorias.id = anuncios.id_categoria) "
                . "as categoria"
                . " FROM anuncios WHERE " . implode(" AND ", $filtrosstring) . " ORDER BY id DESC LIMIT $page , $perPage");

        if (!empty($filtros["categoria"])) {
            $sql->bindValue(":id_categoria", $filtros["categoria"]);
        }
        if (!empty($filtros["preco"])) {
            $preco = explode("-", $filtros["preco"]);
            $sql->bindValue(":preco1", $preco[0]);
            $sql->bindValue(":preco2", $preco[1]);
        }
        if (!empty($filtros["estado"])) {
            $sql->bindValue(":estado", $filtros["estado"]);
        }


        $sql->execute();
        if ($sql->rowCount() > 0) {
            $dados = $sql->fetchAll();
            return $dados;
        } else {
            return array();
        }
    }

    public function getMeusAnuncios() {
        global $pdo;
        $sql = $pdo->prepare("SELECT *,"
                . "(select anuncios_imagens.url from anuncios_imagens "
                . "where anuncios_imagens.id_anuncio = anuncios.id limit 1) as imagem "
                . "FROM anuncios WHERE id_usuario = :id_usuario");
        $sql->bindValue(":id_usuario", $_SESSION["id"]);
        $sql->execute();
        if ($sql->rowCount() > 0) {
            $dados = $sql->fetchAll();
            return $dados;
        } else {
            return array();
        }
    }

    public function MeuAnuncio($id) {
        $dado = array();
        global $pdo;

        $sql = $pdo->prepare("SELECT *, "
                . "(select categorias.nome from categorias where categorias.id = anuncios.id_categoria) "
                . "as categoria,  "
                . "(select usuarios.telefone from usuarios where usuarios.id = anuncios.id_usuario) "
                . "as telefone "
                . "FROM anuncios WHERE id = :id");
        $sql->bindValue(":id", $id);
        $sql->execute();
        if ($sql->rowCount() > 0) {
            $dado = $sql->fetch();
            $dado["fotos"] = array();

            $sql = $pdo->prepare("SELECT * "
                    . "FROM anuncios_imagens WHERE id_anuncio = :id_anuncio");
            $sql->bindValue(":id_anuncio", $id);
            $sql->execute();
            if ($sql->rowCount() > 0) {
                $dado["fotos"] = $sql->fetchAll();
            }
        }
        return $dado;
    }

    public function adicionarAnuncio($categoria, $titulo, $valor, $descricao, $estado) {
        global $pdo;
        $sql = $pdo->prepare("INSERT INTO anuncios SET id_usuario = :id_usuario,"
                . " id_categoria = :id_categoria, titulo = :titulo, descricao = :descricao,"
                . " valor = :valor,  estado = :estado");

        $sql->bindValue(":id_usuario", $_SESSION["id"]);
        $sql->bindValue(":id_categoria", $categoria);
        $sql->bindValue(":titulo", $titulo);
        $sql->bindValue(":descricao", $descricao);
        $sql->bindValue(":valor", $valor);
        $sql->bindValue(":estado", $estado);

        $sql->execute();
    }

    public function editarAnuncio
    ($categoria, $titulo, $valor, $descricao, $estado, $fotos, $id) {
        global $pdo;

        $sql = $pdo->prepare("UPDATE anuncios SET id_usuario = :id_usuario,"
                . " id_categoria = :id_categoria, titulo = :titulo, descricao = :descricao,"
                . " valor = :valor,  estado = :estado WHERE id = :id");

        $sql->bindValue(":id_usuario", $_SESSION["id"]);
        $sql->bindValue(":id_categoria", $categoria);
        $sql->bindValue(":titulo", $titulo);
        $sql->bindValue(":descricao", $descricao);
        $sql->bindValue(":valor", $valor);
        $sql->bindValue(":estado", $estado);
        $sql->bindValue(":id", $id);
        $sql->execute();

        if (count($fotos)) {
            $this->salvarFoto($fotos, $id);
        }
    }

    private function salvarFoto($fotos, $id) {
        global $pdo;
        for ($q = 0; $q < count($fotos["tmp_name"]); $q++) {
            $tipo = $fotos["type"][$q];
            if (in_array($tipo, array("image/jpeg", "image/png"))) {
                $tmname = md5(time() . rand(0, 9999)) . ".jpg";

                $dir = "assets/images/anuncios/";

                move_uploaded_file($fotos['tmp_name'][$q], $dir . $tmname);

                //getimagesize retorna um array com dois valores 
                //largura e altura do arquivo
                //e o list salva esse dois valores nas duas variaveis
                list($largura_original, $altura_original) = getimagesize($dir . $tmname);

                //proporcao da largura e altura
                //se a largura for maior entao vai dar (1,alguma coisa)
                $ratio = $largura_original / $altura_original;

                //original largura = 5600; altura = 3200;
                $largura = 500;
                $altura = 500;

                if ($largura / $altura > $ratio) {
                    //isso ira definir a largura na proporcao correta
                    $largura = $altura * $ratio;
                } else {
                    $altura = $largura / $ratio;
                }


                //php GD 
                //Cria uma imagem sem nenhum conteudo mas com o tamanho correto
                $imagem_final = imagecreatetruecolor($largura, $altura);

                if ($tipo == "image/jpeg") {
                    //salva na var a imagem original
                    $imagem_original = imagecreatefromjpeg($dir . $tmname);
                } elseif ($tipo == "image/png") {
                    //salva na var a imagem original
                    $imagem_original = imagecreatefrompng($dir . $tmname);
                }


                //esse comando pai pegar a imagem original ee passar para o tamanho novo
                imagecopyresampled($imagem_final, $imagem_original,
                        0, 0, 0, 0,
                        $largura, $altura, $largura_original, $altura_original);

                //o navegador vai interpretar que esse arquivo(index.php) é uma imagem
                //header("Content-Type: image/jpeg");

                imagejpeg($imagem_final, $dir . $tmname, 80);

                $sql = $pdo->prepare("INSERT INTO anuncios_imagens SET id_anuncio = :id_anuncio, url = :url");

                $sql->bindValue(":id_anuncio", $id);
                $sql->bindValue(":url", $tmname);
                $sql->execute();
            }
        }
    }

    public function excluirAnuncio($id) {


        global $pdo;

        $sql = $pdo->prepare("DELETE FROM anuncios_imagens WHERE id_anuncio = :id_anuncio");
        $sql->bindValue(":id_anuncio", $id);
        $sql->execute();

        $sql = $pdo->prepare("DELETE FROM anuncios WHERE id = :id");
        $sql->bindValue(":id", $id);
        $sql->execute();
    }

    public function excluirfoto($id) {

        global $pdo;
        $id_anuncio = 0;

        $sql = $pdo->prepare("SELECT id_anuncio FROM anuncios_imagens WHERE id = :id");
        $sql->bindValue(":id", $id);
        $sql->execute();

        if ($sql->rowCount() > 0) {
            $row = $sql->fetch();
            $id_anuncio = $row["id_anuncio"];
        }


        $sql = $pdo->prepare("DELETE FROM anuncios_imagens WHERE id = :id");
        $sql->bindValue(":id", $id);
        $sql->execute();

        return $id_anuncio;
    }
}
