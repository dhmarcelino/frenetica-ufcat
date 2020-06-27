<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <?php
        $titulo = "Frenética - Computação";
        global $tituloPagina;
        if($tituloPagina != ''){
            $titulo .= ' | ' . $tituloPagina;
        }
    ?>
    <title><?php echo $titulo?></title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/gh/fancyapps/fancybox@3.5.7/dist/jquery.fancybox.min.css" />
    <link rel="stylesheet" href="css/style.css">
    <link rel="shortcut icon" type="image/x-icon" href="favicon.ico">
</head>
<body>
    <header class="cabecalho">
        <div class="container"> <!--Inicio container cabeçalho-->
            <?php if($tituloPagina == 'Home'): ?>
                <h1 class="logo">A.A.A.T.J.B. - Frenética - Computação UFCAT</h1>
            <?php else: ?>
                <a href="index.php" class="logo">A.A.A.T.J.B. - Frenética - Computação UFCAT</a>
            <?php endif; ?>
            <nav class="menu-principal menu-principal--fechado">
                <button class="menu-principal__btn">Abrir/Fechar menu</button>
                <ul class="menu-principal__lista">
                    <li><a class="menu-principal__item <?php echo $tituloPagina == 'Home'? 'menu-principal__item--atual' : ''?>" href="index.php">Home</a></li>
                    <li><a class="menu-principal__item <?php echo $tituloPagina == 'Sobre'? 'menu-principal__item--atual' : ''?>" href="sobre.php">Sobre Nós</a></li>
                    <li><a class="menu-principal__item <?php echo $tituloPagina == 'Eventos'? 'menu-principal__item--atual' : ''?>" href="eventos.php">Eventos</a></li>
                    <li><a class="menu-principal__item <?php echo $tituloPagina == 'Contato'? 'menu-principal__item--atual' : ''?>" href="contato.php">Contatos</a></li>
                </ul>
            </nav>
        </div> <!--Fim container cabeçalho-->
    </header>
    <main>