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
