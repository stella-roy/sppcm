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

    <?php /* Dynamiser la vidéo
             Vidéo joue automatiquement
             Si video (champs ACF saisi d'un URL), affiche la vidéo
             Si pas de vidéo, affiche une image par défaut */ ?>

    <div class="video">
        <iframe class="video__iframe"
            src="https://www.youtube.com/embed/59EscRSj9rw?si=OJ38Fa365C4xdXXH&autoplay=1&mute=1" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay;
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

            <div class="infolettre">
                <h3>10 octobre 2026</h3>
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
                    <button>Lire plus...</button>
                </div>
            </div>

        </section>
    </div>


</main><!-- #main -->

<?php
get_footer();
