<footer>


     
     <!-- <div class="carousel">

        <div class="group">
          <a href="https://www.frontcommun.org/">
            <img class="card" src="<?= $carousel1; ?>" alt="carousel">
          </a>
          <a href="https://fneeq.qc.ca/fr/accueil/">
            <img class="card" src="<?= $carousel2; ?>" alt="carousel">
          </a>
          <a href="https://secteurpublic.quebec/">
            <img class="card" src="<?= $carousel3; ?>" alt="carousel">
          </a>
          <a href="https://www.nonauxhausses.org/">
            <img class="card" src="<?= $carousel4; ?>" alt="carousel">
          </a>
        </div>

        <div aria-hidden class="group">
          <a href="https://www.frontcommun.org/">
            <img class="card" src="<?= $carousel1; ?>" alt="carousel">
          </a>
          <a href="https://fneeq.qc.ca/fr/accueil/">
            <img class="card" src="<?= $carousel2; ?>" alt="carousel">
          </a>
          <a href="https://secteurpublic.quebec/">
            <img class="card" src="<?= $carousel3; ?>" alt="carousel">
          </a>
          <a href="https://www.nonauxhausses.org/">
            <img class="card" src="<?= $carousel4; ?>" alt="carousel">
          </a>
        </div>-->

      

<div class="footer-images">
  <?php
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
                <a href="http://localhost/sppcm_5w5/lien-externe/8081/" target="_blank" rel="noopener noreferrer">
                  <img class="card" src="http://localhost/sppcm_5w5/wp-content/uploads/2026/11/FC-300x111-1.jpg" alt="" />
                </a>
                <a href="http://localhost/sppcm_5w5/lien-externe/fneeq/" target="_blank" rel="noopener noreferrer">
                  <img class="card" src="http://localhost/sppcm_5w5/wp-content/uploads/2026/11/NEGO_bandeau_vert-mains-300x111-1.jpg" alt="" />
                </a>
                <a href="http://localhost/sppcm_5w5/lien-externe/lkjnkjkj/" target="_blank" rel="noopener noreferrer">
                  <img class="card" src="http://localhost/sppcm_5w5/wp-content/uploads/2026/11/bonbord-300x111-1.png" alt="" />
                </a>
                <a href="http://localhost/sppcm_5w5/lien-externe/coalition-main-rouge/" target="_blank" rel="noopener noreferrer">
                  <img class="card" src="http://localhost/sppcm_5w5/wp-content/uploads/2026/11/logomainrougeside-2-768x284-1-300x111.png" alt="" />
                </a>
              <?php endwhile; ?>
            </div>

           
          </div>
    <?php endif; ?>
 
    <a href="http://localhost/sppcm_5w5/">
      <img class="logo" src="http://localhost/sppcm_5w5/wp-content/uploads/2018/02/cropped-cropped-sppcm_logo_rgb-1.png" alt="SPPCM LOGO">
    </a>


      <?php wp_reset_query();   // Restore global post data stomped by the_post(). ?>

           <!-- <php
              /**
               * Logo du site (Apparence → Personnaliser → Identité du site).
               * the_custom_logo() affiche directement le lien vers l'accueil et l'image.
               * Rien à échapper : le HTML est généré par WordPress.
               */

              if ( has_custom_logo() ) : ?>
                  <div class="footer__logo">
                      <php the_custom_logo(); ?>
                  </div>
              <php endif;?> -->


      <div class="reseauSociaux">
        <a href="https://www.csn.qc.ca/">
          <img src="http://localhost/sppcm_5w5/wp-content/uploads/2026/11/csnLogo.png">
        </a>
        <a href="http://localhost/sppcm_5w5/lien-reseau/fneeq/">
          <img src="http://localhost/sppcm_5w5/wp-content/uploads/2026/11/FNEEQ-logo.png">
        </a>
        <a href="sppcm@cmaisonneuve.qc.ca">
          <img src="http://localhost/sppcm_5w5/wp-content/uploads/2026/11/mail-logo.png">
        </a>
        <a href="https://www.facebook.com/SPPCMaisonneuve#">
          <img src="http://localhost/sppcm_5w5/wp-content/uploads/2026/11/facebook-logo.png">
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

</footer>