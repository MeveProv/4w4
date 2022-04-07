<?php get_header() ?>
<main class="principal">
   
   
    <section class="animation">
        <div class="animation__bloc">Graphisme</div>
        <div class="animation__bloc">Vidéo</div>
        <div class="animation__bloc">Design</div>
        <div class="animation__bloc">Sons</div>
        <div class="animation__bloc">Photoshop</div>
    </section>
    <?php
    //on appel le menu accueil
        wp_nav_menu(array("menu"=>"accueil",
                            "container"=>"nav"));
                            
    ?>
    <?php
    //on appel le menu evenement
        wp_nav_menu(array("menu"=>"evenement",
                            "container"=>"nav"));
                            
    ?>
    <h4>et le portefolio de Marie-Eve...</h4>
   
            <?php if (have_posts()):the_post();?>
              <?php
                  the_title();
              ?> 
              <?php
                  the_content();
              ?>
                <?php endif ?>
       
</main>
<?php get_footer() ?>