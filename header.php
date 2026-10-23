<?php
/**
 * The header for our theme
 *
 * This is the template that displays all of the <head> section and everything up until <div id="content">
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package Underscores
 */

?>
<!doctype html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Document</title>
    <!-- <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:opsz,wght,FILL,GRAD@24,400,0,0&icon_names=menu" /> -->
    <link
      rel="stylesheet"
      href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:opsz,wght,FILL,GRAD@24,400,0,0&icon_names=search"
    />
  </head>
  <body>
    <header>

        <!-- Entête -->
      <!-- <img id="logo" src="assets/img/logo.png" alt="" /> -->
      <h2 class="titre">
        Syndicat des professeurs et professeures du Collège de Maisonneuve
      </h2>
      <div class="header-droite">
      <span class="material-symbols-outlined" id="search-mobile">search</span>
      <label for="burger" class="bouton">
        <div class="ligne ligne1"></div>
        <div class="ligne ligne2"></div>
        <div class="ligne ligne3"></div>
      </label>
      </div>

      <input type="checkbox" id="burger" class="cc-burger" />

      <!-- Navigation header -->
      <nav class="navigation">
        <ul>
          <li><a href="">Actualités</a></li>
          <hr />
          <li><a href="">Infolettres</a></li>
          <hr />
          <li class="sous-nav">
            Conditions de travail
            <ul class="sous-menu">
              <li><a href="">Avantages sociaux</a></li>
              <li><a href="">Convention collective</a></li>
              <li><a href="">Relations de travail</a></li>
            </ul>
          </li>
          <hr />
          <li class="sous-nav">
            Nous connaître
            <ul class="sous-menu">
              <li><a href="">Comité exécutif</a></li>
              <li><a href="">Élections</a></li>
              <li><a href="">Galerie multimédia</a></li>
              <li><a href="">Notre histoire</a></li>
              <li><a href="">Régie interne</a></li>
            </ul>
          </li>
          <hr />
          <li><a href="">Contact</a></li>
          <hr />
          <li id="search-tablette"><span class="material-symbols-outlined" id="search">search</span></li>
        </ul>
      </nav>
      <!-- Navigation -->
    </header>
  </body>
</html>
