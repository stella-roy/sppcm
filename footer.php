<?php


$bg_texture = wp_get_attachment_image_url( 8043 );






?>




<footer style="background-image: url('<?= $bg_texture; ?>')">


    <div class="footer-images">
      <div class="carousel">

        <div class="group">
          <a href="https://www.frontcommun.org/">

            <img class="card" src="images/FC-300x111.jpg" alt="carousel">

          </a>
          <a href="https://fneeq.qc.ca/fr/accueil/">
            <img class="card" src="images/NEGO_bandeau_vert-mains-300x111.jpg" alt="carousel">
          </a>
          <a href="https://secteurpublic.quebec/">
            <img class="card" src="images/bonbord-300x111.png" alt="carousel">
          </a>
          <a href="https://www.nonauxhausses.org/">
            <img class="card" src="images/logomainrougeside-2-768x284.png" alt="carousel">
          </a>
        </div>

        <div aria-hidden class="group">
          <a href="https://www.frontcommun.org/">
            <img class="card" src="images/FC-300x111.jpg" alt="carousel">
          </a>
          <a href="https://fneeq.qc.ca/fr/accueil/">
            <img class="card" src="images/NEGO_bandeau_vert-mains-300x111.jpg" alt="carousel">
          </a>
          <a href="https://secteurpublic.quebec/">
            <img class="card" src="images/bonbord-300x111.png" alt="carousel">
          </a>
          <a href="https://www.nonauxhausses.org/">
            <img class="card" src="images/logomainrougeside-2-768x284.png" alt="carousel">
          </a>
        </div>

      </div>


<?php




/*

// args
$args = array(
    'posts_per_page' => -1,
    'post_type'  => 'lien-externe',
);


// query
$the_query = new WP_Query( $args );


//var_dump( $the_query );

?>
<?php if( $the_query->have_posts() ): ?>
    <div class="carousel">

        <div class="group">
    <?php while( $the_query->have_posts() ) : $the_query->the_post(); 

      // récupérer les valeurs pour chaque lien externe
    
    ?>
            <a href="<?= // lien-externe ; ?>">
                <img src="<?= // url de l'image ; ?>" target="_blank" rel="noopener noreferrer" />
            </a>
    <?php endwhile; ?>
      </div>

    </div>
<?php endif; ?>

<?php wp_reset_query();   // Restore global post data stomped by the_post(). ?>


*/









?>



        <a href="">
          <!-- <img class="logo" src="images/logo/Vector.png" alt="SPPCM LOGO"> -->
                    
          <?php
              /**
               * Logo du site (Apparence → Personnaliser → Identité du site).
               * the_custom_logo() affiche directement le lien vers l'accueil et l'image.
               * Rien à échapper : le HTML est généré par WordPress.
               */

              if ( has_custom_logo() ) : ?>
                  <div class="footer__logo">
                      <?php the_custom_logo(); ?>
                  </div>
              <?php endif; 
          ?>

        </a>





      <div class="reseauSociaux">
        <a href="https://www.csn.qc.ca/">
          <img src="https://www.sppcm.org/wp-content/uploads/2018/03/logo_fb.png">
        </a>
        <a href="https://fneeq.qc.ca/fr/accueil/">
          <img src="images/logo/FNEEQ-logo.png">
        </a>
        <a href="sppcm@cmaisonneuve.qc.ca">
          <img src="images/logo/mail logo.png">
        </a>
        <a href="https://www.facebook.com/SPPCMaisonneuve#">
          <img src="images/logo/facebook logo.png">
        </a>
      </div>

    </div>

    <div class="copyright">
          <?php
        /**
         * Texte de présentation du syndicat dans le pied de page,en préservant les retours à la ligne.
         */
    ?>
    <div>
        <?php echo nl2br( esc_html( get_theme_mod( 'sppcm_presentation_syndicat_footer' ) ) ); ?>
    </div>

      <!-- <p> Copyright &copy; 2026 SPPCM - Tous droits réservés.</p> -->

      <ul class="portfolio">
        <li><a href="https://www.behance.net/stellaroy2">Stella Roy</a></li>
        <li><a href="https://linktr.ee/thomasguenette">Thomas Guenette</a></li>
        <li><a href="https://www.behance.net/wichardjean-ba2">Wichardson Jean-Baptiste</a></li>
        <li><a href="https://www.artstation.com/tilidia">Yasmine Guezi</a></li>
        <li><a href="https://www.behance.net/xavierrmy1">Xavier Rémy</a></li>
      </ul>

    </div>
              
    <?php get_search_form(); ?>

</footer>