<?php
    
get_header();

?>
<main class="site__main">
    <h1></h1>
    <!--------single.php------->

<?php if(have_posts()):while(have_posts()):the_post();?>
   <article class="cours">
       <h1 class="cours__titre">
           <?php echo get_the_title() ?>
       </h1>
       
       <?php  
       the_post_thumbnail();
       ?>
       </article>
       <section class="cours__contenu">
           <?php
               the_content();
           ?>
       </section>

   </article>

<?php endwhile; ?>
<?php
    endif;
?>
</main>

<?php get_footer();?>
