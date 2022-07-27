<?php
#__dev __std
extract($_vars, EXTR_REFS);
trace('TPL: __dev __std'); MVC::in_tpl(true);
if (false != ($sky->return || 1 == $sky->ajax && !$sky->is_sub))
throw new Error('Return status do not match for file: ' . __FILE__) ?><!doctype html><html>
<head><?php MVC::head() ?><script>sky.a._0 = sky.a.div = '<?php echo html($sky->_0) ?>'; sky.a._1 = '<?php echo html($sky->_1) ?>'; sky.a.uri = '<?php echo html(URI) ?>'</script>
</head>
<body>
<div id="main">
<div id="v-head">
    <div style="width:126px"><a href="<?php echo html(PATH);
echo html($sky->d_last_page ?: '_dev') ?>">
        ▼ <?php echo html('ware'==@(explode('?', $sky->d_last_page))[1] ? 'Wares' : 'Tasks') ?></a><a
        href="javascript:;" onclick="history.back()"><span style="font-family:Verdana;">&#9668;</span> Back</a>
    </div>
    <div style="width:144px">
    <?php $_ = 0; while ($_ < 4): ?><a href="_x<?php echo html($_) ?>"<?php echo ("_x$_" == $y_tx) ? ' active' : '' ?>><?php echo html($_ ? "X$_" : 'T0') ?></a><?php $_++; endwhile ?>
    </div>
    <div id="top-head" style="width:calc(100% - 380px)"><h4><u>DEV INSTANCE ONLY</u> CONFIGURATION AND INFORMATION</h4></div>
    <div style="text-align:right; width:110px"><a href="javascript:;" onclick="sky.d.close_box()">Esc - Close <svg xmlns="http://www.w3.org/2000/svg" width="10" height="10" fill="currentColor" class="bi bi-x-lg" viewBox="0 0 16 16">
  <path d="M1.293 1.293a1 1 0 0 1 1.414 0L8 6.586l5.293-5.293a1 1 0 1 1 1.414 1.414L9.414 8l5.293 5.293a1 1 0 0 1-1.414 1.414L8 9.414l-5.293 5.293a1 1 0 0 1-1.414-1.414L6.586 8 1.293 2.707a1 1 0 0 1 0-1.414z"></path>
</svg></a></div>
</div>

<div id="v-menu">

    <div class="other-task" style="position:sticky; top:0px">Tasks</div>
    
    <?php $_ = 0; foreach ($y_tasks as $uri => $name): ?>
        <a href="<?php echo html($uri) ?>"<?php echo ($sky->_0 == explode('?', $uri)[0] && 'ware' != $sky->_1) ? ' active' : '' ?>><?php echo html($name) ?></a>
        <?php if ('_gate' == $uri): ?>
        <?php elseif ('_lang?list' == $uri): ?>
        <?php elseif ('_inst' == $uri): ?>
        <?php elseif ('_glob' == explode('?', $uri)[0]): ?>
        <?php elseif ('_dev' == explode('?', $uri)[0]):
$task_act = $sky->_1 ?: 'overview';
$_2 = 0; foreach (['overview', 'system'] as $name): ?>
    <a class="inner-menu" href="_dev?<?php echo $name ?>"<?php echo ($task_act == $name) ? ' active' : '' ?>><?php echo ucfirst($name) ?></a>
<?php $_2++; endforeach ?>
        <?php endif ?>
    <?php $_++; endforeach ?>
    <?php if (in_array($sky->_0, ['_glob', '_lang', '_earth', '_mercury'])): ?>
        <a href="_dev?ware">Browse All Wares</a>
    <?php endif ?>
    <a href="javascript:;" onclick="var x=this;ajax('',function(r) { sky.d.drop_cache(r,x) },'_drop')">Drop All Cache</a>
    
        <br><div class="other-task">Wares</div>
    <a class="inner-menu"<?php echo ('_dev?ware' == URI) ? ' active' : '' ?> href="_dev?ware">Browse All..</a>
    <?php $_ = 0; foreach ($y_wares as $uri => $name): ?>
        <a href="<?php echo html($uri) ?>?ware"<?php echo ($uri == URI) ? ' active' : '' ?>><?php echo html($name) ?></a>
    <?php $_++; endforeach ?>
    <div id="dev-empty"></div>

</div>

<div id="v-body">
    <div style="display:table-cell; width:inherit;" class="<?php echo html($y_page) ?>">

<div style="padding:10px 0 0 10px">
<fieldset><legend>DEV instance settings, <?php echo html($_SERVER['REMOTE_ADDR']) ?></legend>
<?php echo $form ?>
</fieldset>
<?php echo Root::_overview(0) ?>
</div></div>
    <div id="trace-h" style="display:none"><?php echo $err_ajax ?? '' ?></div>
</div>

<div id="v-tail">
    <span style="width:40%" id="master"></span>
    <div style="width:35%" id="tpl-list">
        <form method="post" style="display:inline-block"><input type="hidden" name="t0">
        <a href="javascript:;" onclick="sky.d.view(<?php echo html(preg_match("/^_x(\d)$/",URI,$m)?$m[1]:0) ?>)"<?php echo ('_dev?view=' == substr(URI, 0, 10)) ? ' active' : '' ?>>
            ▲ Views (<span>?</span>)
        </a>&nbsp; &nbsp;
        <a href="#">
            ▲ SQLs (?)
        </a>&nbsp; &nbsp;
        <a href="#">▲ Classes (?)</a>
        </form>
    </div>
    <div style="text-align:right; width:25%"><b><?php echo html($sky->d_app) ?>.SKY. <?php echo html(SKY::version()['app'][3]) ?></b></div>
</div>

    <style>#v-menu { width: 170px; } #v-body { width: calc(100vw - 170px); }</style>

</div>
<?php if (2 == $sky->d_var): DEV::ed_var(get_defined_vars()); endif; MVC::tail() ?></body></html><?php MVC::in_tpl();
return '';
