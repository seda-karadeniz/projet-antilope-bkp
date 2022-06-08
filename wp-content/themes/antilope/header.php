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
    <div class="logo" itemscope itemtype="http://schema.org/Brand">
        <a href="accueil" itemprop="logo">
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

    <nav class="header__nav nav" role="navigation">
        <h2 class="nav__title hidden">Navigation principale</h2>
        <div id="menuToggle" class="nav__toggle">

            <!--<input type="checkbox" />
            <span></span>
            <span></span>-->
            <ul class="nav__container" id="menu">
                <?php foreach(dw_get_menu_items('primary') as $link): ?>
                    <li class="<?= $link->getBemClasses('nav__item'); ?>">
                        <a href="<?= $link->url; ?>" class="nav__link"><?= $link->label; ?></a>
                    </li>
                <?php endforeach; ?>
            </ul>
        </div>

    </nav>


</header>