<?php 
    global $tituloPagina;
    $tituloPagina = "Eventos";
    include('partes/cabecalho.php'); 
?>
        <header class="pagina-cabecalho">
            <h1 class="pagina-cabecalho__titulo">Eventos</h1>
        </header>
        <section class="pagina-conteudo">
            <div class="container"> <!-- Inicio container conteudo -->
                <p class="text-center">Confira um pouco mais sobre os eventos os quais <br>
                contamos com a participação de membros da família Frenética.
                </p>
                <nav>
                        <ul class="lista-eventos">
                            <li class="lista-eventos__item">
                                <a data-fancybox="gallery" href="img/Eventos/inter2k17.jpg">
                                    <img class="lista-eventos__img" src="img/eventos/miniaturas/inter2k17_miniatura.jpg" alt="Canecas com adesivo frenética.">
                                <h2 class="lista-eventos__titulo">Inter 2k17</h2>
                                </a>                                    
                            </li>
                            <li class="lista-eventos__item">
                                <a data-fancybox="gallery" href="img/Eventos/futebol_solidário.jpg">
                                    <img class="lista-eventos__img" src="img/Eventos/miniaturas/futebol_solidario_miniatura.jpg" alt="Alunos e professores no futebol solidário.">
                                    <h2 class="lista-eventos__titulo">Futebol Solidário 2018</h2>
                                </a>                        
                            </li>
                        </ul>                   
                </nav>
            </div> <!-- Fim container conteudo -->           
        </section>        
<?php include('partes/rodape.php')?>