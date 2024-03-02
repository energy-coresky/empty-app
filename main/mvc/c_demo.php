<?php

class c_demo extends Controller
{
    function a_tests() {
    }

    function a_upload() {
        upload\ant::init();
    }

    function a_file($id) {
        upload\ant::get_file($id);
    }

    function a_test1() {
        throw new Error('Crash pretty');
    }

    function a_test2() {
    }

    function a_test3() {
        return 404;
    }

    function j_test4() {
        echo [];
        return true;
    }

    function j_test5() {
        throw new Error('Crash 5');
    }

    function a_test6() {
    }

    function a_test7() {
        MVC::mime('image/png');
        echo []; # error
        throw new Stop;
    }

    function a_test8() {
    }
}
