<?php
    /**
     * Template Name: Évenement
     * 
     * @package WordPress
     * @subpackage cidw_4w4
     */
?>

<?php
    
get_header();

?>
<main class="site__main" id="evenement">


<?php if(have_posts()):the_post();?>
<?php
the_post_thumbnail();
 
?>

<h5 class="titreh5principal">ÉVÉNEMENTS À VENIR</h5>
<?php 
$image = get_field('image');
if( !empty( $image ) ): ?>
    <img  class="img_evenement" src="<?php echo esc_url($image['url']); ?>" alt="<?php echo esc_attr($image['alt']); ?>" />
<?php endif; ?>
<h5 class="titreh5">L'endroit</h5>
<p class="endroit"><?php the_field('endroit'); ?></p>
<h5 class="titreh5">La Date</h5>
<p class="date">Date de l'Événement: <?php the_field('date'); ?></p>
<h5 class="titreh5">L'Heure</h5>
<p class="heure">L'heure: <?php the_field('heure'); ?></p>
<h5 class="titreh5">Résumé</h5>
<p class="resume">Résumé de l'événement: <?php the_field('resume'); ?></p>
<h5 class="titreh5">Organisateur</h5>
<p class="organisateur">L'organisteur de l'événement: <?php the_field('organisateur'); ?></p>

<?php
    endif;
?>
</main>

<?php get_footer();?>

