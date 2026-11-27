<?php
/**
 * Template part for displaying page content in page.php
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package Underscores
 */

get_header();
?>

<?php
/* Code PHP de dynamisation */

  // Prendre une infolettre (-1 = toutes)
  $args = array(
    'posts_per_page' => -1,
    'post_type' => 'infolettre'
  );
 
 
  // Faire une demande backend
  $the_query = new WP_Query($args);
 
  //var_dump($the_query);
 
  ?>

<main id="primary" class="site-main">
    <div class="wrapper">
        <h2>Infolettres</h2>

        <!-- Conteneur de tailles adaptatifs -->
        <section class="container-infolettre">

            <?php
            /* Un loop */

            if ($the_query->have_posts()): ?>
                <?php while ($the_query->have_posts()) : $the_query->the_post();
                
                /* Obtenir les ACF de la base de donnees */
                $data = get_fields();

                /* Champs de l'infolettre  */
                // Le titre est la date
                $titre_infolettre = get_the_title();
                $resume_infolettre = $data['resume_infolettre'];
                $lien_infolettre = $data['lien_infolettre'];
                
                ?>

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

            <?php  endwhile; ?>
            <?php endif;
            ?>

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

        </div>
    </div>
</main><!-- #main -->

<?php
get_footer();