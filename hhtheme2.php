Post Content Showing
--------------------

date 
custom: jS F, Y
codex.wordpress.org/Formatting_Date_and_Time


index.php
------
<!<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <?php wp_head(); ?>
    </head>
    <body <?php body_class(); ?> >
        <div class="header">
            <div class="container">
                <div class="row">
                    <div class="col-md-12">
                        <h3 class="tagline">
                           <?php bloginfo("description"); ?> 
                        </h3>
                        <h1 class="align-self-center display1 text-center heading">
                            <?php bloginfo("name"); ?>
                        </h1>
                    </div>
                  
                </div>
            </div>
        </div>


        <div class="posts">

             <?php
             while(have_posts()):
                the_post();
                ?>

            <div class="post" <?php post_class(); ?> >
                <div class="container">
                    <div class="row">
                        <div class="col-md-12">
                            <h2 class="post-title">
                                <?php the_title(); ?>
                            </h2>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-4">
                            <p>
                                <strong> <?php the_author(); ?></strong><br/>
                                <?php the_date(); ?>
                            </p>
                            <ul class="list-unstyled">
                                <li>Dhaka</li>
                            </ul>
                        </div>
                        <div class="col-md-8">
                            <p>
                               <?php
                               if(has_post_thumbnail())
                                 {
                                    the_post_thumbnail("large", array("class"=>"img-fluid"));
                                 }
                                 ?>
                            </p>
                              <?php the_content(); ?>
                            <p>

                            </p>
                            <p>
                               
                            </p>
                        </div>
                    </div>
                </div>
            </div> 
            

                <?php
                endwhile;
             ?>

           
        </div>



        <div class="footer">
            <div class="container">
                <div class="row">
                    <div class="col-md-12">
                        &copy; shafiulazam.me - All Rights Reserved
                    </div>
                </div>
            </div>
        </div>

        <?php wp_footer(); ?>
    
    </body>
</html>


style.css
========
/*
Theme Name: Alpha
Theme URI: 
Author: Mohammad Shafiul Azam
Author URI: https://shafiulazam.me
Description: My First HyperMinimal Theme
            ...........  ...........
             ...............
Version: 1.0
License: GNU General Pulblic License v2 or later
License URI: https://www.gnu.org/licenses/gpl-2.0.html
Tags: education, news, blog
Text Domain: alpha
*/

h1.heading{
    font-family: "Arial Black";
    width: 700px;
    margin: auto;
    margin-bottom: 70px;
    padding-bottom: 50px;
    border-bottom: 2px solid #2d0b7a;
}

h3.tagline{
    font-family: Arial;
    margin: auto;
    font-size: 18px;
    margin-top: 50px;
    margin-bottom: 15px;
    width: 700px;
    text-align: center;
}

h2.post-title{
    margin-bottom: 30px;
}

.post p{
    font-family: "Helventica Neue";
    line-height: 1.7em;
    font-size: 18px;
}

.post .row:nth-child(2) {
    padding-bottom: 50px;
    border-bottom: 1px solid #ccc;
}

.post:last-child .row:nth-child(2){
    border-bottom: none;
}

.post p img{
    max-width: 100%;
    height: auto;
}

.footer{
    padding-bottom: 10px;
    padding-top: 10px;
    background-color: #222;
    color:#ccc;
}

.tags li{
    color: #3D9970;
}

function.php
-----------
<?php

function alpha_bootstrapping(){
   load_theme_textdomain("alpha");
   add_theme_support("post-thumbnails");
   add_theme_support("title-tag");
}

add_action("after_setup_theme","alpha_bootstrapping");

function alpha_assets(){
    wp_enqueue_style("alpha",get_stylesheet_uri());
    wp_enqueue_style("bootstrap","//maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css");

}
add_action("wp_enqueue_scripts","alpha_assets");




