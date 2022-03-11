<?php get_header() ?>
<main class="principal">
    <h1></h1>
    <!----front-page.php---->
    <section class="animation">
        <div class="animation__bloc">Graphisme</div>
        <div class="animation__bloc">Vidéo</div>
        <div class="animation__bloc">Design</div>
        <div class="animation__bloc">Sons</div>
        <div class="animation__bloc">Photoshop</div>
    </section>

   
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