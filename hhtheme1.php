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

<?php

function alpha_bootstrapping(){
   load_theme_textdomain("alpha");
   add_theme_support("post-thumbnails");
   add_theme_support("title-tag");
}

add_action("after_setup_theme","alpha_bootstrapping");








            
