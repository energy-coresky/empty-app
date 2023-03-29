<?php

class common_c extends Controller
{
    use HOOK_C;

    function error_y($action) {
        return ['h1' => 'HOLE.SKY version ' . SKY::version()['app'][3]];
    }

    function head_y($action) {
        global $user;

        $this->init();
        Plan::$view = $user->v_style ?: 'main';
        return ['pid' => $user->pid];
    }

    function init() {
        global $sky, $user;

        $sky->open();
        $sky->has_public = $sky->admins = false;
        $sky->fly or MVC::$layout = $sky->is_mobile ? 'mobile' : 'desktop';
        $sky->show_pdaxt = true;
        $user = new USER;
        $user->guard_csrf();
        $user->guard_origin();
    }

    function tail_y() {
        global $sky, $user;

        if (!MVC::$layout)
            return;

        return [
            'user' => $user,
        ];
    }

    static function make_h($forward) {
        sqlf('delete from $_visitors');
        sqlf('vacuum');
        Install::make($forward, ['common_c::trivial']);
    }

    static function trivial() {
        return ['This is a trivial test. Hit "Run app anyway" if all other OK', false];
    }
}
