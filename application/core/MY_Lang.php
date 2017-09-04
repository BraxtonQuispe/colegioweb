<?php

(defined('BASEPATH')) OR exit('No direct script access allowed');

class MY_Lang extends CI_Lang {

    function __construct() {
        parent::__construct();
        $config = & get_config();
        if (isset($config['languages']) && isset($config['redirect_urls'])) {
            global $URI, $CFG, $IN;
            $lang = (isset($URI->segments['1'])) ? $URI->segments['1'] : '';

            $uri = $URI->segments;            
          
        }
    }

}
