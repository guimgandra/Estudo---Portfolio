<?php
    global $tituloPagina;
    $tituloPagina = "Contato";
    include('partes/cabecalho.php');

    $nome = '';
    $email = '';
    $mensagem = '';
    $erroFormulario = '';
    $sucessoFormulario = '';

    if ( isset($_POST['submit']) ){
        $nome = $_POST ['nome']; 
        $email = $_POST ['email']; 
        $mensagem = $_POST ['mensagem']; 
        if (
            $nome != ''
            && $email != ''
            && $mensagem != '') {
            $mensagemEmail = 'Nome: '.$nome .' - ';
            $mensagemEmail = 'Email: '.$email .' - ';
            $mensagemEmail = 'Mensagem: '.$mensagem .' - ';
            if (mail('guimgandra@gmail.com', 'Mensagem teste', $mensagemEmail)){
                $sucessoFormulario = "Mensagem enviada com sucesso!";
            } else {
                $erroFormulario = "Falha ao enviar formulário";
            }
        } else {
            $erroFormulario = "Por favor, verifique os campos de preenchimento";
        }
    }


?>

        <header class="pagina-cabecalho">
            <h1 class="pagina-cabecalho__titulo">Contato</h1>
        </header>
        <section class="container pagina-conteudo">
            <p class="text-center">Lorem ipsum dolor sit amet consectetur adipisicing elit. Magni distinctio ipsum eius in similique tempora iste id!</p>
            <form action="#" class="formulario" method="post">
                <?php if ( $erroFormulario != ''): ?>
                    <div class="formulario__erro">
                        <?php echo $erroFormulario ?>
                    </div>
                <?php endif ?>
                <?php if ( $sucessoFormulario != ''): ?>
                    <div class="formulario__sucesso">
                        <?php echo $sucessoFormulario ?>
                    </div>
                <?php endif ?>
                <div class="formulario__grupo formulario__grupo--coluna-esq">
                    <label class="formulario__label" for="nome">Nome</label><br>
                    <input class="formulario__campo" id="nome" type="text" name="nome">
                </div>
                <div class="formulario__grupo formulario__grupo--coluna-drt">
                    <label class="formulario__label" for="email">Email</label><br>
                    <input class="formulario__campo" id="email" type="email" name="email">
                </div>
                <div class="formulario__grupo">
                    <label class="formulario__label" for="mensagem">Mensagem</label><br>
                    <textarea class="formulario__campo" name="mensagem" id="mensagem" cols="30" rows="10"></textarea>
                </div>
                <input class="formulario__botao" type="submit" value="Enviar" name="submit">
            </form>
            <p class="text-center">
                Lorem ipsum dolor sit amet consectetur adipisicing elit. Atque rem modi molestias odio at corporis aperiam in perspiciatis<br>
                ullam ab ipsum dolores ea commodi quaerat officia, minus earum iure laudantium.
            </p>
        </section>
        <div class="mapa">
            <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d14639.825016377554!2d-46.51244027630551!3d-23.462042405714506!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x94ce8aa0cca3f9b7%3A0xf7ce603a6609dd4c!2zU29sdcOnw7VlcyBlbSBBw6dvIFVzaW1pbmFz!5e0!3m2!1spt-BR!2sbr!4v1540476335031" width="600" height="450" frameborder="0" style="border:0" allowfullscreen></iframe> 
        </div>
<?php include('partes/rodape.php'); ?>