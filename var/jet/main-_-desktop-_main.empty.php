<?php
#y_desktop _main
extract($_vars, EXTR_REFS);
trace('TPL: y_desktop _main'); MVC::in_tpl(true);
if (false != ($sky->return || 1 == $sky->ajax && !$sky->is_sub))
throw new Error('Return status do not match for file: ' . __FILE__) ?><!doctype html>
<head><?php MVC::head() ?></head>
<body>
<div id="wrapper">
  <div id="head"><a href="<?php echo html(PATH) ?>">MAIN</a> <?php MVC::pdaxt() ?></div>
  <div id="content"><div><h1>HOLE.SKY. <?php echo html(SKY::version()['app'][3]) ?></h1>
<h2>Start new SKY-application from the scratch</h2>
<hr></div></div>
  <div id="foot">
    Powered <a href="#">by SKY-Framework</a>
    <?php echo html(SKY::version()['app'][1]) ?>, <?php echo date('Y') ?> year
  </div>
</div>
<?php if (2 == $sky->d_var): DEV::ed_var(get_defined_vars()); endif; MVC::tail() ?>
</body>
</html><?php MVC::in_tpl();
return '';
