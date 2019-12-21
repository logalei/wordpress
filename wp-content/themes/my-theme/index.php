<?php get_header(); ?>

<div class="container">

<?php
if ( have_posts() ) {
  while ( have_posts() ) {
    /**
     * La méthode the_post() permet de charger le post courant
     * Un post est un type de contenu, par exemple une actualité ou une page
     **/
    the_post();

    /**
     * La méthode the_content() affiche le contenu du post en cours
     * Il s'agit du contenu que vous avez renseigné dans le back-office
     * Il existe d'autres méthodes, par exemple pour afficher le Titre du contenu, on peut utiliser la méthode the_title()
     */
    the_content();
?>

<section class="section-1">
  <div class="section-light-title"> Les rencontres de la Fondation le 03 décembre à Bruxelles </div>
  <div class="section-title">  <?php the_field('banner_title_brown'); ?> </div>
  <div class="section-title-green"> <?php the_field('banner_title_green'); ?>  </div>
  <div class="section-button-green"> <?php the_field('background_image'); ?> </div>
</section>


<section class="section-2">
  <div class="section-title"> <?php the_field('titre_conference'); ?> </div> </div>
  <div class="section-paragraphe"> <?php the_field('texte_conference'); ?> </div> </div>
</section>

<section class="bandeau">
</section>

<section class="section-3">
    <div class="section-title"><?php the_field('titre_agenda'); ?> </div></div>

    <div id="table">
      <div>
        <h1 class="section-title-green2"> <?php the_field('agenda_gauche'); ?>  </h1>
            <?php if(have_rows('liste_gauche')): ?>
              <?php while(have_rows('liste_gauche')): the_row(); ?>
                <div><span><?php the_sub_field('heure'); ?></span> <?php the_sub_field('contenu'); ?> </div>
              <?php endwhile; ?>
            <?php endif; ?>
      </div>

      <div>
        <h1 class="section-title-green3">  <?php the_field('agenda_droite'); ?></h1>
        <?php if(have_rows('liste_droite')): ?>
          <?php while(have_rows('liste_droite')): the_row(); ?>
            <div><span><?php the_sub_field('heure'); ?></span> <?php the_sub_field('contenu'); ?> </div>
          <?php endwhile; ?>
        <?php endif; ?>
      </div>

    </div>
</section>


<section class=section-button>
  <div class="section-button-green2"> S'INSCRIRE AUX RENCONTRES</div>
</section>


<div class="section-orateur"><?php the_field('titre_orateur'); ?>
<p class="section-paragraphe"><?php the_field('contenu_orateur'); ?></p>


<section class="section-4">
    <div class="groupe-orateurs">
          <?php if(have_rows('orateur')): ?>
            <?php while(have_rows('orateur')): the_row(); ?>
              <div class="orateur">
                <img class="portrait" src="<?php the_sub_field('photo'); ?>" alt="">
                  <div class="orateur-nom"> <?php the_sub_field('nom'); ?></div>
                  <div class="orateur-bio"><?php the_sub_field('contenu'); ?> </div>
                  <div class="orateur-cta"><?php the_sub_field('video'); ?> </div>
              </div>
            <?php endwhile;?>
          <?php endif;?>
      </div>
</section>


<section class="section-5">
  <div class="section-title"><?php the_sub_field('titre_information'); ?> </div>
      <div class="info-principale">
        <div class="information">
          <?php if(have_rows('information')): ?>
            <?php while(have_rows('information')): the_row(); ?>
                <?php the_sub_field('photo'); ?>
                <?php the_sub_field('contenu'); ?>
            <?php endwhile; ?>
          <?php endif; ?>
        </div>
    </div>
    <div class="quick-info-cta">
        <img class="quick-info-cta-icon" src="wp-content/uploads/2019/12/picto-map.svg"/>
        <span class="quick-info-cta-text"><?php the_sub_field('titre_carte'); ?></span>
    </div>
</section>


<section class="section-6">
  <div class="section-title"><?php the_sub_field('titre_video'); ?></div>
</section>


<section class="section-7">
  <div class="section-title"><?php the_sub_field('titre_actu'); ?></div>
</section>

<?php
}
}
?>



<?php get_footer(); ?>
