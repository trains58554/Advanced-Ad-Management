<?php 
/**
     * Get if user is on search page
     *
     * @return boolean
     */
    function osc_is_custom_page() {
        $location = Rewrite::newInstance()->get_location();
        if($location=='custom') {
            return true;
        }
        return false;
    }

function item_republish_before() {
      if(osc_is_custom_page()) {
         osc_add_flash_error_message( _m('Item has been republished')) ;
         //osc_resend_flash_messages();
         header("Location: " . osc_base_url(true));
         exit;
      } 
    }
?>