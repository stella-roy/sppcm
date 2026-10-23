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

<main id="primary" class="site-main">

    <div class="video">
        <iframe class="video__iframe"
            src="https://www.youtube.com/embed/59EscRSj9rw?si=OJ38Fa365C4xdXXH" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay;
            clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" referrerpolicy="strict-origin-when-cross-origin" allowfullscreen>
        </iframe>
    </div>

    <div class="wrapper">
        <h1>Le Syndicat des professeurs et professeures du Collège de Maisonneuve</h1>

        <p>Le syndicat des professeures et professeurs du Collège de Maisonneuve (SPPCM) a pour objectifs 
            l’étude, la défense et la promotion des intérêts et des objectifs professionnels, syndicaux, économiques et sociaux de ses membres. 
            Il vise également la promotion de la recherche et de la qualité du travail en éducation.</p>

        <p>Le SPPCM regroupe plus de 630 membres. Fondé le 7 mars 1968, il est affilié à la fédération nationale des enseignantes et enseignants du Québec (FNEEQ), 
            elle-même membre (ou filiale) de la Confédération des syndicats nationaux (CSN).</p>

            
        <section>

        </section>

        <section>
            <h2>Infolettre récente</h2>
        </section>
    </div>


</main><!-- #main -->

<?php
get_footer();
