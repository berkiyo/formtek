<?php
/*
Plugin Name: Formtek
Plugin URI: N/A
Description: An easy to use contact form plugin that is extensible, secure and stays out of your way.
Version: 0.1
Author: Berk Dogan
Author URI: http://tekbyte.net

Copyright 2021 Berk Dogan (email : berk@tekbyte.net)
Formtek is free software: you can redistribute it and/or modify
it under the terms of the GNU General Public License as published by
the Free Software Foundation, either version 2 of the License, or
any later version.
 
Formtek is distributed in the hope that it will be useful,
but WITHOUT ANY WARRANTY; without even the implied warranty of
MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE. See the
GNU General Public License for more details.
 
You should have received a copy of the GNU General Public License
along with Formtek. If not, see (https://www.gnu.org/licenses/).

*/

// absolute path that is definied by WordPress
if (! function_exists('add_action')) {
    echo 'Forbidden - You cannot access this file';
    die;
}


// let's get into the OOP side of things
class FormtekPlugin {

    function activate() {
        echo 'The plugin is now activated';
    }

    function deactivate() {
        echo 'The plugin is now deactivate';
    }

    function uninstall() {

    }

}

if (class_exists('FormtekPlugin')) {
    $formtekPlugin = new FormtekPlugin();
}


// activation
register_activation_hook(__FILE__, array($formtekPlugin, 'activate')); // we pass an array, use our object and call the activate function (__FILE__ is global)

// deactivation

// uninstall

?>