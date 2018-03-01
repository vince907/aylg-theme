<?php
/* Template Name: content Template */
get_header();
?>


<div class="main-content-width-wrapper-1">
    <?php get_sidebar('main-sidebar'); ?>
    <div class="full-width-entry-1">
        <h1 id="content-title"><?php echo get_the_title() ?></h1>

        <main class="main-content-1">            <?php
            // Start the loop
            if (have_posts()) :
            while (have_posts()) :
            the_post();
            the_content();
            endwhile;
            endif;
                                               ?>
        </main>
    </div>

</div>


<?php get_footer(); ?>