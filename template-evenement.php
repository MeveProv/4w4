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
<h5 class="titreh5">L'ENDROIT</h5>

<p class="endroit"><?php the_field('endroit'); ?></p>
<button class="info" href=#> INFOS </button>
<h5 class="titreh5">LA DATE</h5>
<p class="date">Date de l'Événement: <?php the_field('date'); ?></p>
<button class="info" href=#> INFOS </button>
<h5 class="titreh5">À QUELLE HEURE</h5>
<p class="heure">L'heure: <?php the_field('heure'); ?></p>
<button class="info" href=#> INFOS </button>
<h5 class="titreh5">EN RÉSUMÉ</h5>
<p class="resume">Résumé de l'événement: <?php the_field('resume'); ?></p>
<button class="info" href=#> INFOS </button>
<h5 class="titreh5">QUI ORGANISE</h5>
<p class="organisateur">L'organisteur de l'événement: <?php the_field('organisateur'); ?></p>
<button class="info" href=#> INFOS </button>

<?php
    endif;
?>
</main>

<?php get_footer();?>

