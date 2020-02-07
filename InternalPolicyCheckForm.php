<?php
/**
* Plugin Name: Internal Policy Check Form
* Description: Automatic creation of Internal Policy (Cyberplaner) documents, according to FCC guidelines.
* Version: 1.0.0
* Author: Demetris Gerogiannis (DpG)
**/

//include policy form guide
include "form-structure.php";

//draw steps
function draw_internal_policy_form($attr) { 
    include "templates/tabs.php";
}; 
add_shortcode('fcc_internal_policy_form', 'draw_internal_policy_form');