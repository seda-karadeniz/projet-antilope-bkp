<?php /* Template Name: About page template */ ?>
<?php get_header(); ?>
    <?php if(have_posts()): while(have_posts()): the_post(); ?>
    <main class="layout about">
        <h2 class="about__title title" role="heading" aria-level="2">Qui nous sommes</h2>
        <div class="svg-noair">
            <svg xmlns="http://www.w3.org/2000/svg" width="60" height="130" viewBox="0 0 60 130">
                <g id="Composant_1_3" data-name="Composant 1 – 3" transform="translate(0 130) rotate(-90)">
                    <text id="NO" transform="translate(0 36)" font-size="48" font-family="AquaGrotesque, Aqua Grotesque"><tspan x="0" y="0">NO</tspan></text>
                    <text id="Air" transform="translate(62 49)" font-size="43" font-family="AquaGrotesque, Aqua Grotesque"><tspan x="0" y="0">Air</tspan></text>
                </g>
            </svg>
        </div>

        <section class="aboutUs">

            <h3 class="about__title title" role="heading" aria-level="2">
                <?= get_field('titre_section_us')?>
            </h3>
            <p class="aboutUs__para">
                <?= get_field('presentation_service')?>
            </p>
            <figure class="aboutUs__img">
                <?php echo wp_get_attachment_image( get_field('image_service'), 'medium' );?>
            </figure>
            <ul class="aboutUs__ul">
                <li>
                    <a href="<?= get_field('site_issep')?>" class="aboutUs__link-inge">Master en sciences de l’ingenieur industriel</a>

                </li>
                <li>
                    <a href="<?= get_field('site_service_electronique')?>" class="aboutUs__link-service">Le service &eacute;lectronique</a>
                </li>

            </ul>

        </section>
        <section class="aboutIssep">

            <h3 class="about__title title" role="heading" aria-level="2">
                <?= get_field('titre_section_collab')?>
            </h3>
            <p class="aboutIssep__para">
                <?= get_field('presentation_and_collaboration')?>
            </p>
            <figure class="aboutIssep__img">
                <?php echo wp_get_attachment_image( get_field('image_collaboration'), 'medium' );?>
            </figure>
            <a href="<?= get_field('site_issep')?>" class="aboutIssep__link-inge">Issep</a>

        </section>
        <p class="about__module">Pour voir nos modules <a href="modules" class="about__module-btn">cliquez ici</a></p>


    </main>
    <?php endwhile; endif; ?>
<?php get_footer(); ?>
