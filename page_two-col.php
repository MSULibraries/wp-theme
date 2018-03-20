<?php
/* Template Name: Full-Width Template */
    get_header();
?>


    <main class="main-content">
        <h1><?php echo get_the_title()  ?></h1>
        <?php
        // Start the loop
        if (have_posts()) :
            while (have_posts()) :
                the_post();
                    the_content();
            endwhile;
        endif;
        ?> 
    </main>
    
<?php get_footer(); ?>