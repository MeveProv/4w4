<?php
    get_header()
?>

<main class="site__main">
     <!------ si on a quec chose boucle qui va chercher le contenu jusqua temp quil en a plus    ------>
    <h1>------ search.php -------</h1>
    <?php if(have_posts()) : ?> 
        <?php while(have_posts()): the_post();?>
        <!------ON affiche  quon a deja   ------>
    <h3> 
        <?php echo get_permalink() ;?>  
    <?php the_title(); ?></h3>
        <p><?php echo wp_trim_words(get_the_content(), 20, "...>");?></p>
        <hr>
    
    <?php endwhile ?>

    <?php else : ?>
    <p>Aucun résultat</p>
    <?php endif ?>

</main>

<?php
    get_footer();
?>