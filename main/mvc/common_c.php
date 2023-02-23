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
        $this->_doc_id = $this->_day = 0;
        $this->_today = substr(NOW, 0, 10);
        $user->v_day_lo or $user->v_day_lo = $this->_today;
        return ['pid' => $this->_pid = $user->pid];
    }

    function init() {
        global $sky, $user;

        $sky->open();
        $user = new USER;
        $user->guard_csrf();
        $user->guard_origin();

        $sky->has_public = $sky->admins = false;
        $sky->is_mobile = $user->v_mobi;

       $sky->ajax or MVC::$layout = $sky->is_mobile ? 'mobile' : 'desktop';
        $sky->show_pdaxt = true;

        $no_auth = $sky->_0 == '_init' || $sky->_0 == 'main' && $sky->_1 == 'lang';

        if (!$user->id && $sky->ajax && !$no_auth) { # jump to auth form
            $this->error_no = 12;
            throw new Exception(11);
        }
    }

    function tail_y() {
        global $sky, $user;

        if (!MVC::$layout)
            return;

        return [
            'user' => $user,
        ];
    }
}
