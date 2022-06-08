<?php
// require_once(__DIR__ . '/Menus/PrimaryMenuWalker.php');
require_once(__DIR__ . '/Menus/PrimaryMenuItem.php');

require_once(__DIR__ . '/Forms/BaseFormController.php');
require_once(__DIR__ . '/Forms/ContactFormController.php');
require_once(__DIR__ . '/Forms/Sanitizers/BaseSanitizer.php');
require_once(__DIR__ . '/Forms/Sanitizers/TextSanitizer.php');
require_once(__DIR__ . '/Forms/Sanitizers/EmailSanitizer.php');
require_once(__DIR__ . '/Forms/Validators/BaseValidator.php');
require_once(__DIR__ . '/Forms/Validators/RequiredValidator.php');
require_once(__DIR__ . '/Forms/Validators/EmailValidator.php');
require_once(__DIR__ . '/Forms/Validators/AcceptedValidator.php');
// Désactiver l'éditeur Gutenberg de Wordpress
add_filter('use_block_editor_for_post', '__return_false');

add_action('init', 'dw_init_php_session', 1);

function dw_init_php_session()
{
    if(! session_id()) {
        session_start();
    }
}


// Activer les images pour les posts
add_theme_support('post-thumbnails');

// Enregistrer un "type de ressource" (custom post type) pour les voyages
register_post_type('module', [
    'label' => 'Modules',
    'labels' => [
        'name' => 'Modules',
        'singular_name' => 'module',
    ],
    'description' => 'La ressource qui permet de gérer les modules',
    'public' => true,
    'menu_position' => 5,
    'menu_icon' => 'dashicons-admin-tools',
    'supports' => ['title','editor' ,'thumbnail'],
    'rewrite' => ['slug', 'modules'],
]);
register_post_type('publication', [
    'label' => 'Publications',
    'labels' => [
        'name' => 'Publications',
        'singular_name' => 'publication',
    ],
    'description' => 'La ressource qui permet de gérer les publications',
    'public' => true,
    'menu_position' => 6,
    'menu_icon' => 'dashicons-book',
    'supports' => ['title','editor','thumbnail'],
    'rewrite' => ['slug', 'publications'],
]);

register_post_type('message', [
    'label' => 'Messages de contact',
    'labels' => [
        'name' => 'Messages de contact',
        'singular_name' => 'Message de contact',
    ],
    'description' => 'Les messages envoyés par les utilisateurs via le formulaire de contact.',
    'public' => false,
    'show_ui' => true,
    'menu_position' => 15,
    'menu_icon' => 'dashicons-buddicons-pm',
    'capabilities' => [
        'create_posts' => false,
    ],
    'map_meta_cap' => true,
]);


function dw_get_modules($count=20)
{
    // 1on instancie l'objet wp_query

    $modules = new WP_Query([
        'post_type' => 'module',
        'posts_per_page' => $count,
        'order' => 'DESC',
    ]);
    return $modules;
}
function dw_get_publications($count=20)
{


    $publications = new WP_Query([
        'post_type' => 'publication',
        'posts_per_page' => $count,
        'orderby' => 'date',
        'order' => 'ASC',
    ]);
    return $publications;
}
//enregistrer les menu de nav

register_nav_menu('primary', 'Emplacement de la navigation principale');

// definition de la fonction retournant un menu de navigation sous  forme d'un tableau de liens de niveau 0
function dw_get_menu_items($location)
{
    $items = [];

    // Récupérer le menu qui correspond à l'emplacement souhaité
    $locations = get_nav_menu_locations();

    if(! ($locations[$location] ?? false)) {
        return $items;
    }

    $menu = $locations[$location];

    // Récupérer tous les éléments du menu en question
    $posts = wp_get_nav_menu_items($menu);

    // Traiter chaque élément de menu pour le transformer en objet
    foreach($posts as $post) {
        // Créer une instance d'un objet personnalisé à partir de $post
        $item = new PrimaryMenuItem($post);

        // Ajouter cette instance soit à $items (s'il s'agit d'un élément de niveau 0), soit en tant que sous-élément d'un item déjà existant.

        $items[] = $item;


    }

    // Retourner les éléments de menu de niveau 0
    return $items;
}

function dw_mix($path)
{
    $path = '/' . ltrim($path, '/');

    // Checker si le fichier demandé existe bien, sinon retourner NULL
    if(! realpath(__DIR__ . '/public' . $path)) {
        return;
    }

    // Check si le fichier mix-manifest existe bien, sinon retourner le fichier sans cache-bursting
    if(! ($manifest = realpath(__DIR__ . '/public/mix-manifest.json'))) {
        return get_stylesheet_directory_uri() . '/public' . $path;
    }

    // Ouvrir le fichier mix-manifest et lire le JSON
    $manifest = json_decode(file_get_contents($manifest), true);

    // Check si le fichier demandé est bien présent dans le mix manifest, sinon retourner le fichier sans cache-bursting
    if(! array_key_exists($path, $manifest)) {
        return get_stylesheet_directory_uri() . '/public' . $path;
    }

    // C'est OK, on génère l'URL vers la ressource sur base du nom de fichier avec cache-bursting.
    return get_stylesheet_directory_uri() . '/public' . $manifest[$path];
}

add_action('admin_post_nopriv_submit_contact_form', 'dw_handle_submit_contact_form');
add_action('admin_post_submit_contact_form', 'dw_handle_submit_contact_form');

function dw_handle_submit_contact_form()
{
    $form = new ContactFormController($_POST);
}

function dw_get_contact_field_value($field)
{
    if(! isset($_SESSION['contact_form_feedback'])) {
        return '';
    }

    return $_SESSION['contact_form_feedback']['data'][$field] ?? '';
}

function dw_get_contact_field_error($field)
{
    if(! isset($_SESSION['contact_form_feedback'])) {
        return '';
    }

    if(! ($_SESSION['contact_form_feedback']['errors'][$field] ?? null)) {
        return '';
    }

    return '<p class="form__error">'. $_SESSION['contact_form_feedback']['errors'][$field]. '</p>';
}