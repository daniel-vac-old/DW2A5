<?php
    include 'header.php';
?>
<div class="inicio">
        <?php
        $nome = filter_input(INPUT_POST, "nome");
        $email = filter_input(INPUT_POST, "email");
        $msg = filter_input(INPUT_POST, "msg");
        date_default_timezone_set('America/Sao_Paulo');
        $data = date('l jS \of F Y H:i:s A');
        $data2 = date('d-m-Y H:i:s');
        $d = date('d');
        $m = date('m');
        $a =date('Y');
        $h = date('h');
        $mm = date('i');
        $s = date('s');
        echo"<p>Nome Infomrado: $nome</p><p>E-mail: $email</p><p>Mensagem: $msg</p><p>$data</p>";
        
        ?>
        <a href="contato.php"><button class="btn btn-primary">Voltar</button></a>

</div>
<?php
    include 'footer.php';
    $conteudo = "Contato via site: 
    
Data: $data2 
Nome Infomrado: $nome 
E-mail: $email 
Mensagem: $msg";
    $fp = fopen("X:\Daniel\php\aula6\includepag-mandaresse\contato\contato$d _$m _$a _$h _$mm _$s.txt","wb");
    fwrite($fp,$conteudo);
    fclose($fp);
?>