<?php

class t_users extends Model_t
{
    function dtroot() {
        return function () {
            $this->update(['!dt_r' => '$now', '!dt_u' => '$now'], 1);
        };
    }

    function acl() {
        return [
            'columns' => ['id', 'name || " " || dt', ['name', 'dt']],
            'from' => $this->qp('from $_memory where imemo=0'),
            'order' => 'order by id desc',
        ];
    }
}
