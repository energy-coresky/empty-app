<?php

class default_c extends Controller
{
    use HOOK_D;

    function empty_a() {
    }

    function a_auth() {
        global $user;
        if ($_POST && $user->login() || $user->auth)
            jump();
    }

    function a_logout() {
        global $user;
        $user->logout();
    }
}
