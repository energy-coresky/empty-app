<?php
#__vend
ob_start(); extract($_vars, EXTR_REFS);
trace('TPL: __vend'); MVC::in_tpl(true);
if (true != ($sky->return || 1 == $sky->ajax && !$sky->is_sub))
throw new Error('Return status do not match for file: ' . __FILE__) ?>
    <dl><dt>Type</dt><dd><?php echo html($row->type ?? 'library') ?>, PHP <?php echo html($row->require->php ?? '?') ?></dd></dl>
    <dl><dt>Versions (<?php echo html($cnt) ?>)</dt><dd><?php echo html($cnt ? $row->version . $ver : '-') ?></dd></dl>
    <?php if ($row && $row->homepage): ?><dl><dt>Homepage</dt><dd><?php echo html($row->homepage) ?></dd></dl><?php endif ?>
    <dl><dt>License</dt><dd><?php echo html(implode(', ', $row->license ?? []) ?: '-') ?></dd></dl>
    <?php if ($authors): ?><dl><dt>Authors</dt><dd><?php echo $authors ?></dd></dl><?php endif ?>
    <dl><dt>Last version</dt><dd><?php echo html($row->time ?? '') ?></dd></dl>
    <?php if (0): ?><pre><?php echo html($sky->_1.' authors '.$detail) ?></pre><?php endif;
if (2 == $sky->d_var): DEV::ed_var(get_defined_vars()); endif;
MVC::in_tpl();
return ob_get_clean();
