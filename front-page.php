<?php get_header() ?>
<main class="principal">
   
   
    <section class="animation">
        <div class="animation__bloc">Graphisme</div>
        <div class="animation__bloc">Vidéo</div>
        <div class="animation__bloc">Design</div>
        <div class="animation__bloc">Sons</div>
        <div class="animation__bloc">Photoshop</div>
    </section>
    <h3>Portefolio de Marie-Eve</h3>
   
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