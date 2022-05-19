<?php
    /**
     * Template Name: Atelier
     * 
     * @package WordPress
     * @subpackage cidw_4w4
     */
?>

<?php
    
get_header();

?>
<main class="site__main" id="atelier">


<?php if(have_posts()):the_post();?>
<?php the_title();?>
<?php
the_post_thumbnail();
 
?>

<h5 class="titreh5principal">ATELIERS</h5>
<?php 
$image = get_field('image');
if( !empty( $image ) ): ?>
    <img  class="img_evenement" src="<?php echo esc_url($image['url']); ?>" alt="<?php echo esc_attr($image['alt']); ?>" />
<?php endif; ?>

<h5 class="titreh5">Description</h5>
<p class="endroit"><?php the_field('description'); ?></p>


<h5 class="titreh5">Animateur de l'atelier</h5>
<p class="endroit">Animateur de l'Événement:<?php the_field('animateur'); ?></p>


<h5 class="titreh5">Date de début de l'atelier </h5>
<p class="endroit">Date:<?php the_field('datedebut'); ?></p>


<h5 class="titreh5">Date de fin de l’atelier</h5>
<p class="endroit">Date:<?php the_field('datefin'); ?></p>


<h5 class="titreh5">Jours de la semaine de l’atelier</h5>
<p class="endroit">Jours:<?php the_field('jour'); ?></p>


<h5 class="titreh5">Heure de début</h5>
<p class="endroit">Heure:<?php the_field('heuredebut'); ?></p>


<h5 class="titreh5">Heure de fin</h5>
<p class="endroit">Heure:<?php the_field('heurefin'); ?></p>


<h5 class="titreh5">Local ou se déroulera l’atelier</h5>
<p class="endroit">Local ou se déroulera l’atelier<?php the_field('local'); ?></p>

<?php
    endif;
?>
</main>

<?php get_footer();?>

