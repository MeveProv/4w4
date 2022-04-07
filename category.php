<?php get_header() ?>
<main class="principal">
    <h1></h1>
    <?php wp_nav_menu(array(
        "menu" => "categorie_cours",
        "container" => "nav"
    )); 
    ?>
    <section class="formation">
        <a href="?cletri=title&ordre=asc">Tri Ascendant</a>
        <a href="?cletri=title&ordre=desc">Tri Decendant</a>
        
        <?php

$slug_categorie_de_la_page = trouve_la_categorie(array('cours','creation-3d','web','jeu','design','utilitaire','video'));

$ma_categorie = get_category_by_slug($slug_categorie_de_la_page);

echo "<h2>" . $ma_categorie->name . "</h2>";

?> 
        <h2 class="formation__titre">Liste des cours du programme TIM</h2>
        <div class="formation__liste">
            <?php if (have_posts()):
                while (have_posts()): the_post(); ?>
                 <?php 
                      //the_category();
                     $categories = get_the_category();
                     //var_dump($categories);
                     //aller chercher dans le tableau ...le 2e element dans le dump dempo du tablaeu
                    
                 ?>
                <article class="formation__cours <?php echo $categories[1] ->slug; ?> ">
                        <?php
                        $titre = get_the_title();
                        $titreFiltreCours = substr($titre, 7, -6);
                        $nbHeures = substr($titre, -6);
                        $sigleCours = substr($titre, 0, 7);
                        $descCours = get_the_excerpt();

                        ?>
                        
                        <?php the_post_thumbnail("thumbnail");?>
                        <h3 class="cours__titre">
                            <a href=" <?php echo get_permalink();?>">
                            <?= $titreFiltreCours; ?>
                        </a> 
                        </h3>
                       
                        <div class="cours__nbre-heure"><?= $nbHeures; ?></div>
                        <p class="cours__sigle"><?= $sigleCours; ?> </p>
                        <p class="cours__desc"> <?= $descCours; ?></p>
                    </article>
                
                
                <?php endwhile ?>
                <?php endif ?>
        </div>
    </section>
</main>
<?php get_footer() ?>