<?php

class t_users extends Model_t
{
    private $pid = 0;

    function cform($doc_id) {
        global $sky;

        $form = new Form([
            -1 => [
                '#' => t('введите цифры'),
            ],
            [t('Время до обеда, часы'), [
                '#fr_0' => [t('с'), 'number', 'style="width:45px;"'],
                '#to_0' => [t('по'), 'number', 'style="width:45px;"'],
            ]],
            [t('Время после обеда, часы'), [
                'fr_1' => [t('с'), 'number', 'style="width:45px;"'],
                'to_1' => [t('по'), 'number', 'style="width:45px;"'],
            ]],
            '#step' => [t('Длительность приема, минут'), 'number', 'style="width:45px;"'],
            [t('Сохранить'), 'submit', 'onclick="return sky.f.submit()"'],
        ]);
        $conf = $this->conf($doc_id, false);
        if ($_POST) {
            $conf = $form->validate();
            foreach ($conf as $k => &$v) {
                is_numeric($v) && $v > 0 or $v = 0;
                if ('step' == $k) {
                    $v > 9 or $v = 10;
                    $v <= 120 or $v = 120;
                } else $v < 23 or $v = 23;
            }
            SKY::w($conf);
            jump();
        }
        return $form->def($conf, true);
    }
}
