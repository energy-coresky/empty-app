<?php
#__vend
ob_start(); extract($_vars, EXTR_REFS);
trace('TPL: __vend'); MVC::in_tpl(true);
if (true != ($sky->return || 1 == $sky->ajax && !$sky->is_sub))
throw new Error('Return status do not match for file: ' . __FILE__) ?><div style="display:inline-flex;">
<div>
<div style="position:sticky; top:41px; width:370px;height:calc(100vh - 96px); overflow:auto">
    <div class="bg-wx bg-a fs16"><?php echo html($act_name) ?></div>
    <div id="vend-tags"><?php echo $row->tags ?></div>
    <dl><dt>Url</dt><dd><?php echo html($url) ?></dd></dl>
    <dl><dt>Repository</dt><dd><?php echo html($repo) ?></dd></dl>
    <div id="vend-detail">
<?php echo $row->html ?>
    </div>
</div>
</div><div style="width:calc(100% - 370px);"><script>sky.d.packs = []</script>
<?php $_ = 0; foreach ($list as $row): ?>
<div class="vend-x" onclick="sky.d.detail(this)" i="<?php echo html($_) ?>" n="<?php echo html($row->name) ?>">
    <span style="position:absolute;top:1px;left:8px;"><span style="font:bold 17px serif">⬇</span> <?php echo html($row->downloads) ?></span>
    <span style="position:absolute;top:3px;right:8px;"><big>★</big><?php echo html($row->favers) ?></span>
    <h2 style="line-height:20px;"><?php echo html($row->name) ?></h2><script>sky.d.packs.push(['<?php echo html($row->url) ?>', '<?php echo html($row->repository) ?>'])</script>
    <div class="were-desc" style="height:75px; position:absolute; bottom:5px;">
        <?php if ($row->description):
echo html($row->description);
else: ?>
            This package don't have description
        <?php endif ?>
    </div>
</div><?php $_++; endforeach;
if (!$_): ?><h1>No packages found</h1>
<?php endif ?>
</div>
</div><?php if (2 == $sky->d_var): DEV::ed_var(get_defined_vars()); endif;
MVC::in_tpl();
return ob_get_clean();
