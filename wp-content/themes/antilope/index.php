

<?php get_header(); ?>

    <main class="layout main" >
        <section class="intro">
            <div class="svg-noair-index">
                <svg xmlns="http://www.w3.org/2000/svg" width="60" height="130" viewBox="0 0 60 130">
                    <g id="Composant_1_3" data-name="Composant 1 – 3" transform="translate(0 130) rotate(-90)">
                        <text id="NO" transform="translate(0 36)" font-size="48" font-family="AquaGrotesque, Aqua Grotesque"><tspan x="0" y="0">NO</tspan></text>
                        <text id="Air" transform="translate(62 49)" font-size="43" font-family="AquaGrotesque, Aqua Grotesque"><tspan x="0" y="0">Air</tspan></text>
                    </g>
                </svg>
            </div>
            <h2 class="intro__title title hidden" role="heading" aria-level="2">NoAir</h2>
            <p class="intro__desc"><?= get_field('small_description')?></p>

            <a href="modules" class=" intro__btn btn">Voir nos modules</a>
        </section>
        <section class="content">
            <h2 class="hidden" role="heading" aria-level="2">Petite pr&eacute;sentation</h2>

            <div class="content__module">
                <h3 class="content__module-title" role="heading" aria-level="3"><?=get_field('title_section_module')?></h3>
                <p class="content__module-para"><?= get_field('content_section_module')?></p>
                <figure class="singleModule__img4">
                        <?php
                        {
                            echo wp_get_attachment_image( get_field('image_section_module'), 'medium' );
                        } ?>
                </figure>
                <a href="modules" class="content__module-btn btn">Voir nos modules</a>


            </div>
            <div class="content__collab">
                <h3 class="content__collab-title" role="heading" aria-level="3"><?=get_field('title_section_us')?></h3>
                <p class="content__collab-para"><?= get_field('content_section_us')?></p>
                <figure class="content__collab-img">
                        <?php
                        {
                            echo wp_get_attachment_image( get_field('image_section_us'), 'medium' );
                        } ?>
                </figure>
                <a href="a-propos" class="content__collab-btn btn">En savoir plus sur nous</a>

            </div>
        </section>
        <div class="logo">

            <?php
            $image = get_field('elec_logo');
            $size = 'medium'; // (thumbnail, medium, large, full or custom size)
            if( $image ):?>
                <figure class="elec_logo">
                    <?php
                    {
                        echo wp_get_attachment_image( $image, $size );
                    } ?>
                </figure>
            <?php endif;?>

            <?php
            $image = get_field('hepl_logo');
            $size = 'medium'; // (thumbnail, medium, large, full or custom size)
            if( $image ):?>
                <figure class="logo hepl_logo">
                    <?php
                    {
                        echo wp_get_attachment_image( $image, $size );
                    } ?>
                </figure>
            <?php endif;?>
             <?php
            $image = get_field('wal_bxl_logo');
            $size = 'medium'; // (thumbnail, medium, large, full or custom size)
            if( $image ):?>
                <figure class="logo wal_bxl_logo">
                    <?php
                    {
                        echo wp_get_attachment_image( $image, $size );
                    } ?>
                </figure>
            <?php endif;?>

            <?php
            $image = get_field('issep_logo');
            $size = 'medium'; // (thumbnail, medium, large, full or custom size)
            if( $image ):?>
                <figure class="logo issep_logo">
                    <?php
                    {
                        echo wp_get_attachment_image( $image, $size );
                    } ?>
                </figure>
            <?php endif;?>

        </div>

    </main>

<?php get_footer(); ?>