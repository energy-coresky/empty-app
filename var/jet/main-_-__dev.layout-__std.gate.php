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
    <div id="top-head" style="width:calc(100% - 380px)"><h4><span style="color:#4338ca">CONTROLLER</span>:<b>
<?php if ($list[$y_1]): ?>
    <span style="color:#000"><?php echo html(strtoupper($h1)) ?>.PHP</span>
<?php else: ?>
    <span style="color:red"><?php echo html(strtoupper($h1)) ?>.PHP</span> (not exists)
    <a href="javascript:;" onclick="ajax('<?php echo html($y_1) ?>','v-body','_delete')">delete</a>
<?php endif ?>
</b></h4></div>
    <div style="text-align:right; width:110px"><a href="javascript:;" onclick="sky.d.close_box()">Esc - Close <svg xmlns="http://www.w3.org/2000/svg" width="10" height="10" fill="currentColor" class="bi bi-x-lg" viewBox="0 0 16 16">
  <path d="M1.293 1.293a1 1 0 0 1 1.414 0L8 6.586l5.293-5.293a1 1 0 1 1 1.414 1.414L9.414 8l5.293 5.293a1 1 0 0 1-1.414 1.414L8 9.414l-5.293 5.293a1 1 0 0 1-1.414-1.414L6.586 8 1.293 2.707a1 1 0 0 1 0-1.414z"></path>
</svg></a></div>
</div>

<div id="v-menu">

    <div class="other-task" style="position:sticky; top:0px">Tasks</div>
    
    <?php $_ = 0; foreach ($y_tasks as $uri => $name): ?>
        <a href="<?php echo html($uri) ?>"<?php echo ($sky->_0 == explode('?', $uri)[0] && 'ware' != $sky->_1) ? ' active' : '' ?>><?php echo html($name) ?></a>
        <?php if ('_gate' == $uri):
$_2 = 0; foreach ($list as $one => $ex): ?>
    <a href="<?php echo html(PATH) ?>?_gate=<?php echo $one ?>" class="inner-menu" style="background:<?php echo $ex?(1==$ex?'':'#cfc'):'#fcc' ?>"<?php echo ($one==$y_1) ? ' active' : '' ?>>
        <?php echo '*' == $one ? 'default_c' : "c_$one" ?>.php <?php if (!in_array($ex,['0','1'])): ?>(<?php echo html($ex) ?>)<?php endif ?>
    </a>
<?php $_2++; endforeach ?>
        <?php elseif ('_lang?list' == $uri): ?>
        <?php elseif ('_inst' == $uri): ?>
        <?php elseif ('_glob' == explode('?', $uri)[0]): ?>
        <?php elseif ('_dev' == explode('?', $uri)[0]): ?>
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

<div id="gate">
<?php if ($y_1): ?>
    <label class="fr">
        Show code <input type="checkbox"<?php echo html($cshow) ?> onchange="dev('<?php echo $y_1 ?>',{s:this.checked})"/>
    </label><br><br>
    <div style="display:none" id="c23-tpl"><?php MVC::in_tpl(false);view("c23_edit");MVC::in_tpl() ?></div>
    <?php $_ = 0; foreach ($e_func as $row): ?>
    <fieldset>
        <?php if ($row->delete): ?>
            <legend style="background:pink;color:#000"><?php echo html($row->func) ?></legend>
        <?php else: ?>
            <legend><b><?php echo html($row->func) ?></b><?php echo html($row->pars) ?></legend>
        <?php endif ?>
        <input type="hidden" name="args" value="<?php echo html($row->pars) ?>"/>
        <?php if ($cshow): ?>
            <div class="func-code" style="overflow:auto;padding: 7px;"><?php echo $row->code ?></div>
            <div class="the-url" style="overflow:auto">
                <?php echo html(PROTO) ?>://<?php echo $row->url ?>
            </div>
        <?php else: ?>
            <div class="function"><table width="100%"><tr>
    <td width="33%" valign="top">
        <?php echo $row->c1 ?>
    </td>
    <td width="33%" valign="top" id="column-2">
        <u>End-point address</u>:<br><br>
        <?php echo $row->c2 ?>
    </td>
    <td width="33%" valign="top">
        <?php if (!$row->code): ?>
        <div class="fr" style="text-align:right">
            <?php if ($row->delete): ?>
                <input type="button" class="edit" value="delete" onclick="ajax('<?php echo html($y_1) ?>.<?php echo html($row->func) ?>','v-body','_delete')"/>
            <?php endif ?>
            <input type="button" class="edit" value="edit" onclick="sky.g.edit(this,'<?php echo html($y_1) ?>.<?php echo html($row->func) ?>')"/>
        </div>
        <?php endif ?>
        <u>Postfields or body</u>:<br><br>
        <?php echo $row->c3 ?>
    </td>
</tr></table>
<?php if ($row->code): ?>
    <table width="100%"><tr>
        <td width="85%" style="background:#fff;border:none;padding:10px;">
            <div class="fl" style="position:">
                <div class="fl" style="position:relative;top:-18px; left:120px; background:#fff;">
                    <label><input type="checkbox" name="production"<?php echo html($row->prod) ?>>show production code</label>
                </div>
            </div>
            <div id="func-code" style="overflow:auto"><?php echo $row->code ?></div>
        </td>
        <td width="15%" valign="top" style="border:none" onmouseenter="sky.g.code(this,'<?php echo html($sky->_1) ?>')">
            <input type="button" value="save" onclick="sky.g.save(this,'<?php echo html($sky->_1) ?>')"/>
            <input type="button" value="cancel" onclick="sky.g.cancel(this)"/>
        </td>
    </tr></table>
    <div id="the-url" style="overflow:auto">
        <?php echo html(PROTO) ?>://<?php echo $row->url ?>
    </div>
<?php elseif ($row->error): ?>
    <table width="100%">
        <tr><td style="background:pink; padding:5px 10px; text-align:center; color:#f00;"><?php echo html($row->error) ?></td></tr>
    </table>
<?php endif ?></div>
        <?php endif ?>
    </fieldset>
    <?php $_++; endforeach;
else: ?>
    <h1><u>Sky Gate</u>: No controllers</h1>
<?php endif ?>
</div>
<script>
sky.g.edit = function(el, func, scroll) {
    sky.g.mem = func;
    $('input.edit').hide();
    el = $(el).parents('.function');
    sky.g.html = el.html();
    ajax(encodeURIComponent(func), function(r) {
        el.html(r).parent().css({background:'#e0e7ff',borderBottom:'3px solid #77f'}).find(':checkbox').click(function() {
            sky.g.code(el, func);
        });
        if (scroll)
            el.get(0).scrollIntoView({block:'center',behavior:'smooth'});
        $('#func-code').width($('#v-body').width() * 0.8);
    }, '_edit');
};
sky.g.code = function(el, func) {
    ajax(encodeURIComponent(func), $(el).parents('fieldset:eq(0)').serialize(), function(r) {
        $('#func-code').html(r.code);
        $('#the-url').html(r.url);
    }, '_code');
};
sky.g.cancel = function(el) {
    $(el).parents('.function').html(sky.g.html).parent().css({background:'',borderBottom:''});
    $('input.edit').show();
};
sky.g.save = function(el, func) {
    ajax(encodeURIComponent(func), $(el).parents('fieldset:eq(0)').serialize(), function(r) {
        $(el).parents('.function:eq(0)').html(r).parent().css({background:'#e7ebf2', borderBottom:''});
        $('input.edit').show();
    }, '_save');
};
sky.g.tpl = function(el, v) {
    var div = $($('#c23-tpl').html()).insertBefore(el).css({background:v ? '#efe' : '#fee'});
    el = div.find("input:checkbox");
    v && $('input[name=cnt-addr]').val(1 + parseInt($('input[name=cnt-addr]').val()));
    el.click(function() {
        sky.g.code(el, sky.g.mem);
    });
};
sky.g.hide = function(el) {
    if ($(el).parents('#column-2').attr('id'))
        $('input[name=cnt-addr]').val(parseInt($('input[name=cnt-addr]').val()) - 1);
    var el2 = $(el).parents('.c23-tpl'), el3 = el2.parent();
    el2.remove();
    sky.g.code(el3, sky.g.mem);
};
$(function() {
    if ('<?php echo html($func) ?>') {
        $('#v-body div:eq(0)').prepend(
            '<div style="margin:0 10px;">'
            + window.parent.document.getElementById('trace-x').innerHTML + '</div>'
        );
        $('h1 span.gate-err').html('<?php echo html($h1) ?>::<?php echo html($func) ?>');
        sky.set_file_clk('#v-body');
        setTimeout(function() {
            var el = false;
            $('#gate legend b').each(function() {
                if ($(this).text() == '<?php echo html($func) ?>')
                    el = $(this).parent().parent().find('input[type=button]')[0];
            });
            sky.g.edit(el, '<?php echo html($y_1) ?>.<?php echo html($func) ?>', true);
        }, 500);
    }
});
</script>

<style>
fieldset { border:none; background:#eee; margin-bottom:10px; padding-top:0px; }
fieldset legend { position:relative;top:-5px; left:40px; }
#gate { margin:10px }
#gate legend { font-size:14px; }
div.function { margin-top:-9px; }
.c23-tpl {
    width:95%; margin:0 0 5px 0; padding:3px;
    border-bottom:1px solid #555; border-right:1px solid #555; border-left:1px solid #ddd; border-top:1px solid #ddd;
}
.c23-view {
    width:95%; margin:0 0 5px 0; padding:3px; font-family:monospace;
    border-bottom:1px solid #555; border-right:1px solid #555; border-left:1px solid #ddd; border-top:1px solid #ddd;
}
#func-code code, .func-code, .func-code code {
    font:normal 12px monospace;
    background: #fff;
}
#the-url, .the-url {
    font:normal 14px monospace;
    background: #ffc;
    padding: 2px 5px;
}
</style></div>
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
