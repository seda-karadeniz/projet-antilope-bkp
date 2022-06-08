<?php /* Template Name: Contact page template */ ?>
<?php get_header(); ?>
<?php if(have_posts()): while(have_posts()): the_post(); ?>
    <main class="layout contact" itemscope itemtype="https://schema.org/Organization">
        <h2 class="contact__title title">Contactez&#45;nous</h2>
        <div class="svg-noair">
            <svg xmlns="http://www.w3.org/2000/svg" width="60" height="130" viewBox="0 0 60 130">
                <g id="Composant_1_3" data-name="Composant 1 – 3" transform="translate(0 130) rotate(-90)">
                    <text id="NO" transform="translate(0 36)" font-size="48" font-family="AquaGrotesque, Aqua Grotesque"><tspan x="0" y="0">NO</tspan></text>
                    <text id="Air" transform="translate(62 49)" font-size="43" font-family="AquaGrotesque, Aqua Grotesque"><tspan x="0" y="0">Air</tspan></text>
                </g>
            </svg>
        </div>

        <aside class="contact__info">
            <h3 class="contact__info-title">Nos informations</h3>
            <div class="contact__issep">
                <h3 class="contact__hepl-title" role="heading" aria-level="3">ISSeP</h3>
                <p class="contact__issep-info" itemprop="adress">
                <?= get_field('info_issep')?>

                </p>
            </div>
            <div class="contact__hepl">
                <h3 class="contact__hepl-title" role="heading" aria-level="3">Service d’&eacute;lectronique et des syst&egrave;mes embarqu&eacute;s de la HEPL</h3>
                <p class="contact__issep-info" itemprop="adress">
                    <?= get_field('info_hepl')?>
                </p>
            </div>
        </aside>
        <aside>
            <h3 class="contact__link" role="heading" aria-level="3">Quelques liens utiles</h3>
            <div>
                <h4 class="contact__link-sites" role="heading" aria-level="4">
                    Sites internet
                </h4>
                <ul class="contact__link-ul">
                    <li class="contact__link-li">
                        <a href="<?= get_field('site_service') ?>">Le service &eacute;lectronique</a>
                    </li>
                    <li class="contact__link-li">
                        <a href="<?= get_field('site_inge') ?>">Master en sciences de l’ingenieur industriel</a>
                    </li>
                    <li class="contact__link-li">
                        <a href="<?= get_field('site_issep') ?>">ISSeP</a>
                    </li>
                </ul>
            </div>
            <div>
                <h4 class="contact__link-sites" role="heading" aria-level="4">
                    Nos r&eacute;seaux sociaux
                </h4>
                <ul class="contact__link-ul">
                    <li class="contact__link-li">
                        <a href="<?= get_field('rs_facebook') ?>">Facebook</a>
                    </li>
                    <li class="contact__link-li">
                        <a href="<?= get_field('rs_linkedin') ?>">LinkedIn</a>
                    </li>
                </ul>
            </div>


        </aside>

            <section>
                <h3 class="contact__form-title">Formulaire de contact</h3>
                <?php if(! isset($_SESSION['contact_form_feedback']) || ! $_SESSION['contact_form_feedback']['success']) : ?>
                    <form action="<?= get_home_url(); ?>/wp-admin/admin-post.php" method="POST" class="contact__form form" id="contact">
                        <?php if(isset($_SESSION['contact_form_feedback'])) : ?>
                            <p class="message"><?= __('Oups ! Il y a des erreurs dans le formulaire', 'dw'); ?></p>
                        <?php endif; ?>
                        <div class="form__field">
                            <label for="firstname" class="form__label"><?= __('Votre prénom', 'dw'); ?></label>
                            <input type="text" name="firstname" id="firstname" class="form__input" placeholder="John" value="<?= dw_get_contact_field_value('firstname'); ?>">
                            <?= dw_get_contact_field_error('firstname'); ?>
                        </div>
                        <div class="form__field">
                            <label for="lastname" class="form__label"><?= __('Votre nom', 'dw'); ?></label>
                            <input type="text" name="lastname" id="lastname" class="form__input" placeholder="Doe" value="<?= dw_get_contact_field_value('lastname'); ?>">
                            <?= dw_get_contact_field_error('lastname'); ?>
                        </div>
                        <div class="form__field">
                            <label for="email" class="form__label"><?= __('Votre adresse e-mail', 'dw'); ?></label>
                            <input type="email" name="email" id="email" class="form__input" placeholder="John@Doe.com" value="<?= dw_get_contact_field_value('email'); ?>">
                            <?= dw_get_contact_field_error('email'); ?>
                        </div>
                        <div class="form__field">
                            <label for="message" class="form__label"><?= __('Votre message', 'dw'); ?></label>
                            <textarea name="message" id="message" cols="30" rows="10" placeholder="Bonjour, ..." class="form__input"><?= dw_get_contact_field_value('message'); ?></textarea>
                            <?= dw_get_contact_field_error('message'); ?>
                        </div>
                        <div class="form__field">
                            <label for="rules" class="form__checkbox">
                                <input type="checkbox" name="rules" id="rules" value="1" />
                                <span class="form__checklabel"><?= str_replace(':conditions', '<a href="privacy" class="condition">' . __('conditions générales d\'utilisation', 'dw') . '</a>', __('J\'accepte les :conditions', 'dw')); ?></span>
                            </label>
                            <?= dw_get_contact_field_error('rules'); ?>
                        </div>
                        <div class="form__actions">
                            <?php wp_nonce_field('nonce_submit_contact'); ?>
                            <input type="hidden" name="action" value="submit_contact_form" />
                            <button class="form__button btn" type="submit"><?= __('Envoyer','dw'); ?></button>
                        </div>
                    </form>
                <?php else : ?>
                    <p id="contact" class="message-envoi btn"><?= __('Merci ! Votre message a bien été envoyé.','dw'); ?></p>
                    <?php unset($_SESSION['contact_form_feedback']); endif; ?>
            </section>


    </main>
<?php endwhile; endif; ?>
<?php get_footer(); ?>