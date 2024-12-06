Minimum theme file for a theme
Derectory  alpha

index.php, style.css


style.css
its carry those a theme stroy. like thats
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

primmary

index.php
<?php
$title = get_bloginfo("name");
echo change_case($title);


functions.php
<?php

function change_case($text){
    return strtoupper($text);
}

screenshot.png


Using of LOOP
------------
<!DOCTYPE html>
<html lang="en">
<head>
    <title>
        <?php bloginfo(); ?>
    </title>
</head>
<body>
    <?php
    while(have_posts()){
        the_post();

        echo "<h3>";
        the_title();
        //the_content();
        echo "</h3>";
    }
    ?>
</body>
</html>


Bootstrapping
-------------

Basic HTML to WP Template
---------------------------

To Do List

1. add template markup to index.php file
2. necessary bootstrapping (after-theme_setup action hook)
3. write css to style.css
4. add support for bootstrap css
5. change markup to theme code
6. split into multiple files


HOOK

functions.php

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


Theme Bootstrapping
---------------------------

index.php
--------
<!<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <?php wp_head(); ?>
    </head>
    <body>
        <div class="header">
            <div class="container">
                <div class="row">
                    <div class="col-md-12">
                        <h3 class="tagline">
                           <?php bloginfo("description"); ?> 
                        </h3>
                        <h1 class="align-self-center display1 text-center">
                            <?php bloginfo("name"); ?>
                        </h1>
                    </div>
                  
                </div>
            </div>
        </div>

        <div class="posts">
            <div class="post">
                <div class="container">
                    <div class="row">
                        <div class="col-md-12">
                            <h2 class="post-title">This is a beautifulday in Dhaka!</h2>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-4">
                            <p>
                                <strong>John Doe</strong>
                                15th May, 2018
                            </p>
                            <ul class="list-unstyled">
                                <li>Dhaka</li>
                            </ul>
                        </div>
                        <div class="col-md-8">
                            <p>
                                <img src="#" alt="Post Title" class="img-fluid">
                            </p>
                            <p>Lorem ipsum, dolor sit amet consectetur adipisicing elit. Dolor praesentium enim ducimus temporibus velit accusamus ab quis sequi assumenda voluptate, doloremque officiis quae ea quam magni nulla officia. Ullam, et!

                            </p>
                            <p>
                                Lorem, ipsum dolor sit amet consectetur adipisicing elit. Amet accusantium ipsam velit debitis unde eveniet quos adipisci, recusandae eligendi id beatae praesentium esse labore eius maxime repellat. Veritatis dolores vero ea doloremque cupiditate culpa placeat ratione suscipit nesciunt vitae. Et rerum ab autem quo dolorum. Dignissimos dolor atque recusandae deserunt.

                            </p>
                        </div>
                    </div>
                </div>
            </div>


            <div class="post">
                <div class="container">
                    <div class="row">
                        <div class="col-md-12">
                            <h2 class="post-title">This is a beautifulday in Dhaka!</h2>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-4">
                            <p>
                                <strong>John Doe</strong>
                                15th May, 2018
                            </p>
                            <ul class="list-unstyled">
                                <li>Dhaka</li>
                                <li>blog</li>
                                <li>weather</li>
                            </ul>
                        </div>
                        <div class="col-md-8">
                            <p>
                                <img src="#" alt="Post Title" class="img-fluid">
                            </p>
                            <p>Lorem ipsum, dolor sit amet consectetur adipisicing elit. Dolor praesentium enim ducimus temporibus velit accusamus ab quis sequi assumenda voluptate, doloremque officiis quae ea quam magni nulla officia. Ullam, et!

                            </p>
                            <p>
                                Lorem, ipsum dolor sit amet consectetur adipisicing elit. Amet accusantium ipsam velit debitis unde eveniet quos adipisci, recusandae eligendi id beatae praesentium esse labore eius maxime repellat. Veritatis dolores vero ea doloremque cupiditate culpa placeat ratione suscipit nesciunt vitae. Et rerum ab autem quo dolorum. Dignissimos dolor atque recusandae deserunt.
                                
                            </p>
                        </div>
                    </div>
                </div>
            </div>

        </div>

        <div class="footer">
            <div class="container">
                <div class="row">
                    <div class="col-md-12">
                        &copy; Shafiulazam.me - All Rights Reserved
                    </div>
                </div>
            </div>
        </div>

        <?php wp_footer(); ?>
    
    </body>
</html>


style.css

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
    border-bottom: 1px solid #ccc;
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

.footer{
    padding-bottom: 10px;
    padding-top: 10px;
    background-color: #222;
    color:#ccc;
}

.tags li{
    color: #3D9970;
}












            
