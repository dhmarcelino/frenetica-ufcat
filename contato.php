<?php 
    global $tituloPagina;
    $tituloPagina = "Contato";
    include('partes/cabecalho.php');

    $nome = '';
    $email = '';
    $mensagem = '';
    $erroFormulario = '';
    $sucessoFormulario = '';
    if( isset($_POST['submit'])){
        $nome = $_POST['nome'];
        $email = $_POST['email'];
        $mensagem = $_POST['mensagem'];
        if($nome != '' && 
            $email != '' 
            && $mensagem != ''){
            // Campos preenchidos corretamente
            $mensagemEmail = 'Nome: ' . $nome . ' - ';
            $mensagemEmail .= 'Email: ' . $email . ' - ';
            $mensagemEmail .= 'Mensagem: ' . $mensagem;
            if(mail('freneticaufgcac@gmail.com', 'Contato via site', $mensagemEmail)){
                // Email enviado
                $sucessoFormulario = "Mensagem enviada com sucesso!.";
            }
            else{
                // email não enviado 
                $erroFormulario = "Falha ao enviar a mensagem. Tente novamente mais tarde ou através do email: freneticaufgcac@gmail.com";
            };
        }
        else{
            // Campos não preenchidos corretamente
            $erroFormulario = "Por favor, verifique os dados informados.";
        }
    }
?>
        <header class="pagina-cabecalho">
            <h1 class="pagina-cabecalho__titulo">Contato</h1>
        </header>
        <section class="container pagina-conteudo">
            <p class="text-center">Fale conosco.</p>
            <form action="contato.php" class="formulario" method="post">
                <?php if($erroFormulario != ''):?>
                    <div class="formulario__erro">
                        <?php echo $erroFormulario ?>
                    </div>
                <?php endif; ?>
                <?php if($sucessoFormulario != ''):?>
                    <div class="formulario__sucesso">
                        <?php echo $sucessoFormulario ?>
                    </div>
                <?php endif; ?>    
                <div class="formulario__grupo formulario__grupo--coluna_esq">
                    <label class="formulario__label" for="nome">Nome</label><br>
                    <input class="formulario__campo" id="nome" type="text" name="nome">
                </div>
                <div class="formulario__grupo formulario__grupo--coluna_dir">
                    <label class="formulario__label" for="email">E-mail</label><br>
                    <input class="formulario__campo" id="email" type="email" name="email">
                </div>
                <div class="formulario__grupo">
                    <label class="formulario__label" for="mensagem">Mensagem</label><br>
                    <textarea class="formulario__campo" name="mensagem" id="mensagem" cols="20" rows="7"></textarea>
                </div>
                <input type="submit" class="formulario__botao" value="Enviar" name="submit">
            </form>
        </section>
        <div class="mapa">
            <iframe src="https://www.google.com/maps/embed?pb=!1m14!1m12!1m3!1d4380.181249246987!2d-47.929504059835!3d-18.154376344572075!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!5e0!3m2!1spt-BR!2sbr!4v1569239890892!5m2!1spt-BR!2sbr" width="600" height="450" frameborder="0" style="border:0;" allowfullscreen=""></iframe>
        </div>
<?php include('partes/rodape.php')?>