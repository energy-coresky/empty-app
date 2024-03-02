<?php

class common_c extends Controller
{
    use HOOK_C;

    function head_y($action) {
        new Middleware;

        return [
            'dtroot' => $this->t_users->dtroot(),
        ];
    }

    function tail_y() {
        global $user;

        if (!MVC::$layout)
            return;
        Plan::tail('', '~/m/desktop.js', '~/m/desktop.css');

        return [
            'user' => $user,
        ];
    }

    function error_y($action) {
        return [
            'h1' => 'HOLE.SKY version ' . SKY::version()['app'][3],
        ];
    }

    static function make_h($forward) {
        sqlf('delete from $_visitors');
        sqlf('update $_memory set dt=null, tmemo="" where id<8');
        sqlf('vacuum');
        $swap = ['C:/web/air_wares' => 'vendor/coresky'];
        $forward or $swap = array_flip($swap);
        Plan::_p('wares.php', strtr(Plan::_g('wares.php'), $swap));
        return Install::make($forward, [function () {
            echo "\nTimezone's 'first-run' written\n";
            return yml('+ @eval @inc(make) mvc/timezone.yaml');
        }]);
    }
}
