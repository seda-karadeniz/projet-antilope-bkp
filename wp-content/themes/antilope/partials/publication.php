<article class="publication" >
    <h4 class="hidden"><?= get_the_title(); ?></h4>

    <a href="<?=get_field('link')?>" class="publication__link">

    <div class="publication__card">
        <figure class="publication__fig">
            <?= get_the_post_thumbnail(null, 'medium', ['class' => 'publication__thumb']); ?>
        </figure>

        <div class="publication__label">
            <h5 class="publication__title subTitle"><?= get_the_title(); ?></h5>
            <p class="publication__date">Publié le <time class="publication__time" datetime="<?= date('c', strtotime(get_field('publication_date', false, false))); ?>">
                    <?= ucfirst(date_i18n('d F Y', strtotime(get_field('publication_date', false, false)))); ?>
                </time></p>
        </div>

    </div>
    </a>


</article>