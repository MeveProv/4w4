<?php get_header() ?>
<main class="principal" style="background-color: <?= get_theme_mod('couleur_background_body');?>;">
    <h1></h1>
    <?php wp_nav_menu(array(
        "menu" => "categorie_cours",
        "container" => "nav"
    )); 
    ?>
    <section class="formation">
        <a class="tri" href="?cletri=title&ordre=asc">Ascendant</a>
        <a class="tri"href="?cletri=title&ordre=desc">Decendant</a>
        
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
                        //$titreFiltreCours = substr($titre, 7, -6);
                        $titreFiltreCours = substr($titre, 3, -6);//a mettre avec la nouvelle base de donné
                       // $nbHeures = substr($titre, -6);
                        $nbHeures = get_field( "nombre_dheures" );
                        $departement = get_field("departement");

                        //$sigleCours = substr($titre, 0, 7);
                        $sigleCours = substr($titre, 0, 3);//a mettre avec la nouvelle base de donné
                        //$descCours = get_the_excerpt();
                        ///
                        //creation du bouton pour lire la suite 
                        $descCours = get_the_content();
                        ?>
                        <code class="cours__desc__complet" style= "display:none"><?= $descCours; ?></code>
                        
                        <?php the_post_thumbnail("thumbnail");?>
                        <h3 class="cours__titre">
                            <a href=" <?php echo get_permalink();?>">
                            <?= $titreFiltreCours; ?>
                        </a> 
                        </h3>
                       
                        <div class="cours__nbre-heure"><?= $nbHeures; ?></div>
                        <p class="cours__sigle"><?= $sigleCours; ?> </p>
                        <p class="cours__desc"> <?= wp_trim_words ($descCours,15,'<button class="cours__desc__suite" href=#> Lire la suite </button>'); ?></p>
                        <!--<p class="cours__dep"> //////// AJOUTER PHP C)MME EN HAUT $departement; </p>-->
                        <p class="cours__dep"> <?= $departement; ?></p>
                    </article>
                
                
                <?php endwhile ?>
                <?php endif ?>
        </div>
    </section>
</main>
<?php get_footer() ?>