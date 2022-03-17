<?php
/**
 * L'entête « header » de chacune des pages de notre site
 */
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <?php wp_head() ?>
</head>
<body  <?php body_class("site"); ?>>
<header class="site__header">
<a href="<?php echo esc_url( home_url( '/' ) ); ?>" rel="home">
<?php
  echo get_custom_logo();
?>
</a>
<a href="<?php echo esc_url( home_url( '/' ) ); ?>" rel="home">

    <h1 class="header__titre"><?php bloginfo('name'); ?></h1>
</a>

    <h2 class="header__description"><?php bloginfo('description'); ?></h2>
    <section class="utile">
    <?php
       get_sidebar('entete_1');
    ?>

<?php get_search_form()  ?>
  
</section>





</header>
<section class="site__barre">
    <input type="checkbox"  id="chk-burger">
    <label for="chk-burger" id="burger">
        <svg width="34px" height="34px" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="currentColor" color="#ddd"><path fill-rule="evenodd" d="M3 5a1 1 0 011-1h12a1 1 0 110 2H4a1 1 0 01-1-1zm0 5a1 1 0 011-1h12a1 1 0 110 2H4a1 1 0 01-1-1zm0 5a1 1 0 011-1h12a1 1 0 110 2H4a1 1 0 01-1-1z" clip-rule="evenodd"></path></svg>
    </label>
    <?php $iconeMenu ='<svg class ="icone__lien" width="26px" height="26px" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="currentColor" color="#000000"><path d="M0 0h24v24H0z" fill="none"></path><path d="M12 2C6.47 2 2 6.47 2 12s4.47 10 10 10 10-4.47 10-10S17.53 2 12 2z"></path></svg>';
    wp_nav_menu(array("menu"=>"principal",
                            "container"=>"nav",
                            "link_before"=>$iconeMenu)); ?>
</section>


           