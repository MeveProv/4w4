<?php get_header() ?>
<main class="principal" >
   
   
    <section class="animation">
        <div class="animation__bloc">Graphisme</div>
        <div class="animation__bloc">Vidéo</div>
        <div class="animation__bloc">Design</div>
        <div class="animation__bloc">Sons</div>
        <div class="animation__bloc">Photoshop</div>
    </section>
    
    <?php
    //on appel le menu accueil
    $iconeMenuAccueil ='<svg  class="iconeMenuAccueil" width="32px" height="32px" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor" color="#000000"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M13 9l3 3m0 0l-3 3m3-3H8m13 0a9 9 0 11-18 0 9 9 0 0118 0z"></path></svg>';
        wp_nav_menu(array("menu"=>"accueil",
        "link_before"=>$iconeMenuAccueil,
                            "container"=>"nav"));
                            
    ?>
    <?php
    $iconeMenuEvenement ='<svg class="iconeMenuEvenement" width="32px" height="32px" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor" color="#000000"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12.066 11.2a1 1 0 000 1.6l5.334 4A1 1 0 0019 16V8a1 1 0 00-1.6-.8l-5.333 4zm-8 0a1 1 0 000 1.6l5.334 4A1 1 0 0011 16V8a1 1 0 00-1.6-.8l-5.334 4z"></path></svg>';
    //on appel le menu evenement
        wp_nav_menu(array("menu"=>"evenement",
        "link_before"=>$iconeMenuEvenement,
                            "container"=>"nav"));
                            
    ?>
    <?php
    $iconeMenuAtelier ='<svg class="iconeMenuAtelier width="32px" height="32px" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor" color="#000000"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 3v2m6-2v2M9 19v2m6-2v2M5 9H3m2 6H3m18-6h-2m2 6h-2M7 19h10a2 2 0 002-2V7a2 2 0 00-2-2H7a2 2 0 00-2 2v10a2 2 0 002 2zM9 9h6v6H9V9z"></path></svg>';
    //on appel le menu atelier
        wp_nav_menu(array("menu"=>"atelier",
        "link_before"=>$iconeMenuAtelier,
                            "container"=>"nav"));
                            
    ?>
    
    
    <h4>Portefolio de Marie-Eve</h4>
   
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