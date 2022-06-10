<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <meta name="description" content="Noair cree des modules qui sont de petits appareils electroniques qui permettent de mesurer l'air, collaboration entre la haute ecole de la province de Liege et l'ISSEP ">
    <meta name="author" content="Seda Karadeniz">
    <title>

        <?php if (is_front_page())
        {
            echo 'Accueil';
        }
        wp_title(''); echo ' - NoAir';?>

    </title>

    <link rel="stylesheet" type="text/css" href="<?= dw_mix('css/style.css'); ?>" />
    <script type="text/javascript" src="<?= dw_mix('js/script.js'); ?>"></script>
</head>
<body>
<header class="header">
    <h1 class="header__title hidden"><?= get_bloginfo('name'); ?></h1>
    <p class="header__tagline hidden"><?= get_bloginfo('description'); ?></p>


    <nav class="header__nav nav" role="navigation">
        <h2 class="nav__title hidden">Navigation principale</h2>
        <div id="menuToggle" class="nav__toggle">

            <div class="navIcon">
                <label for="check" class="hidden">input</label>
                <input class="layer1" id="check" type="checkbox"/>

                <div class="layer2 menuClose">
                    <svg xmlns="http://www.w3.org/2000/svg" width="27" height="15.75" viewBox="0 0 27 15.75">
                        <g id="Icon_ionic-ios-menu" data-name="Icon ionic-ios-menu" transform="translate(-4.5 -10.125)">
                            <path id="Tracé_9" data-name="Tracé 9" d="M30.375,12.375H5.625A1.128,1.128,0,0,1,4.5,11.25h0a1.128,1.128,0,0,1,1.125-1.125h24.75A1.128,1.128,0,0,1,31.5,11.25h0A1.128,1.128,0,0,1,30.375,12.375Z" fill="#84572a"/>
                            <path id="Tracé_10" data-name="Tracé 10" d="M30.375,19.125H5.625A1.128,1.128,0,0,1,4.5,18h0a1.128,1.128,0,0,1,1.125-1.125h24.75A1.128,1.128,0,0,1,31.5,18h0A1.128,1.128,0,0,1,30.375,19.125Z" fill="#84572a"/>
                            <path id="Tracé_11" data-name="Tracé 11" d="M30.375,25.875H5.625A1.128,1.128,0,0,1,4.5,24.75h0a1.128,1.128,0,0,1,1.125-1.125h24.75A1.128,1.128,0,0,1,31.5,24.75h0A1.128,1.128,0,0,1,30.375,25.875Z" fill="#84572a"/>
                        </g>
                    </svg>
                </div>
                <div class="layer3 menuOpen">
                    <svg xmlns="http://www.w3.org/2000/svg" width="13.426" height="13.423" viewBox="0 0 13.426 13.423">
                        <path id="Icon_ionic-ios-close" data-name="Icon ionic-ios-close" d="M19.589,18l4.8-4.8A1.124,1.124,0,0,0,22.8,11.616l-4.8,4.8-4.8-4.8A1.124,1.124,0,1,0,11.616,13.2l4.8,4.8-4.8,4.8A1.124,1.124,0,0,0,13.2,24.384l4.8-4.8,4.8,4.8A1.124,1.124,0,1,0,24.384,22.8Z" transform="translate(-11.285 -11.289)" fill="#84572a"/>
                    </svg>
                </div>

                <ul class="nav__container" id="menu">
                    <?php foreach(dw_get_menu_items('primary') as $link): ?>
                        <li class="<?= $link->getBemClasses('nav__item'); ?>">
                            <a href="<?= $link->url; ?>" class="nav__link"><?= $link->label; ?></a>
                        </li>
                    <?php endforeach; ?>
                </ul>
            </div>
            <div class="logo">
                <a href="accueil">
                    <svg id="Composant_4_1" data-name="Composant 4 – 1" xmlns="http://www.w3.org/2000/svg" width="241" height="48" viewBox="0 0 241 48">
                        <g id="Composant_1_1" data-name="Composant 1 – 1">
                            <text id="NO" transform="translate(0 15)" font-size="20" font-family="AquaGrotesque, Aqua Grotesque"><tspan x="0" y="0">NO</tspan></text>
                            <text id="NO-2" data-name="NO" transform="translate(0 15)" font-size="20" font-family="AquaGrotesque, Aqua Grotesque"><tspan x="0" y="0">NO</tspan></text>
                            <text id="Air" transform="translate(28 20)" font-size="15" font-family="AquaGrotesque, Aqua Grotesque"><tspan x="0" y="0">Air</tspan></text>
                            <text id="Air-2" data-name="Air" transform="translate(28 20)" font-size="15" font-family="AquaGrotesque, Aqua Grotesque"><tspan x="0" y="0">Air</tspan></text>
                        </g>
                        <text id="Mesure_la_pollution_dans_l_air" data-name="Mesure la pollution dans l’air" transform="translate(0 30)" font-size="15" font-family="AquaGrotesque, Aqua Grotesque"><tspan x="0" y="12">Mesure la pollution dans l</tspan><tspan y="12" font-family="Helvetica">’</tspan><tspan y="12">air</tspan></text>
                    </svg>
                </a>


            </div>

        </div>
    </nav>



</header>