<?php

class ACM # fictitious class used when ACL ware do not installed
{
    static function __callStatic($name, $args) {
        global $user;
        return 1 == $user->pid;
    }
}
