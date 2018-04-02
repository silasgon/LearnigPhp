<?php
define('DB_HOST'        , "pmw-n181523\sqlexpress");
define('DB_USER'        , "sa");
define('DB_PASSWORD'    , "1234");
define('DB_NAME'        , "dbphp7");
define('DB_DRIVER'      , "sqlsrv");

require_once "Conexao.php";

try{

    $Conexao    = Conexao::getConnection();
    $query      = $Conexao->query("SELECT nome, preco, quantidade FROM produto");
    $produtos   = $query->fetchAll();

}catch(Exception $e){
    echo $e->getMessage();
    exit;
}

?>
<table border=1>
    <tr>
        <td>Nome</td>
        <td>PreÃ§o</td>
        <td>Quantidade</td>
    </tr>
    <?php
    foreach($produtos as $produto) {
        ?>
        <tr>
            <td><?php echo $produto['nome']; ?></td>
            <td>R$ <?php echo $produto['preco']; ?></td>
            <td><?php echo $produto['quantidade']; ?></td>
        </tr>
        <?php
    }
    ?>
</table>