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

  <?php
  /* Un loop */

  if ($the_query->have_posts()): ?>
      <?php while ($the_query->have_posts()) : $the_query->the_post();
     
        /* Obtenir les ACF de la base de donnees */
        $data = get_fields();

        /* Champs de l'infolettre  */
        // Le titre est la date
        $titre_infolettre = get_the_title();
        $resume_infolettre = $data['resume-infolettre'];
        $lien_infolettre = $data['lien-infolettre'];
      
      ?>

      <h3><?= $titre_infolettre ?></h3>

  <?php  endwhile; ?>
  <?php endif;
?>

<main id="primary" class="site-main">
    <div class="wrapper">
        
        <h2>Infolettre</h2>

        <div class="infolettre">
            <h3>AFDSAFGDF</h3>
            <ol>
                <li>Journée internationale des travailleuses et des travailleurs</li>
                <li>Toujours pas de nouvelles du CPNC</li>
                <li>Période de mise en candidature pour le poste de Vice-présidence aux affaires pédagogiques</li>
                <li>Appel à ne pas traverser les piquets de grève</li>
                <li>Souvenirs du Jour de la Terre le 25 avril</li>
                <li>Soutien à la Palestine</li>
                <li>Manifestation pro-choix le 1er juin</li>
            </ol>

            <div class="container">
                <button class="btn-sombre">
                    <a href="https://sway.cloud.microsoft/qO5ZhLiwWR7Ltzs4?ref=email" target="_blank" rel="noopener noreferrer">Lire plus...</a>
                </button>
            </div>
        </div>

        <div class="infolettre">
            <h3>AFDSAFGDF</h3>
            <ol>
                <li>Journée internationale des travailleuses et des travailleurs</li>
                <li>Toujours pas de nouvelles du CPNC</li>
                <li>Période de mise en candidature pour le poste de Vice-présidence aux affaires pédagogiques</li>
                <li>Appel à ne pas traverser les piquets de grève</li>
                <li>Souvenirs du Jour de la Terre le 25 avril</li>
                <li>Soutien à la Palestine</li>
                <li>Manifestation pro-choix le 1er juin</li>
            </ol>

            <div class="container">
                <button class="btn-sombre">
                    <a href="https://sway.cloud.microsoft/qO5ZhLiwWR7Ltzs4?ref=email" target="_blank" rel="noopener noreferrer">Lire plus...</a>
                </button>
            </div>
        </div>

    </div>
</main><!-- #main -->

<?php
get_footer();