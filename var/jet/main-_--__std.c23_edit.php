<?php
#__std
extract($_vars, EXTR_REFS);
trace('TPL: __std'); MVC::in_tpl(true);
if (false != ($sky->return || 1 == $sky->ajax && !$sky->is_sub))
throw new Error('Return status do not match for file: ' . __FILE__) ?><div class="c23-tpl" style="background:<?php echo $isaddr?'#efe':'#fee' ?>">
    <a class="red-link fr" href="javascript:;" onclick="sky.g.hide(this)"><svg xmlns="http://www.w3.org/2000/svg" width="10" height="10" fill="currentColor" class="bi bi-x-lg" viewBox="0 0 16 16">
  <path d="M1.293 1.293a1 1 0 0 1 1.414 0L8 6.586l5.293-5.293a1 1 0 1 1 1.414 1.414L9.414 8l5.293 5.293a1 1 0 0 1-1.414 1.414L8 9.414l-5.293 5.293a1 1 0 0 1-1.414-1.414L6.586 8 1.293 2.707a1 1 0 0 1 0-1.414z"></path>
</svg></a>
    <input name="kname[]" size="6" placeholder="key name" value="<?php echo html($kname) ?>"/>
    <input name="key[]" size="15" placeholder="key" value="<?php echo html($key) ?>"/>
    <div style="margin-top:2px">
        <input name="vname[]" size="6" placeholder="val name" value="<?php echo html($vname) ?>"/>
        <input name="val[]" size="15" placeholder="val" value="<?php echo html($val) ?>"/>
        <label>
            ns<input type="checkbox" onclick="$(this).next().val(this.checked?1:0)"<?php echo $chk ? ' checked' : '' ?>/>
            <input type="hidden" name="chk[]" value="<?php echo html($chk) ?>"/>
        </label>
    </div>
</div><?php if (2 == $sky->d_var): DEV::ed_var(get_defined_vars()); endif;
MVC::in_tpl();
return '';
