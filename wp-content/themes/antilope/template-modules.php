<?php /* Template Name: Modules page template*/?>
<?php get_header();?>
<?php if (have_posts()): while (have_posts()): the_post(); ?>
    <main class="layout modules">


        <h2 class="templateProjects__title title" role="heading" aria-level="2" ><?= get_the_title(); ?></h2>

        <div class="svg-noair">
            <svg xmlns="http://www.w3.org/2000/svg" width="60" height="130" viewBox="0 0 60 130">
                <g id="Composant_1_3" data-name="Composant 1 – 3" transform="translate(0 130) rotate(-90)">
                    <text id="NO" transform="translate(0 36)" font-size="48" font-family="AquaGrotesque, Aqua Grotesque"><tspan x="0" y="0">NO</tspan></text>
                    <text id="Air" transform="translate(62 49)" font-size="43" font-family="AquaGrotesque, Aqua Grotesque"><tspan x="0" y="0">Air</tspan></text>
                </g>
            </svg>
        </div>
        <section class="modules" id="modules">
            <h3 class="hidden" role="heading" aria-level="3" >Nos modules</h3>
            <div class="modules__wrapper">
                <?php
                if(($modules = dw_get_modules())->have_posts()): while($modules->have_posts()): $modules->the_post();
                    include(__DIR__ . '/partials/module.php');
                endwhile;endif;?>
            </div>
        </section>

    </main>
<?php endwhile; endif;?>
<?php get_footer();?>