<?php
    /*
        Define the Internal Policy Form Structure
        (properties & related info)
    */
    include "form-structure.php";

    if (!isset($_GET['sections']))
        die('Invaild access.');

    $sections = json_decode($_GET['sections']);
    if (json_last_error() != JSON_ERROR_NONE)
        die('Invaild access.');
    

    //All clear --> generate plan
    foreach ($sections as $key=>$val) {
        foreach ($securedam_internal_policy_form_sections as $sec) {
            if ($sec['slug'] == $key) {
                if ($val == 'yes') {
                    include  './policies/' . $sec['policy'];
                    echo "<br/><br/>";
                }
            }
        }
    }
    echo "<hr/><i>Last Updated: " . date("Y-m-d h:i:sa") . "</i>";
?>