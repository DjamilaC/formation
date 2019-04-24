
<?php get_header()?> <!--fonction wordpress, permet d'inclure le haut du site, je prends le header.php et je le colle ici-->

<?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
<!-- La condition IF permet de verifier si des articles ont été posté, si oui, la boucle while les passent en revue et les affiche -->

<!-- Le titre h2 permet d'afficher le titre de l'article(the_title()) et son lien URL (the_permalink) -->
<h2 class="display-4 text-center"><a href="<?php the_permalink(); ?>" class="text-dark"><?php the_title(); ?></a></h2>

 

 <!-- Affiche le corps (Content) de l'Article dans un bloc div. -->
 <div class="container">
 <!-- Affiche la Date. -->
    <small><?php the_time('F jS, Y'); ?></small>
    <?php the_content(); ?>
    </div>

<?php endwhile; else: ?>
<!-- on tombe dans la condition else dans le cas ou aucun article n'a pas été posté, donc on affiche un message d'erreur -->
<p> Contenu non trouvé !!! </p>

<?php endif; ?>


<?php get_footer()?> <!--fonction wordpress, permet d'inclure le bas du site, je prends le footer.php et je le colle ici-->

