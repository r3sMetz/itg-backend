<?php
  /** Adding Company Data Options Page **/
  if(function_exists('acf_add_options_page')){
    // Define Arguments
    $option_page_args = array(
      'page_title' => 'Allgemeine Daten',
      'position' => 4,
      'icon_url' => 'dashicons-nametag',
      'update_button' => "Firmendaten aktualisieren",
      'updated_message' => "Die Firmendaten wurden aktualisiert."
    );

    // Actual adding of the options-page
    acf_add_options_page($option_page_args);
  }