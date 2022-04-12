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
//the_post_thumbnail(); /////////futur photo grande a ajuster 
  echo get_custom_logo();
?>

<?php the_title();?>
<?php the_content(); ?>
<?php
    endif;
?>
</main>

<?php get_footer();?>

