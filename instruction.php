<?php

/**
 * Any theme to be accepted, it should have style.css and index.php
 * Close html and body tag in footer.php.
 * Everything flows through index.php, include header and footer files here.
 * wp offers wp_head and wp_footer to include those two files.
 * to include custom style or js(except style.css which is automaticaly detected by wp), we must have a function.php
 * In function.php, we can create either hooks or filters.
 * By default, all our post is in index.php.By if we want it to be published in some specific pages, go to settings-.reading->post page.
 * To create page templates(individual pages like home, contact or about, we create files and precede file name with page-about-us for http://localhost/wordpress101/about-us/
 * But this is not an good practice.We can create specialized page templates to be used within the dashboard.Just create a template followed by page- as a prefix.In dashboard, in pages options we can choose templates where default template indicated index.php.
 * To over-ride traditional serach form, craete searchform.php.
 * single.php file to style individual post type when opened in new page
 * 
*/



 ?>
