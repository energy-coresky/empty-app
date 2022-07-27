<?php

class default_c extends Controller
{

    function a_auth() {
        global $user;
        if ($_POST && $user->login() || $user->auth)
            jump();
        MVC::body('main.auth');
        return [
            'k_title' => 'Login',
            'login' => $this->_1,
        ];
    }

    function a_logout() {
        global $user;
        $user->logout();
    }
}
