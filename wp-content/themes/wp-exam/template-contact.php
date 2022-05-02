<?php

/**
 * Template Name: Contact us
 */
get_header(); ?>



<div class="wrapper row3">
    <main class="hoc container clear">

        <div class="content">
            <h2>Find us here.</h2>
            <iframe src="https://www.google.com/maps/d/u/0/embed?mid=11tZHU7thWa_r74GZDxdxfRMXJBNssHFv&ehbc=2E312F" width="100%" height="480" style="border: none;"></iframe>

            <div id="comments">


                <h2>Feel free to talk to us.</h2>
                <form action="#" method="post">
                    <div class="one_third first">
                        <label for="name">Name <span>*</span></label>
                        <input type="text" name="name" id="name" value="" size="22" required>
                    </div>
                    <div class="one_third">
                        <label for="email">Mail <span>*</span></label>
                        <input type="email" name="email" id="email" value="" size="22" required>
                    </div>
                    <div class="one_third">
                        <label for="url">Website</label>
                        <input type="url" name="url" id="url" value="" size="22">
                    </div>
                    <div class="block clear">
                        <label for="comment">Your Message</label>
                        <textarea name="comment" id="comment" cols="25" rows="10"></textarea>
                    </div>
                    <div>
                        <input type="submit" name="submit" value="Submit Form">
                        &nbsp;
                        <input type="reset" name="reset" value="Reset Form">
                    </div>
                </form>
            </div>
            <!-- ################################################################################################ -->
        </div>
        <!-- ################################################################################################ -->
        <!-- / main body -->
        <div class="clear"></div>
    </main>
</div>


<?php get_footer(); ?>