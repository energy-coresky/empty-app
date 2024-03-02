<?php

class Middleware extends Model_m
{
    function __construct() {
        global $sky, $user;

        $sky->open();
        $sky->has_public = $sky->admins = false;
        $sky->fly or MVC::$layout = $sky->is_mobile ? 'mobile' : '_default.layout';
        $sky->show_pdaxt = true;
        $user = new USER;
        $user->guard_csrf();
        $user->guard_origin();

        ACM::init([
            'aclp' => fn() => (object)$this->t_users->acl(),
            'aclu' => fn() => (object)$this->t_users->acl(),
        ]);

        if ('main' == Plan::$view && $user->v_style)
            Plan::$view = $user->v_style;
    }
}
