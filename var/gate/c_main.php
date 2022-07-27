<?php

trace('GATE: c_main, ' . ($recompile ? 'recompiled' : 'used cached'));

class Gape extends Bolt
{
	function empty_a($sky, $user) {
		1 == $sky->method && !$sky->surl or e();
	}
}

class c_main_cached extends Controller
{
    function empty_a() {
    }
}
