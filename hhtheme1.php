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
            
            
