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
    <h1 class="header__titre"><?php bloginfo('name'); ?></h1>
</a>

    <h2 class="header__description"><?php bloginfo('description'); ?></h2>
    <section class="utile">
    

  <div class="icone">
   
    <a[ href="#" class ="icone__lien">
    <svg width="64px" height="64px" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 30 30" fill="currentColor" color="#ffffff"><path d="M11.08 14.53v-.02c-.01-.08 0-.2 0-.37.01-.16.04-.43.1-.81.06-.38.14-.76.25-1.15s.28-.84.51-1.35c.23-.51.5-.99.82-1.44.32-.45.74-.92 1.26-1.39.52-.47 1.1-.89 1.73-1.24.16-.09.32-.11.49-.06s.3.15.38.31c.09.16.11.32.06.5-.05.17-.15.31-.3.39a7.42 7.42 0 00-3.03 3.05c.54-.25 1.08-.38 1.63-.38 1.07 0 2 .38 2.77 1.15.77.77 1.15 1.69 1.15 2.76v.24c0 .08-.02.25-.04.52s-.06.52-.11.77-.13.56-.23.93c-.11.37-.23.73-.38 1.06-.15.33-.34.7-.58 1.1s-.51.77-.81 1.12c-.3.35-.66.7-1.08 1.05-.43.35-.89.67-1.39.95-.09.06-.2.08-.31.08-.26 0-.45-.12-.58-.35a.606.606 0 01-.06-.49c.05-.17.15-.3.31-.38C14.98 20.33 16 19.3 16.7 18c-.54.26-1.11.38-1.71.38-.69 0-1.34-.17-1.94-.52-.6-.34-1.07-.81-1.43-1.41-.35-.58-.53-1.22-.54-1.92zm1.7-.05c0 .61.22 1.13.65 1.57.43.43.95.65 1.56.65.57 0 1.06-.19 1.49-.57.42-.38.66-.85.73-1.41l.01-.23c0-.02 0-.04.01-.05-.01-.6-.23-1.11-.66-1.52-.43-.42-.96-.62-1.57-.62-.56 0-1.04.18-1.46.54s-.66.82-.73 1.36l-.02.25v.03z"></path></svg>
    </a>
    <a[ href="#" class ="icone__lien">
    <svg width="64px" height="64px" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 30 30" fill="currentColor" color="#ffffff"><path d="M3.74 14.44c0-1.52.3-2.98.89-4.37s1.4-2.58 2.4-3.59 2.2-1.81 3.59-2.4 2.84-.89 4.37-.89 2.98.3 4.37.89 2.59 1.4 3.6 2.4 1.81 2.2 2.4 3.59.89 2.84.89 4.37-.3 2.98-.89 4.37-1.4 2.59-2.4 3.6-2.2 1.81-3.6 2.4-2.85.89-4.37.89-2.98-.3-4.37-.89-2.58-1.4-3.59-2.4-1.81-2.2-2.4-3.6-.89-2.84-.89-4.37zM14.8 24.51h.19c1.37 0 2.67-.27 3.91-.8s2.31-1.25 3.21-2.15 1.61-1.97 2.15-3.21.8-2.54.8-3.91c0-1.36-.27-2.66-.8-3.9s-1.25-2.31-2.15-3.21-1.97-1.61-3.21-2.15-2.54-.8-3.91-.8h-.19v20.13z"></path></svg>
    </a>
    <a[ href="#" class ="icone__lien">
    <svg width="64px" height="64px" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 30 30" fill="currentColor" color="#ffffff"><path d="M2.35 21.05c0 .24.08.43.25.59.17.16.38.23.63.23h9.4c.24 0 .43-.08.59-.23.16-.16.23-.35.23-.59 0-.25-.08-.45-.23-.61a.791.791 0 00-.59-.24h-9.4c-.25 0-.46.08-.63.24s-.25.36-.25.61zM4.98 18c0 .24.09.44.26.6.16.17.36.25.6.25h9.42c.23 0 .43-.08.59-.25.16-.17.24-.37.24-.6 0-.23-.08-.43-.23-.59s-.35-.24-.59-.24H5.85c-.24 0-.44.08-.61.24-.17.16-.26.36-.26.59zm1.04-2.34c0 .09.06.14.18.14h1.43c.09 0 .16-.05.22-.14.23-.54.57-.99 1.04-1.35.47-.36.99-.56 1.58-.6l.55-.07c.12 0 .18-.06.18-.17l.07-.52c.11-1.09.57-2 1.38-2.72.82-.73 1.77-1.09 2.87-1.09 1.09 0 2.04.36 2.84 1.08.8.72 1.27 1.62 1.41 2.71l.08.58c0 .11.06.17.18.17h1.61c.91 0 1.68.32 2.32.96.64.64.96 1.41.96 2.31 0 .88-.32 1.65-.97 2.29-.65.65-1.41.97-2.3.97h-6.91c-.11 0-.17.06-.17.17v1.34c0 .11.06.17.17.17h6.91c.9 0 1.73-.22 2.49-.66.76-.44 1.37-1.04 1.81-1.8.44-.76.67-1.59.67-2.49s-.22-1.72-.65-2.47c.72-.64 1.22-1.5 1.51-2.58l.18-.68c.01-.01.01-.03.01-.07 0-.08-.05-.13-.15-.16l-.62-.22c-.44-.13-.83-.32-1.16-.57-.34-.25-.6-.53-.8-.84-.2-.31-.34-.62-.44-.94-.1-.32-.15-.63-.15-.95 0-.24.04-.53.11-.87l.13-.61c.04-.09 0-.17-.13-.23l-.84-.25c-.44-.11-.85-.16-1.25-.16-.38 0-.75.04-1.13.13s-.77.22-1.18.41c-.41.18-.8.45-1.18.8-.38.35-.71.75-.99 1.22-.77-.32-1.57-.48-2.37-.48-1.41 0-2.66.44-3.75 1.32s-1.78 2-2.08 3.38c-.87.2-1.63.61-2.28 1.22a4.9 4.9 0 00-1.36 2.21v.03c-.02.01-.03.04-.03.08zm.73 8.49c0 .24.08.44.25.6.16.17.36.25.6.25h9.43c.24 0 .44-.08.61-.25.17-.17.25-.37.25-.6 0-.23-.08-.43-.25-.59a.853.853 0 00-.61-.24H7.6c-.24 0-.44.08-.6.24-.17.16-.25.36-.25.59zM19.33 8.78c.34-.55.79-.98 1.35-1.28.55-.3 1.12-.45 1.7-.44.11 0 .2 0 .25.01v.24c0 .97.26 1.9.79 2.79.53.88 1.25 1.55 2.17 1.98-.17.4-.43.76-.76 1.07-.88-.79-1.95-1.18-3.2-1.18h-.32c-.25-1.2-.91-2.26-1.98-3.19z"></path></svg>
    </a>
    <a[ href="#" class ="icone__lien">
    <svg width="64px" height="64px" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 30 30" fill="currentColor" color="#ffffff"><path d="M9.91 19.56a5.101 5.101 0 012.24-4.22V5.42c0-.8.27-1.48.82-2.03s1.23-.84 2.03-.84c.81 0 1.49.28 2.04.83.55.56.83 1.23.83 2.03v9.92c.71.49 1.25 1.11 1.64 1.84s.58 1.53.58 2.38c0 .92-.23 1.78-.68 2.56s-1.07 1.4-1.85 1.85-1.63.68-2.56.68c-.92 0-1.77-.23-2.55-.68s-1.4-1.07-1.86-1.85-.68-1.63-.68-2.55zm1.76 0c0 .93.33 1.73.98 2.39.65.66 1.44.99 2.36.99.93 0 1.73-.33 2.4-1s1.01-1.46 1.01-2.37c0-.62-.16-1.2-.48-1.73-.32-.53-.76-.94-1.32-1.23l-.28-.14c-.1-.04-.15-.14-.15-.29V5.42c0-.32-.11-.59-.34-.81-.23-.21-.51-.32-.85-.32-.32 0-.6.11-.83.32-.23.21-.34.48-.34.81v10.74c0 .15-.05.25-.14.29l-.27.14c-.55.29-.98.7-1.29 1.23-.31.53-.46 1.1-.46 1.74zm.78 0c0 .71.24 1.32.73 1.82s1.07.75 1.76.75 1.28-.25 1.79-.75.76-1.11.76-1.81c0-.63-.22-1.19-.65-1.67-.43-.48-.96-.77-1.58-.85V9.69c0-.06-.03-.13-.1-.19a.299.299 0 00-.22-.1c-.09 0-.16.03-.21.08-.05.06-.08.12-.08.21v7.34c-.61.09-1.13.37-1.56.85-.43.49-.64 1.04-.64 1.68z"></path></svg>
    </a>

  </div>
  
</section>

<?php get_search_form()  ?>



</header>
<section class="site__barre">
    <input type="checkbox"  id="chk-burger">
    <label for="chk-burger" id="burger">
        <svg width="34px" height="34px" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="currentColor" color="#ddd"><path fill-rule="evenodd" d="M3 5a1 1 0 011-1h12a1 1 0 110 2H4a1 1 0 01-1-1zm0 5a1 1 0 011-1h12a1 1 0 110 2H4a1 1 0 01-1-1zm0 5a1 1 0 011-1h12a1 1 0 110 2H4a1 1 0 01-1-1z" clip-rule="evenodd"></path></svg>
    </label>
    <?php wp_nav_menu(array("menu"=>"principal",
                            "container"=>"nav")); ?>
</section>
