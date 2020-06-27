<?php 
    global $tituloPagina;
    $tituloPagina = "Home";
    include('partes/cabecalho.php'); 
?>
        <header class="cabecalho-home">
            <h1 class="cabecalho-home__titulo"><b>Nada mudou, a Frenética é o terror!</b></h1>
            <p class="cabecalho-home__subtitulo">Fazemos programas.</p>
            <a class="cabecalho-home__role" href="#servicos">role para ver mais</a>
        </header>
        <section id="servicos" class="servicos"> <!--Seção de serviços-->
            <div class="container"> <!--Inicio container serviços-->
                <h2 class="home__titulo">O que fazemos</h2>
                <section class="servicos__item">
                    <img src="img/Eventos/miniaturas/desenvolvimento-web.png" alt="Imagem desenvolvimento web">
                    <h3>Desenvolvimento Web</h3>
                    <p class="servicos__texto">Programas com visão no seu maior lucro com maior praticidade. A junção do útil ao agradável. :)</p>
                </section>
                <section class="servicos__item">
                    <img src="img/Eventos/miniaturas/produtos_2020.jpg" alt="Produtos 2020">
                    <h3>Produtos</h3>
                    <p class="servicos__texto">Se liga nos produtinhos top que a gente tem.</p>
                </section>
            </section> <!--Fim da seção de serviços-->
            </div> <!--Fim container serviços-->
            <section class="depoimentos"> <!--Seção depoimentos -->
                <div class="container">
                    <h2 class="home__titulo home__titulo--branco">O que falam de nós</h2>
                    <div class="depoimentos__caixa">
                        <section class="depoimentos__item">
                            <img class="depoimentos__img" src="img/img/depoimentos/pessoa-1.1.jpg.png" alt="Foto da pessoa-1">
                            <p class="depoimentos__texto">A FNC É O TERROR</p>
                            <p class="depoimentos__pessoa">@wagnerfilho97</p>
                        </section>
                        <section class="depoimentos__item">
                            <img class="depoimentos__img" src="img/img/depoimentos/pessoa-1.2.jpg.png" alt="Foto da pessoa-1">
                            <p class="depoimentos__texto">A mais forte 💛💙</p>
                            <p class="depoimentos__pessoa">@fabio_lcas</p>
                        </section>
                        <section class="depoimentos__item">
                            <img class="depoimentos__img" src="img/img/depoimentos/pessoa-1.3.jpg.png" alt="Foto da pessoa-1">
                            <p class="depoimentos__texto">No meu coração p/ sempre 💙💛</p>
                            <p class="depoimentos__pessoa">@mlbborges</p>
                        </section>
                    </div> <!-- depoimentos__caixa -->
                </div>
            </section>
<?php include('partes/rodape.php')?>
    