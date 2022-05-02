<?php

/**
 * Template Name: Gallery
 */
get_header(); ?>

<div class="wrapper row3">
    <main class="hoc container clear">

        <div class="content">
            <!-- ################################################################################################ -->
            <div id="gallery">
                <figure>
                    <header class="heading">Galleries</header>
                    <?php if (function_exists('photo_gallery')) {
                        photo_gallery(1);
                    } ?>
                    <figcaption>Lorem, ipsum dolor sit amet consectetur adipisicing elit. Ullam id molestiae explicabo, saepe reiciendis veniam quos ad eligendi excepturi in, inventore nihil debitis similique adipisci tempore cumque, quo dolores error?</figcaption>
                </figure>
            </div>

        </div>

        <!-- / main body -->
        <div class="clear"></div>
    </main>
</div>



<?php get_footer(); ?>