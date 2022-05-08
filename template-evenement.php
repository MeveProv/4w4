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
<main class="site__main">
<h1></h1>
<h2></h2>

<?php if(have_posts()):the_post();?>
<?php
the_post_thumbnail();
 
?>

<?php the_title();?>
<?php 
$image = get_field('image');
if( !empty( $image ) ): ?>
    <img src="<?php echo esc_url($image['url']); ?>" alt="<?php echo esc_attr($image['alt']); ?>" />
<?php endif; ?>
<h5>L'endroit</h5>
<p><?php the_field('endroit'); ?></p>
<h5>La Date</h5>
<p>Date de l'Événement: <?php the_field('date'); ?></p>
<h5>L'Heure</h5>
<p>L'heure: <?php the_field('heure'); ?></p>
<h5>Résumé</h5>
<p>Résumé de l'événement: <?php the_field('resume'); ?></p>
<h5>Organisateur</h5>
<p>L'organisteur de l'événement: <?php the_field('organisateur'); ?></p>

<?php
    endif;
?>
</main>

<?php get_footer();?>

