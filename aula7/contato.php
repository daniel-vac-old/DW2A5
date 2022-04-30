<?php
    include 'header.php';
?>
<div class="inicio">
            <div class="bg-light p-4 mb-4 rounded">
                <h1 class="text-center">Contato</h1>
            </div>
            <form action="destino.php" method="POST">
            <div class="form-group row">
                <div class="form-group col-md-6">
                    <label for="nome"> Nome: </label>
                    <input class="form-control" type="text" name="nome" id="nome" required><br><br>
                </div>
                <div class="form-group col-md-6">
                    <label for="email"> E-mail: </label>
                    <input class="form-control" type="email" name="email" id="email" required><br><br>
                </div>
            </div>
            <div class="form-group">
                <label for="msg"> Mensagem: </label>
                <textarea class="form-control" type="text-area" name="msg" id="msg" required></textarea><br><br>
            </div>
            <button type="submit" class="btn btn-primary">Enviar</button>
            <button type="reset" class="btn btn-warning">Limpar</button>
            </form>
            
</div>
<?php
    include 'footer.php';
?>