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
<h1>----------evenement-------</h1>
<h2>----Ceci est une page example pour template evenement</h2>

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
<h4>L'endroit</h4>
<p><?php the_field('endroit'); ?></p>
<h4>La Date</h4>
<p>Date de l'Événement: <?php the_field('date'); ?></p>
<h4>L'Heure</h4>
<p>L'heure: <?php the_field('heure'); ?></p>
<h4>Résumé</h4>
<p>Résumé de l'événement: <?php the_field('resume'); ?></p>
<h4>Organisateur</h4>
<p>L'organisteur de l'événement: <?php the_field('organisateur'); ?></p>

<?php
    endif;
?>
</main>

<?php get_footer();?>

