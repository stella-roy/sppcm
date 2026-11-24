<?php

/**
 * The main template file
 *
 * This is the most generic template file in a WordPress theme
 * and one of the two required files for a theme (the other being style.css).
 * It is used to display a page when nothing more specific matches a query.
 * E.g., it puts together the home page when no home.php file exists.
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package Underscores
 */

get_header();
?>

<!-- *****REQUÊTES PHP***** -->

<!-- Éléments de l'accueil -->
<?php
/* Code PHP de dynamisation */

// Prendre tous les éléments de l'accueil
$args = array(
    'posts_per_page' => 1,
    'post_type'      => 'element_accueil',
);

// Faire une demande backend
$the_query = new WP_Query($args);

//var_dump($the_query);

/* Un loop */
if ($the_query->have_posts()) :
    while ($the_query->have_posts()) : $the_query->the_post();

        /* Obtenir les champs ACF de la base de données */
        $data = get_fields();

        /* Champs de l'accueil  */
        $url_video_accueil         = $data['url_video_accueil'];
        $image_accueil             = $data['image_accueil'];
        $titre_accueil             = $data['titre_accueil'];
        $texte_description_accueil = $data['texte_description_accueil'];
        $titre_actualites_accueil  = $data['titre_actualites_accueil'];
        $titre_infolettres_accueil = $data['titre_infolettres_accueil'];

    endwhile;
    wp_reset_postdata();
endif;
?>

<!-- Actualités -->
<?php
// Requête pour récupérer les articles importés par Feedzy
$args_feedzy = array(
    'post_type'      => 'post',
    'posts_per_page' => 6,
    'post_status'    => 'publish',
    'meta_query'     => array(
        array(
            'key'     => 'feedzy',
            'value'   => '1',
            'compare' => '=',
        ),
    ),
);

$feedzy_query = new WP_Query($args_feedzy);
?>

<!-- Infolettres -->
<?php
/* Code PHP de dynamisation */

// Prendre une infolettre (-1 = toutes)
$args = array(
    'posts_per_page' => 1,
    'post_type'      => 'infolettre',
);

// Faire une demande backend
$the_query = new WP_Query($args);

//var_dump($the_query);

/* Un loop */
if ($the_query->have_posts()) :
    while ($the_query->have_posts()) : $the_query->the_post();

        /* Obtenir les champs ACF de la base de données */
        $data = get_fields();

        /* Champs de l'infolettre  */
        // Le titre est la date
        $titre_infolettre  = $data['date_infolettre'];
        $resume_infolettre = $data['resume_infolettre'];
        $lien_infolettre   = $data['lien_infolettre'];

    endwhile;
    wp_reset_postdata();
endif;
?>

<main id="primary" class="site-main">

    <?php if (!empty($url_video_accueil)) : ?>
        <div class="video">
            <?php
            // Extraire l'URL src de l'iframe généré par ACF
            preg_match('/src="(.+?)"/', $url_video_accueil, $matches);
            $src = $matches[1];

            // Ajout des paramètres du lecteur Youtube
            $params = array(
                'autoplay' => 1,
                'loop' => 1,
                'mute' => 1,
                'controls' => 0,
                'rel'  => 0,
            );
            $nvl_src = add_query_arg($params, $src);
            $url_video_accueil = str_replace($src, $nvl_src, $url_video_accueil);

            // Ajout de la classe à la balise iframe
            $attributes = 'class="video__iframe" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share"';
            $url_video_accueil = str_replace('></iframe>', ' ' . $attributes . '></iframe>', $url_video_accueil);

            // Affichage du nouveau iframe
            echo $url_video_accueil;
            ?>
        </div>
    <?php elseif (!empty($image_accueil)) : ?>
        <div class="image-accueil">
            <img src="<?php echo esc_url($image_accueil); ?>" alt="<?php echo esc_attr($titre_accueil); ?>">
        </div>
    <?php endif; ?>

    <!-- 2. Contenu principal -->
    <div class="wrapper">
        <h1><?php echo esc_html($titre_accueil); ?></h1>

        <div class="description">
            <?php echo wp_kses_post($texte_description_accueil); ?>
        </div>

        <section>
        </section>

        <div class="actualités">
            <!-- Titre -->
            <h1><?php echo esc_html($titre_actualites_accueil); ?></h1>

            <div class="articles">
                <!-- Articles -->
                <?php if ($feedzy_query->have_posts()) : ?>
                    <?php while ($feedzy_query->have_posts()) : $feedzy_query->the_post(); ?>
                        <?php
                        // Récupérer le lien d'origine Feedzy (avec le permalien en secours)
                        $feedzy_url = get_post_meta(get_the_ID(), 'feedzy_item_url', true);
                        $lien_article = !empty($feedzy_url) ? $feedzy_url : get_permalink();

                        // Récupérer
                        ?>
                        <div class="article">
                            <h2><?php the_title(); ?></h2>
                            <div class="date">
                                <?php echo get_the_date('d F Y'); ?>
                            </div>
                            <div class="container">
                                <button onclick="window.open('<?php echo esc_url($lien_article); ?>', '_blank', 'noopener,noreferrer')">
                                    Lire plus...
                                </button>
                            </div>
                        </div>
                    <?php endwhile; ?>
                    <?php wp_reset_postdata(); ?>
                <?php endif; ?>
            </div>
        </div>

        <section>
            <h2><?php echo esc_html($titre_infolettres_accueil); ?></h2>

            <div class="infolettre">
                <h3><?php echo esc_html($titre_infolettre); ?></h3>

                <div class="resume-contenu">
                    <?php echo wp_kses_post($resume_infolettre); ?>
                </div>

                <div class="container">
                    <button class="btn-sombre">
                        <a href="<?php echo esc_url($lien_infolettre); ?>" target="_blank" rel="noopener noreferrer">Lire plus...</a>
                    </button>
                </div>
            </div>
        </section>
    </div>

</main><!-- #main -->

<?php
get_footer();
