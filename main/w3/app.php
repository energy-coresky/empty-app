<?php

class App extends Console
{
    /** This is just test */
    function a_base() {
        var_dump(SKY::$dd);
    }

    /** Test without database */
    function a__base() {
        var_dump(SKY::$dd);
        print_r(array_values(Debug::get_classes()[1]));
    }

    /** Set environment to DEV-mode */
    function a_dev() {
        $ary = bang(Plan::_gq('../.env'));
        $ary['APP_DEV'] = 'true';
        Plan::_p('../.env', unbang($ary));
        Debug::drop_all_cache();
    }

    /** Set environment to PROD-mode */
    function a_prod() {
        $ary = bang(Plan::_gq('../.env'));
        $ary['APP_DEV'] = 'false';
        Plan::_p('../.env', unbang($ary));
        Debug::drop_all_cache();
    }

    /** See environment status */
    function a_stat() {
        $ary = bang(Plan::_gq('../.env'));
        echo "DEV=$ary[APP_DEV]";
    }

    /** Test yamls */
    function a_test() {
        require 'main/tests/list.php';
    }
}
