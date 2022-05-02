<!DOCTYPE html>
<!--
Template Name: Foxclore
Author: <a href="https://www.os-templates.com/">OS Templates</a>
Author URI: https://www.os-templates.com/
Copyright: OS-Templates.com
Licence: Free to use under our free template licence terms
Licence URI: https://www.os-templates.com/template-terms
-->
<html lang="">
<!-- To declare your language - read more here: https://www.w3.org/International/questions/qa-html-language-declarations -->

<head>
    <title>WP-Exam ~ AY</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no">
    <?php wp_head() ?>
</head>


<body id="top">
    <!-- ################################################################################################ -->
    <!-- ################################################################################################ -->
    <!-- ################################################################################################ -->
    <!-- Top Background Image Wrapper -->
    <div class="bgded overlay" style="background-image:url('<?php bloginfo('template_directory'); ?>/images/demo/backgrounds/01.png');">
        <!-- ################################################################################################ -->
        <header id="header" class="hoc clear">
            <!-- ################################################################################################ -->
            <div id="logo" class="one_quarter first">
                <h1><a href="https://ay.adavii.com/wp-exam">WP-Exam ~ AY</a></h1>
                <p>Junior wordpress developer</p>
            </div>
            <div class="three_quarter">
                <ul class="nospace clear">
                    <li class="one_third first">
                        <div class="block clear"><a href="#"><i class="fas fa-phone"></i></a> <span><strong>Give us a call:</strong> +00 (123) 456 7890</span></div>
                    </li>
                    <li class="one_third">
                        <div class="block clear"><a href="#"><i class="fas fa-envelope"></i></a> <span><strong>Send us a mail:</strong> support@domain.com</span></div>
                    </li>
                    <li class="one_third">
                        <div class="block clear"><a href="#"><i class="fas fa-clock"></i></a> <span><strong> Mon. - Sat.:</strong> 08.00am - 18.00pm</span></div>
                    </li>
                </ul>
            </div>
            <!-- ################################################################################################ -->
        </header>
        <!-- ################################################################################################ -->
        <!-- ################################################################################################ -->
        <!-- ################################################################################################ -->
        <section id="navwrapper" class="hoc clear">
            <!-- ################################################################################################ -->

            <nav id="mainav">
                <?php
                wp_nav_menu(
                    array(
                        'theme_location' => 'top-menu',
                        "container" => "ul",
                        "menu_class" => "clear",

                    )
                );
                ?>


            </nav>
            <!-- ################################################################################################ -->
            <div id="searchform">
                <div>
                    <form action="#" method="post">
                        <fieldset>
                            <legend>Quick Search:</legend>
                            <input type="text" placeholder="Enter search term&hellip;">
                            <button type="submit"><i class="fas fa-search"></i></button>
                        </fieldset>
                    </form>
                </div>
            </div>
            <!-- ################################################################################################ -->

        </section>
        <!-- ################################################################################################ -->
        <!-- ################################################################################################ -->
        <!-- ################################################################################################ -->
        <div id="pageintro" class="hoc clear">
            <!-- ################################################################################################ -->
            <article>
                <p>Anistan Yoganath</p>
                <h3 class="heading"><?php wp_title() ?></h3>
                <p>At dapibus ac velit cum sociis natoque penatibus et magnis dis parturient montes nascetur ridiculus mus maecenas ut</p>
                <footer><a class="btn" href="#">Laoreet pharetra</a></footer>
            </article>
            <!-- ################################################################################################ -->
        </div>
        <!-- ################################################################################################ -->
    </div>
    <!-- End Top Background Image Wrapper -->
    <!-- ################################################################################################ -->
    <!-- ################################################################################################ -->
    <!-- ################################################################################################ -->