<?php get_header(); ?>
<?php if(have_posts()): while(have_posts()): the_post(); ?>
    <main class="layout singleModule">

        <h2 class="singleModule__title title"><?= get_the_title(); ?></h2>
        <div class="svg-noair">
            <svg xmlns="http://www.w3.org/2000/svg" width="60" height="130" viewBox="0 0 60 130">
                <g id="Composant_1_3" data-name="Composant 1 – 3" transform="translate(0 130) rotate(-90)">
                    <text id="NO" transform="translate(0 36)" font-size="48" font-family="AquaGrotesque, Aqua Grotesque"><tspan x="0" y="0">NO</tspan></text>
                    <text id="Air" transform="translate(62 49)" font-size="43" font-family="AquaGrotesque, Aqua Grotesque"><tspan x="0" y="0">Air</tspan></text>
                </g>
            </svg>
        </div>
        <div class="singleModule__wrapper">

            <div class="singleModule__content">
                <p class="singleModule__desc"><?= get_field('big_description'); ?></p>
            </div>
            <figure class="singleModule__fig">
                <?= get_the_post_thumbnail(null, 'medium_large', ['class' => 'singleModule__thumb']); ?>
            </figure>
        </div>
        <?php
        $image = get_field('image1');
        $size = 'medium'; // (thumbnail, medium, large, full or custom size)
        if( $image ):?>
                <figure class="singleModule__img1">
                    <?php
                    {
                        echo wp_get_attachment_image( $image, $size );
                    } ?>
                </figure>
        <?php endif;?>

            <p class="singleModule__caract"><?= get_field('caracteristics'); ?></p>
         <?php
        $image = get_field('image2');
        $size = 'medium'; // (thumbnail, medium, large, full or custom size)
        if( $image ):?>
                <figure class="singleModule__img2">
                    <?php
                    {
                        echo wp_get_attachment_image( $image, $size );
                    } ?>
                </figure>
        <?php endif;?>

            <p class="singleModule__polluants"><?= get_field('caracteristics'); ?></p>

       <?php
        $image = get_field('image3');
        $size = 'medium'; // (thumbnail, medium, large, full or custom size)
        if( $image ):?>
                <figure class="singleModule__img3">
                    <?php
                    {
                        echo wp_get_attachment_image( $image, $size );
                    } ?>
                </figure>
        <?php endif;?>

        <?php
        $image = get_field('image4');
        $size = 'medium'; // (thumbnail, medium, large, full or custom size)
        if( $image ):?>
                <figure class="singleModule__img4">
                    <?php
                    {
                        echo wp_get_attachment_image( $image, $size );
                    } ?>
                </figure>
        <?php endif;?>

            <p class="singleModule__dev"><?= get_field('in_development'); ?></p>


        <a href="modules" class="singleModule__btn btn">Retour vers la liste des modules</a>

    </main>
<?php endwhile; endif; ?>
<?php get_footer(); ?>