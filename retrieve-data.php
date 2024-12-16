<?php
/* Template Name: Retrieve Data */


get_header(); 

global $wpdb;
$results = $wpdb->get_results("SELECT * FROM client_leads");

if ($results) {
    foreach ($results as $row) {
        echo "<p>" . $row->name . ": " . $row->message . "</p>";
    }
} else {
    echo "No leads found.";
}


get_footer();
?>
