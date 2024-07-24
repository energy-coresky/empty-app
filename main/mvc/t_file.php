<?php

class t_file extends Model_t
{
    function listing() {
        return [
            'query' => sql('select * from file'),
            'row_c' => function ($row) {
                $row->type = explode(' ', $row->type);
            },
        ];
    }
}
