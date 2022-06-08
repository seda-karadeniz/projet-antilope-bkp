<?php /* Template Name: Publications page template*/?>
<?php get_header();?>
    <?php if(have_posts()): while(have_posts()): the_post(); ?>
        <main class="layout publi">
            <h2 class="publi title" role="heading" aria-level="2">
                <?= get_the_title(); ?>
            </h2>
            <div class="svg-noair">
                <svg xmlns="http://www.w3.org/2000/svg" width="60" height="130" viewBox="0 0 60 130">
                    <g id="Composant_1_3" data-name="Composant 1 – 3" transform="translate(0 130) rotate(-90)">
                        <text id="NO" transform="translate(0 36)" font-size="48" font-family="AquaGrotesque, Aqua Grotesque"><tspan x="0" y="0">NO</tspan></text>
                        <text id="Air" transform="translate(62 49)" font-size="43" font-family="AquaGrotesque, Aqua Grotesque"><tspan x="0" y="0">Air</tspan></text>
                    </g>
                </svg>
            </div>
            <section class="publications" id="publications">
                <h3 class="hidden" role="heading" aria-level="3" >Publications</h3>
                <div class="publications__wrapper">
                    <?php
                    if(($publications = dw_get_publications())->have_posts()): while($publications->have_posts()): $publications->the_post();
                        include(__DIR__ . '/partials/publication.php');
                    endwhile;endif;?>
                </div>
            </section>
        </main>

    <?php endwhile; endif; ?>
<?php get_footer();?>
